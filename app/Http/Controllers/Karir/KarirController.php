<?php

namespace App\Http\Controllers\Karir;

use App\Http\Controllers\Controller;
use App\Models\Karir\Karir;
use App\Models\Karir\KarirApply;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class KarirController extends Controller
{
    public function index(){
        $karir = Karir::all();
        return view('dashboard/karir/index',compact('karir'));
    }

    public function add(){
        return view('dashboard/karir/add');
    }

    public function pelamar($id){
        $karir = KarirApply::where('karir_id',$id)->get();
        $master_karir = Karir::find($id);
        return view('dashboard/karir/pelamar',compact('karir','master_karir'));
    }

    public function edit($id){
        $karir = Karir::find($id);
        return view('dashboard/karir/edit',compact('karir'));
    }

    public function add_action(Request $request){
        $data = $request->except(['_token']);
        $data['slug'] = Str::slug($data['perusahaan'] . ' ' . $data['pekerjaan'],'-');
        Karir::insert($data);
        return redirect()->to('/karir')->with('success','Data berhasil ditambahkan');
    }

    public function update(Request $request,$id){
        $data = $request->except(['_token']);
        $data['slug'] = Str::slug($data['perusahaan'] . ' ' . $data['pekerjaan'],'-');
        Karir::where('id',$id)->update($data);
        return redirect()->to('/karir')->with('success','Data berhasil diubah');
    }

    public function delete($id){
        Karir::destroy($id);
        return redirect()->to('/karir')->with('success','Data berhasil dihapus');
    }

    public function show(Request $request){
        $karir = Karir::query();
        $perusahaan = Karir::select('perusahaan')->groupBy('perusahaan')->get();
        if($request->get('perusahaan')){
            $karir->where('perusahaan','like','%'.$request->get('perusahaan').'%');
        }
        if($request->get('pekerjaan')){
            $karir->where('pekerjaan','like','%'.$request->get('pekerjaan').'%');
        }
        
        $karir = $karir->paginate(10);
        return view('main/karir/index',compact('karir','perusahaan'));
    }
}
