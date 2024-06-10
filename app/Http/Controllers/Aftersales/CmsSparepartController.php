<?php

namespace App\Http\Controllers\Aftersales;

use App\Http\Controllers\Controller;
use App\Models\Aftersales\CmsSparepart;
use App\Models\Aftersales\Sparepart;
use App\Models\Aftersales\SparepartKategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class CmsSparepartController extends Controller
{
    public function index(){
        $sparepart = CmsSparepart::first();
        return view('dashboard/aftersales/cms_sparepart/index',compact('sparepart'));
    }

    public function add_action(Request $request){
        $data = $request->except(['_token','gambar']);
        $data['updated_by'] = Auth::user()->username;
        if($request->gambar){
            $sparepart = CmsSparepart::first();
            File::delete(public_path($sparepart->background));
            $gambar = time() . $request->gambar->getClientOriginalName();
            $request->gambar->move(public_path('images/cms_sparepart/'), $gambar);
            $data['background'] = "images/cms_sparepart/" . $gambar;
        }

        CmsSparepart::where('id',1)->update($data);
        return redirect()->back()->with('success','Data berhasil ditambahkan');
    }

    public function show(){
        $sparepart = CmsSparepart::first();
        $sparepart_kategori = SparepartKategori::all();
        return view('main/aftersales/sparepart',compact('sparepart','sparepart_kategori'));
    }

    public function detail($id){
        $sparepart = Sparepart::with('link')->where('kategori_id',$id)->get();
        return view('main/aftersales/detail_sparepart',compact('sparepart'));
    }
}
