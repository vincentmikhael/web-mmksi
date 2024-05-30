<?php

namespace App\Http\Controllers\Aftersales;

use App\Http\Controllers\Controller;
use App\Models\Aftersales\SparepartKategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SparepartKategoriController extends Controller
{
    public function index(){
        $kategori = SparepartKategori::all();
        return view('dashboard/aftersales/sparepart_kategori/index',compact('kategori'));
    }

    public function add(){
        return view('dashboard/aftersales/sparepart_kategori/add');
   }

   public function add_action(Request $request){
        $data = $request->except('_token');

        $gambar = time() . $request->gambar->getClientOriginalName();
        $request->gambar->move(public_path('images/sparepart_kategori/'), $gambar);
        $data['gambar'] = "images/sparepart_kategori/" . $gambar;

        SparepartKategori::insert($data);
        return redirect()->to('/sparepart_kategori')->with('success','Data berhasil ditambahkan');
   }

   public function edit($id){
     $kategori = SparepartKategori::where('id',$id)->first();
     return view('dashboard/aftersales/sparepart_kategori/edit',compact('kategori'));
   }

   public function update(Request $request, $id){
        $data = $request->except(['_token','_method','gambar']);
        $kategori = SparepartKategori::where('id',$id)->first();
        if($request->gambar){
            File::delete(public_path($kategori->gambar));
            $gambar = time() . $request->gambar->getClientOriginalName();
            $request->gambar->move(public_path('images/sparepart_kategori/'), $gambar);
            $data['gambar'] = "images/sparepart_kategori/" . $gambar;
        }

        SparepartKategori::where('id',$id)->update($data);
        return redirect()->to('/sparepart_kategori')->with('success','Data di update');
   }

   public function delete($id){
    $kategori = SparepartKategori::where('id',$id)->first();
    File::delete(public_path($kategori->gambar));
    SparepartKategori::destroy($id);
    return redirect()->to('/sparepart_kategori')->with('success','Data berhasil dihapus');
   }
}
