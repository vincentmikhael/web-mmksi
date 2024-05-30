<?php

namespace App\Http\Controllers\Kendaraan;

use App\Http\Controllers\Controller;
use App\Models\Kendaraan\Exterior;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ExteriorController extends Controller
{
    public function index($id_kendaraan){
        $exterior = Exterior::where('id_kendaraan',$id_kendaraan)->get();
        return view('dashboard/kendaraan/exterior/index',compact('exterior','id_kendaraan'));
    }

    public function add($id_kendaraan){
        return view('dashboard/kendaraan/exterior/add',compact('id_kendaraan'));
    }

    public function edit($id_kendaraan,$id_interior){
        $exterior = Exterior::where('id',$id_interior)->first();
        return view('dashboard/kendaraan/exterior/edit',compact('exterior','id_kendaraan'));
    }

    public function add_action(Request $request,$id_kendaraan){
        $data = $request->except(['_token']);

        $gambar = time() . $request->gambar->getClientOriginalName();
        $request->gambar->move(public_path('images/exterior_kendaraan/'), $gambar);
        $data['gambar'] = "images/exterior_kendaraan/" . $gambar;

        Exterior::insert($data);
        return redirect()->to('/kendaraan/'.$request->id_kendaraan.'/exterior')->with('success','Data berhasil ditambahkan');
    }

    public function update(Request $request,$id_kendaraan,$id_interior){
        $data = $request->except(['_token','_method','gambar']);
        $exterior = Exterior::find($id_interior);
        if($request->gambar){
            File::delete(public_path($exterior->gambar));
            $gambar = time() . $request->gambar->getClientOriginalName();
            $request->gambar->move(public_path('images/exterior_kendaraan/'), $gambar);
            $data['gambar'] = 'images/exterior_kendaraan/' . $gambar;
        }

        Exterior::where('id',$id_interior)->update($data);
        return redirect()->to('/kendaraan/'.$id_kendaraan.'/exterior')->with('success','Data di update');
    }

    public function delete($id_kendaraan,$id_interior){
        $exterior = Exterior::where('id',$id_interior)->first();
        File::delete(public_path($exterior->gambar));
        Exterior::destroy($id_interior);
        return redirect()->to('/kendaraan/'.$id_kendaraan.'/exterior')->with('success','Data berhasil dihapus');
    }
}
