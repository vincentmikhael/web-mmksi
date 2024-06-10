<?php

namespace App\Http\Controllers\Aftersales;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Models\Aftersales\Bodicat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BodicatController extends Controller
{
    public function index(){
        $bodicat = Bodicat::first();
        return view('dashboard/aftersales/bodicat/index',compact('bodicat'));
    }

    public function add_action(Request $request){
        $data = $request->except(['_token','gambar']);
        $data['updated_by'] = Auth::user()->username;
        if($request->gambar){
            $bodicat = Bodicat::first();
            File::delete(public_path($bodicat->background));
            $gambar = time() . $request->gambar->getClientOriginalName();
            $request->gambar->move(public_path('images/bodicat/'), $gambar);
            $data['background'] = "images/bodicat/" . $gambar;
        }

        Bodicat::where('id',1)->update($data);
        return redirect()->back()->with('success','Data berhasil ditambahkan');
    }

    public function show(){
        $bodicat = Bodicat::first();
        return view('main/aftersales/bodicat',compact('bodicat'));
    }
}
