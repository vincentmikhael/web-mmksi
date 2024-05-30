<?php

namespace App\Http\Controllers;

use App\Models\Cabang;
use App\Models\TestDrive;
use Illuminate\Http\Request;

class TestDriveController extends Controller
{
    public function index(){
        $testdrive = TestDrive::orderBy('id','desc')->get();
        return view('dashboard/testdrive/index',compact('testdrive'));
    }
    public function show(){
        $dealer = Cabang::all();
        $kota = Cabang::select('kota')->groupBy('kota')->get();
        return view('main/testdrive/index',compact('dealer','kota'));
    }

    public function add_action(Request $request){
        TestDrive::insert($request->except(['_token','kota']));
        return redirect()->back()->with('success','Terima kasih! kami akan segera menghubungi anda.');
    }
}
