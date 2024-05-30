<?php

namespace App\Http\Controllers;

use App\Models\Brosur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class BrosurController extends Controller
{
    public function index(){
        $brosur = Brosur::all();
        return view('dashboard/brosur/index',compact('brosur'));
    }

    public function add(){
        return view('dashboard/brosur/add');
   }

   public function add_brosur(Request $request){
        $data = $request->except('_token');

        $sampul = $request->sampul->getClientOriginalName();
        $request->sampul->move(public_path('images/sampul_brosur/'), $sampul);
        $data['sampul'] = "images/sampul_brosur/" . $sampul;

        $link = $request->link->getClientOriginalName();
        $request->link->move(public_path('brosurs/'), $link);
        $data['link'] = "brosurs/" . $link;


        Brosur::insert($data);
        return redirect()->to('/brosur')->with('success','Data berhasil ditambahkan');
   }

   public function edit($id){
     $brosur = Brosur::where('id',$id)->first();
     return view('dashboard/brosur/edit',compact('brosur'));
   }

   public function update(Request $request, $id){
        $data = $request->except(['_token','_method','sampul','link']);
        $brosur = Brosur::where('id',$id)->first();
        if($request->sampul){
            File::delete(public_path($brosur->sampul));
            $sampul = $request->sampul->getClientOriginalName();
            $request->sampul->move(public_path('images/sampul_brosur/'), $sampul);
            $data['sampul'] = "images/sampul_brosur/" . $sampul;
        }
        if($request->link){
            File::delete(public_path($brosur->link));
            $link = $request->link->getClientOriginalName();
            $request->link->move(public_path('brosurs/'), $link);
            $data['link'] = 'brosurs/' . $link;
        }

        Brosur::where('id',$id)->update($data);
        return redirect()->to('/brosur')->with('success','Data di update');
   }

   public function delete($id){
    $brosur = Brosur::where('id',$id)->first();
    File::delete(public_path($brosur->sampul));
    File::delete(public_path($brosur->link));
    Brosur::destroy($id);
    return redirect()->to('/brosur')->with('success','Data berhasil dihapus');
   }

   public function show(){
    $brosur = Brosur::all();
    return view('main/brosur/index',compact('brosur'));
   }
}
