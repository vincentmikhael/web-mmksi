<?php

namespace App\Http\Controllers\Aftersales;

use App\Http\Controllers\Controller;
use App\Models\Aftersales\Aksesoris;
use App\Models\Kendaraan\Kendaraan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AksesorisController extends Controller
{
    public function index(){
        $aksesoris = Aksesoris::first();
        return view('dashboard/aftersales/aksesoris/index',compact('aksesoris'));
    }

    public function add_action(Request $request){
        $data = $request->except(['_token','gambar']);

        if($request->gambar){
            $aksesoris = Aksesoris::first();
            File::delete(public_path($aksesoris->background));
            $gambar = time() . $request->gambar->getClientOriginalName();
            $request->gambar->move(public_path('images/aksesoris_aftersales/'), $gambar);
            $data['background'] = "images/aksesoris_aftersales/" . $gambar;
        }

        Aksesoris::where('id',1)->update($data);
        return redirect()->back()->with('success','Data berhasil ditambahkan');
    }

    public function show(){
        $aksesoris = Aksesoris::first();
        $kendaraan = Kendaraan::all();
        return view('main/aftersales/aksesoris',compact('aksesoris','kendaraan'));
    }
}
