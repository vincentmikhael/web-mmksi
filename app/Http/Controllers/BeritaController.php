<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class BeritaController extends Controller
{
    public function index(){
        $berita = Berita::all();
        return view("dashboard/berita/index",compact('berita'));
    }

    public function add(){
        return view('dashboard/berita/add');
    }

    public function edit($id){
        $berita = Berita::where('id',$id)->first();
        return view('dashboard/berita/edit',compact('berita'));
    }

    public function update(Request $request,$id){
        $data = $request->except(['_token','_method','sampul']);
        $data['updated_by'] = Auth::user()->username;
        $berita = Berita::where('id',$id)->first();
        if($request->sampul){
            File::delete(public_path($berita->gambar));
            $sampul = $request->sampul->getClientOriginalName();
            $request->sampul->move(public_path('images/cover_berita/'), $sampul);
            $data['gambar'] = "images/cover_berita/" . $sampul;
        }
        $data['slug'] = Str::slug($data['judul'],'-');

        Berita::where('id',$id)->update($data);
        return redirect()->to('/cms')->with('success','Data di update');
    }

    public function add_action(Request $request){
        $data = $request->except(['_token','_method','sampul']);
        $data['created_by'] = Auth::user()->username;
        $sampul = $request->sampul->getClientOriginalName();
        $request->sampul->move(public_path('images/cover_berita/'), $sampul);
        $data['gambar'] = "images/cover_berita/" . $sampul;
        $data['slug'] = Str::slug($data['judul'],'-');
        Berita::insert($data);
        return redirect()->to('/cms')->with('success','Data berhasil ditambahkan');
    }

    public function delete($id){
        $berita = Berita::where('id',$id)->first();
        preg_match_all('/<img[^>]+src="([^">]+)"/i', $berita->content, $matches);
        foreach($matches[1] as $photo){
            File::delete(public_path(parse_url($photo, PHP_URL_PATH)));
        }
        File::delete(public_path($berita->gambar));
        Berita::destroy($id);
        return redirect()->to('/cms')->with('success','Data berhasil dihapus');
    }

    public function image_upload(Request $request){
        if($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName.'_'.time().'.'.$extension;
        
            $request->file('upload')->move(public_path('images/berita/'), $fileName);
   
            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('images/berita/'.$fileName); 
            $msg = 'Image uploaded successfully'; 
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";
               
            @header('Content-type: text/html; charset=utf-8'); 
            echo $response;
        }
    }

    public function image_delete(Request $request){
        $imageSrc = $request->image_src;

        // Extract the file path from the URL
        $filePath = parse_url($imageSrc, PHP_URL_PATH);
        $filePath = public_path($filePath);
        File::delete($filePath);
        return response()->json(['message' => 'Image deleted successfully']);
    }

    public function list(Request $request){
        if($request->get('kategori') == 'Berita'){
            $berita = Berita::where('kategori','Berita')->get();
        }else if($request->get('kategori') == 'Siaranpers'){
            $berita = Berita::where('kategori','Siaran Pers')->get();
        }else if($request->get('kategori') == 'Promosi'){
            $berita = Berita::where('kategori','Promo')->get();
        }else{
            $berita = Berita::all();
        }
       
        return view('main/berita/index',compact('berita'));
    }

    public function show($slug){
        $berita = Berita::where('slug',$slug)->first();
        return view('main/berita/show',compact('berita'));
    }
}
