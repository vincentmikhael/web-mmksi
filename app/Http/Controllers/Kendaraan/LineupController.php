<?php

namespace App\Http\Controllers\Kendaraan;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Kendaraan\Lineup;
use App\Models\Kendaraan\LineupWarna;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class LineupController extends Controller
{
    public function index($id_kendaraan){
        $lineup = Lineup::where('id_kendaraan',$id_kendaraan)->get();
        return view('dashboard/kendaraan/lineup/index',compact('lineup','id_kendaraan'));
    }

    public function add($id_kendaraan){
        return view('dashboard/kendaraan/lineup/add',compact('id_kendaraan'));
    }

    public function edit($id_kendaraan,$id_lineup){
        $lineup = Lineup::find($id_lineup);
        $lineup_warna = LineupWarna::where('id_lineup',$id_lineup)->get();
        return view('dashboard/kendaraan/lineup/edit',compact('id_kendaraan','lineup','lineup_warna'));
    }

    public function add_action(Request $request,$id_kendaraan){
        $id = Lineup::insertGetId([
            'nama' => $request->nama,
            'harga' => $request->harga,
            'id_kendaraan' => $request->id_kendaraan
        ]);
        $data = [];
        foreach($request->item as $item){
            $gambar = time() . $item['gambar']->getClientOriginalName();
            $item['gambar']->move(public_path('images/lineup_kendaraan/'), $gambar);

            $data[] = [
                "gambar" => "images/lineup_kendaraan/" . $gambar,
                "kode_warna" => $item['kode_warna'],
                "id_lineup" => $id
            ];
        }
   

        LineupWarna::insert($data);
        return redirect()->to('/kendaraan/'.$request->id_kendaraan.'/lineup')->with('success','Data berhasil ditambahkan');
    }

    public function update(Request $request,$id_kendaraan,$id_lineup){
        Lineup::where('id',$id_lineup)->update([
            'nama' => $request->nama,
            'harga' => $request->harga,
        ]);

        $data = [];
        
        foreach($request->item as $idx => $item){
            if(!isset($item['id'])){
                $gambar = $idx . $item['gambar']->getClientOriginalName();
                $item['gambar']->move(public_path('images/lineup_kendaraan/'), $gambar);
    
                $data[] = [
                    "gambar" => "images/lineup_kendaraan/" . $gambar,
                    "kode_warna" => $item['kode_warna'],
                    "id_lineup" => $id_lineup
                ];
            }else{
                $updated = [
                    "kode_warna" => $item['kode_warna'],
                ];
                if(isset($item['gambar'])){
                    $lineup = LineupWarna::find($item['id']);
                    File::delete(public_path($lineup->gambar));
                    $gambar = $idx . $item['gambar']->getClientOriginalName();
                    $item['gambar']->move(public_path('images/lineup_kendaraan/'), $gambar);
                    $updated['gambar'] = 'images/lineup_kendaraan/' . $gambar;
                }
                LineupWarna::where('id',$item['id'])->update($updated);
            }
            
        }

        LineupWarna::insert($data);
        return redirect()->to('/kendaraan/'.$request->id_kendaraan.'/lineup')->with('success','Data berhasil diubah');
    }

    public function delete($id_kendaraan,$id_lineup){
        $lineupWarna = LineupWarna::where('id_lineup',$id_lineup)->get();
        foreach($lineupWarna as $item){
            File::delete(public_path($item->gambar));
            LineupWarna::destroy($item->id);
        }
        Lineup::destroy($id_lineup);
        return redirect()->to('/kendaraan/'.$id_kendaraan.'/lineup')->with('success','Data berhasil dihapus');
    }
}
