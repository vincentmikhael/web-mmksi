<?php

namespace App\Http\Controllers\Kendaraan;

use App\Http\Controllers\Controller;
use App\Models\Kendaraan\Aksesoris;
use App\Models\Kendaraan\Exterior;
use App\Models\Kendaraan\Interior;
use App\Models\Kendaraan\Kendaraan;
use App\Models\Kendaraan\Lineup;
use App\Models\Kendaraan\Performance;
use App\Models\Kendaraan\Safety;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class KendaraanController extends Controller
{
    public function index(){
        $kendaraan = Kendaraan::all();
        return view('dashboard/kendaraan/index',compact('kendaraan'));
    }

    public function add(){
        return view('dashboard/kendaraan/add');
    }

    public function edit($id){
        $kendaraan = Kendaraan::find($id);
        return view('dashboard/kendaraan/edit',compact('kendaraan'));
    }

    public function add_action(Request $request){
        $data = $request->except('_token');

        $gambar = '1' . time() . $request->gambar->getClientOriginalName();
        $request->gambar->move(public_path('images/gambar_kendaraan/'), $gambar);
        $data['gambar'] = "images/gambar_kendaraan/" . $gambar;

        $background = '2' . time() . $request->background->getClientOriginalName();
        $request->background->move(public_path('images/gambar_kendaraan/'), $background);
        $data['background'] = "images/gambar_kendaraan/" . $background;

        $background_thumbnail = '5' . time() . $request->background_thumbnail->getClientOriginalName();
        $request->background_thumbnail->move(public_path('images/gambar_kendaraan/'), $background_thumbnail);
        $data['background_thumbnail'] = "images/gambar_kendaraan/" . $background_thumbnail;

        if($request->foto_interior){
            $gambar = '3' . time() . $request->foto_interior->getClientOriginalName();
            $request->foto_interior->move(public_path('images/gambar_kendaraan/'), $gambar);
            $data['foto_interior'] = "images/gambar_kendaraan/" . $gambar;
        }
        if($request->foto_exterior){
            $gambar = '4' . time() . $request->foto_exterior->getClientOriginalName();
            $request->foto_exterior->move(public_path('images/gambar_kendaraan/'), $gambar);
            $data['foto_exterior'] = "images/gambar_kendaraan/" . $gambar;
        }

        $data['slug'] = Str::slug($data['nama'],'-');

        Kendaraan::insert($data);
        return redirect()->to('/kendaraan')->with('success','Data berhasil ditambahkan');
    }

    public function update(Request $request,$id){
        $data = $request->except(['_token','_method','foto_interior','foto_exterior','gambar','background']);
        $kendaraan = Kendaraan::where('id',$id)->first();
        if($request->foto_interior){
            File::delete(public_path($kendaraan->foto_interior));
            $gambar = '3' . time() . $request->foto_interior->getClientOriginalName();
            $request->foto_interior->move(public_path('images/gambar_kendaraan/'), $gambar);
            $data['foto_interior'] = "images/gambar_kendaraan/" . $gambar;
        }
        if($request->foto_exterior){
            File::delete(public_path($kendaraan->foto_exterior));
            $gambar = '4' . time() . $request->foto_exterior->getClientOriginalName();
            $request->foto_exterior->move(public_path('images/gambar_kendaraan/'), $gambar);
            $data['foto_exterior'] = "images/gambar_kendaraan/" . $gambar;
        }
        if($request->gambar){
            File::delete(public_path($kendaraan->gambar));
            $gambar = '1' . time() . $request->gambar->getClientOriginalName();
            $request->gambar->move(public_path('images/gambar_kendaraan/'), $gambar);
            $data['gambar'] = "images/gambar_kendaraan/" . $gambar;
        }
        if($request->background){
            File::delete(public_path($kendaraan->background));
            $background = '2' . time() . $request->background->getClientOriginalName();
            $request->background->move(public_path('images/gambar_kendaraan/'), $background);
            $data['background'] = "images/gambar_kendaraan/" . $background;
        }

        if($request->background_thumbnail){
            File::delete(public_path($kendaraan->background_thumbnail));
            $background_thumbnail = '2' . time() . $request->background_thumbnail->getClientOriginalName();
            $request->background_thumbnail->move(public_path('images/gambar_kendaraan/'), $background_thumbnail);
            $data['background_thumbnail'] = "images/gambar_kendaraan/" . $background_thumbnail;
        }

        $data['slug'] = Str::slug($data['nama'],'-');

        Kendaraan::where('id',$id)->update($data);
        return redirect()->to('/kendaraan')->with('success','Data di update');
    }

    public function delete($id){
        $kendaraan = Kendaraan::where('id',$id)->first();

        File::delete(public_path($kendaraan->foto_interior));
        File::delete(public_path($kendaraan->foto_exterior));
        File::delete(public_path($kendaraan->gambar));
        File::delete(public_path($kendaraan->background));

        Kendaraan::destroy($id);
        return redirect()->to('/kendaraan')->with('success','Data berhasil dihapus');
    }
    
    public function show($slug){
        $kendaraan = Kendaraan::where('slug',$slug)->first();
        $interior = Interior::where('id_kendaraan',$kendaraan->id)->get();
        $exterior = Exterior::where('id_kendaraan',$kendaraan->id)->get();
        $safety = Safety::where('id_kendaraan',$kendaraan->id)->get();
        $performance = Performance::where('id_kendaraan',$kendaraan->id)->get();
        $aksesoris = Aksesoris::where('id_kendaraan',$kendaraan->id)->get();
        $lineup = Lineup::with('lineup_warna')->where('id_kendaraan',$kendaraan->id)->get();

        return view('main/kendaraan/index',compact('kendaraan','interior','exterior','safety','performance','aksesoris','lineup'));
    }
}
