<?php

namespace App\Http\Controllers\Kendaraan;

use App\Http\Controllers\Controller;
use App\Models\Kendaraan\Performance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PerformaceController extends Controller
{
    public function index($id_kendaraan){
        $performance = Performance::where('id_kendaraan',$id_kendaraan)->get();
        return view('dashboard/kendaraan/performance/index',compact('performance','id_kendaraan'));
    }

    public function add($id_kendaraan){
        return view('dashboard/kendaraan/performance/add',compact('id_kendaraan'));
    }

    public function edit($id_kendaraan,$id_performance){
        $performance = Performance::where('id',$id_performance)->first();
        return view('dashboard/kendaraan/performance/edit',compact('performance','id_kendaraan'));
    }

    public function add_action(Request $request,$id_kendaraan){
        $data = $request->except(['_token']);

        $gambar = time() . $request->gambar->getClientOriginalName();
        $request->gambar->move(public_path('images/performance_kendaraan/'), $gambar);
        $data['gambar'] = "images/performance_kendaraan/" . $gambar;

        Performance::insert($data);
        return redirect()->to('/kendaraan/'.$request->id_kendaraan.'/performance')->with('success','Data berhasil ditambahkan');
    }

    public function update(Request $request,$id_kendaraan,$id_performance){
        $data = $request->except(['_token','_method','gambar']);
        $performance = Performance::find($id_performance);
        if($request->gambar){
            File::delete(public_path($performance->gambar));
            $gambar = time() . $request->gambar->getClientOriginalName();
            $request->gambar->move(public_path('images/performance_kendaraan/'), $gambar);
            $data['gambar'] = 'images/performance_kendaraan/' . $gambar;
        }

        Performance::where('id',$id_performance)->update($data);
        return redirect()->to('/kendaraan/'.$id_kendaraan.'/performance')->with('success','Data di update');
    }

    public function delete($id_kendaraan,$id_performance){
        $performance = Performance::where('id',$id_performance)->first();
        File::delete(public_path($performance->gambar));
        Performance::destroy($id_performance);
        return redirect()->to('/kendaraan/'.$id_kendaraan.'/performance')->with('success','Data berhasil dihapus');
    }
}
