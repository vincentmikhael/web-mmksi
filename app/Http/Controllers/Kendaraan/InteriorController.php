<?php

namespace App\Http\Controllers\Kendaraan;

use App\Http\Controllers\Controller;
use App\Models\Kendaraan\Interior;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class InteriorController extends Controller
{
    public function index($id_kendaraan){
        $interior = Interior::where('id_kendaraan',$id_kendaraan)->get();
        return view('dashboard/kendaraan/interior/index',compact('interior','id_kendaraan'));
    }

    public function add($id_kendaraan){
        return view('dashboard/kendaraan/interior/add',compact('id_kendaraan'));
    }

    public function edit($id_kendaraan,$id_interior){
        $interior = Interior::where('id',$id_interior)->first();
        return view('dashboard/kendaraan/interior/edit',compact('interior','id_kendaraan'));
    }

    public function add_action(Request $request,$id_kendaraan){
        $data = $request->except(['_token']);

        $gambar = time() . $request->gambar->getClientOriginalName();
        $request->gambar->move(public_path('images/interior_kendaraan/'), $gambar);
        $data['gambar'] = "images/interior_kendaraan/" . $gambar;

        Interior::insert($data);
        return redirect()->to('/kendaraan/'.$request->id_kendaraan.'/interior')->with('success','Data berhasil ditambahkan');
    }

    public function update(Request $request,$id_kendaraan,$id_interior){
        $data = $request->except(['_token','_method','gambar']);
        $interior = Interior::find($id_interior);
        if($request->gambar){
            File::delete(public_path($interior->gambar));
            $gambar = time() . $request->gambar->getClientOriginalName();
            $request->gambar->move(public_path('images/interior_kendaraan/'), $gambar);
            $data['gambar'] = 'images/interior_kendaraan/' . $gambar;
        }

        Interior::where('id',$id_interior)->update($data);
        return redirect()->to('/kendaraan/'.$id_kendaraan.'/interior')->with('success','Data di update');
    }

    public function delete($id_kendaraan,$id_interior){
        $interior = Interior::where('id',$id_interior)->first();
        File::delete(public_path($interior->gambar));
        Interior::destroy($id_interior);
        return redirect()->to('/kendaraan/'.$id_kendaraan.'/interior')->with('success','Data berhasil dihapus');
    }
}
