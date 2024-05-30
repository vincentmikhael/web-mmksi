<?php

namespace App\Http\Controllers\Kendaraan;

use App\Http\Controllers\Controller;
use App\Models\Kendaraan\Aksesoris;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class KendaraanAksesorisController extends Controller
{
    public function index($id_kendaraan){
        $aksesoris = Aksesoris::where('id_kendaraan',$id_kendaraan)->get();
        return view('dashboard/kendaraan/aksesoris/index',compact('id_kendaraan','aksesoris'));
    }

    public function add($id_kendaraan){
        return view('dashboard/kendaraan/aksesoris/add',compact('id_kendaraan'));
    }

    public function edit($id_kendaraan,$id_aksesoris){
        $aksesoris = Aksesoris::find($id_aksesoris);
        return view('dashboard/kendaraan/aksesoris/edit',compact('aksesoris'));
    }

    public function add_action(Request $request){
        $data = $request->except(['_token']);

        $gambar = time() . $request->gambar->getClientOriginalName();
        $request->gambar->move(public_path('images/aksesoris_kendaraan/'), $gambar);
        $data['gambar'] = "images/aksesoris_kendaraan/" . $gambar;

        Aksesoris::insert($data);
        return redirect()->to('/kendaraan/'.$request->id_kendaraan.'/aksesoris')->with('success','Data berhasil ditambahkan');
    }

    public function update(Request $request,$id_kendaraan,$id_aksesoris){
        $data = $request->except(['_token','_method','gambar']);
        $aksesoris = Aksesoris::find($id_aksesoris);
        if($request->gambar){
            File::delete(public_path($aksesoris->gambar));
            $gambar = time() . $request->gambar->getClientOriginalName();
            $request->gambar->move(public_path('images/aksesoris_kendaraan/'), $gambar);
            $data['gambar'] = 'images/aksesoris_kendaraan/' . $gambar;
        }

        Aksesoris::where('id',$id_aksesoris)->update($data);
        return redirect()->to('/kendaraan/'.$id_kendaraan.'/aksesoris')->with('success','Data di update');
    }

    public function delete($id_kendaraan,$id_aksesoris){
        $brosur = Aksesoris::where('id',$id_aksesoris)->first();
        File::delete(public_path($brosur->gambar));
        Aksesoris::destroy($id_aksesoris);
        return redirect()->to('/kendaraan/'.$id_kendaraan.'/aksesoris')->with('success','Data berhasil dihapus');
    }
}
