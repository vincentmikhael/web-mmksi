<?php

namespace App\Http\Controllers\Kendaraan;

use App\Http\Controllers\Controller;
use App\Models\Kendaraan\Safety;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class SafetyController extends Controller
{
    public function index($id_kendaraan){
        $safety = Safety::where('id_kendaraan',$id_kendaraan)->get();
        return view('dashboard/kendaraan/safety/index',compact('safety','id_kendaraan'));
    }

    public function add($id_kendaraan){
        return view('dashboard/kendaraan/safety/add',compact('id_kendaraan'));
    }

    public function edit($id_kendaraan,$id_safety){
        $safety = Safety::where('id',$id_safety)->first();
        return view('dashboard/kendaraan/safety/edit',compact('safety','id_kendaraan'));
    }

    public function add_action(Request $request,$id_kendaraan){
        $data = $request->except(['_token']);
        $data['created_by'] = Auth::user()->username;
        $gambar = time() . $request->gambar->getClientOriginalName();
        $request->gambar->move(public_path('images/safety_kendaraan/'), $gambar);
        $data['gambar'] = "images/safety_kendaraan/" . $gambar;

        Safety::insert($data);
        return redirect()->to('/kendaraan/'.$request->id_kendaraan.'/safety')->with('success','Data berhasil ditambahkan');
    }

    public function update(Request $request,$id_kendaraan,$id_safety){
        $data = $request->except(['_token','_method','gambar']);
        $data['updated_by'] = Auth::user()->username;
        $safety = Safety::find($id_safety);
        if($request->gambar){
            File::delete(public_path($safety->gambar));
            $gambar = time() . $request->gambar->getClientOriginalName();
            $request->gambar->move(public_path('images/safety_kendaraan/'), $gambar);
            $data['gambar'] = 'images/safety_kendaraan/' . $gambar;
        }

        Safety::where('id',$id_safety)->update($data);
        return redirect()->to('/kendaraan/'.$id_kendaraan.'/safety')->with('success','Data di update');
    }

    public function delete($id_kendaraan,$id_safety){
        $safety = Safety::where('id',$id_safety)->first();
        File::delete(public_path($safety->gambar));
        Safety::destroy($id_safety);
        return redirect()->to('/kendaraan/'.$id_kendaraan.'/safety')->with('success','Data berhasil dihapus');
    }
    
}
