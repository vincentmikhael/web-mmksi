<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SejarahController extends Controller
{
    public function index(){
        $sejarah = DB::table('sejarah_perusahaan')->first();
        $sejarah_timeline = DB::table('sejarah_perusahaan_timeline')->get();
        return view('dashboard/sejarah/index',compact('sejarah','sejarah_timeline'));
    }

    public function show(){
        $sejarah = DB::table('sejarah_perusahaan')->first();
        $sejarah_timeline = DB::table('sejarah_perusahaan_timeline')->get();
        return view('main/tentang-kami/sejarah-perusahaan',compact('sejarah','sejarah_timeline'));
    }

    public function add_action(Request $request){
        
        DB::table('sejarah_perusahaan_timeline')->truncate();
        $data = [];
        foreach($request->item as $item){
            if($item['tahun'] && $item['deskripsi']){
                $data[] = [
                    "tahun" => $item['tahun'],
                    "deskripsi" => $item['deskripsi']
                ];
            }
            
        }
        if(count($data) > 0){
            DB::table('sejarah_perusahaan_timeline')->insert($request->item);
        }
        $updated = $request->except(['item','_token']);
        $updated['updated_by'] = Auth::user()->username;
        DB::table('sejarah_perusahaan')->where('id',1)->update($updated);
        return redirect()->back()->with('success','Data berhasil diupdate');
        
    }

    public function delete($id){
        DB::table('sejarah_perusahaan_timeline')->where('id',$id)->delete();
        return redirect()->back()->with('success',"Data berhasil ditambahkan");
    }
}
