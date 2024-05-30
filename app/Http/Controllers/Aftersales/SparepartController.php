<?php

namespace App\Http\Controllers\Aftersales;

use App\Http\Controllers\Controller;
use App\Models\Aftersales\Sparepart;
use App\Models\Aftersales\SparepartKategori;
use App\Models\Aftersales\SparepartLink;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SparepartController extends Controller
{
    public function index(){
        $sparepart = Sparepart::all();
        return view('dashboard/aftersales/sparepart/index',compact('sparepart'));
    }

    public function add(){
        $kategori = SparepartKategori::all();
        return view('dashboard/aftersales/sparepart/add',compact('kategori'));
   }

   public function add_action(Request $request){
        $data = $request->except('_token','item');

        $gambar = time() . $request->gambar->getClientOriginalName();
        $request->gambar->move(public_path('images/sparepart/'), $gambar);
        $data['gambar'] = "images/sparepart/" . $gambar;

        $id = Sparepart::insertGetId($data);

        $data = [];
        foreach($request->item as $item){
            if($item['nama'] && $item['link']){
                $data[] = [
                    "nama" => $item['nama'],
                    "link" => $item['link'],
                    "sparepart_id" => $id
                ];
            }
        }

        SparepartLink::insert($data);
        return redirect()->to('/sparepart')->with('success','Data berhasil ditambahkan');
   }

   public function edit($id){
     $sparepart = Sparepart::where('id',$id)->first();
     $kategori = SparepartKategori::all();
     $link = SparepartLink::where('sparepart_id',$id)->get();
     return view('dashboard/aftersales/sparepart/edit',compact('sparepart','kategori','link'));
   }

   public function update(Request $request, $id){
        $data = $request->except(['_token','_method','gambar','item']);
        $sparepart = Sparepart::where('id',$id)->first();

        if($request->gambar){
            File::delete(public_path($sparepart->gambar));
            $gambar = time() . $request->gambar->getClientOriginalName();
            $request->gambar->move(public_path('images/sparepart/'), $gambar);
            $data['gambar'] = "images/sparepart/" . $gambar;
        }

        Sparepart::where('id',$id)->update($data);
        
        $data = [];
        foreach($request->item as $item){
            if($item['nama'] && $item['link']){
                $data[] = [
                    "nama" => $item['nama'],
                    "link" => $item['link'],
                    "sparepart_id" => $id
                ];
            }
        }
        SparepartLink::where('sparepart_id',$id)->delete();
        SparepartLink::insert($data);

        return redirect()->to('/sparepart')->with('success','Data di update');
   }

   public function delete($id){
    $sparepart = Sparepart::where('id',$id)->first();
    File::delete(public_path($sparepart->gambar));
    Sparepart::destroy($id);
    SparepartLink::where('sparepart_id',$id)->delete();
    return redirect()->to('/sparepart')->with('success','Data berhasil dihapus');
   }
}
