<?php

namespace App\Http\Controllers\Karir;

use App\Http\Controllers\Controller;
use App\Models\Karir\Karir;
use App\Models\Karir\KarirApply;
use Illuminate\Http\Request;

class KarirApplyController extends Controller
{
    public function index($slug){
        $karir = Karir::where('slug',$slug)->first();
        return view('main/karir/add',compact('karir'));
    }

    public function add_action(Request $request){
        $data = $request->except(['_token','cv']);

        $cv = $request->cv->getClientOriginalName();
        $request->cv->move(public_path('data_karir/cv/'), $cv);
        $data['cv'] = "data_karir/cv/" . $cv;

        KarirApply::insert($data);
        return redirect()->back()->with('success','Data lowongan berhasil dikirim!');
    }
}
