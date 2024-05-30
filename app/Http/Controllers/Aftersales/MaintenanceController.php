<?php

namespace App\Http\Controllers\Aftersales;

use App\Http\Controllers\Controller;
use App\Models\Aftersales\Maintenance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class MaintenanceController extends Controller
{
    public function index(){
        $maintenance = Maintenance::first();
        return view('dashboard/aftersales/maintenance/index',compact('maintenance'));
    }

    public function add_action(Request $request){
        $data = $request->except(['_token','gambar']);

        if($request->gambar){
            $maintenance = Maintenance::first();
            File::delete(public_path($maintenance->background));
            $gambar = time() . $request->gambar->getClientOriginalName();
            $request->gambar->move(public_path('images/maintenance/'), $gambar);
            $data['background'] = "images/maintenance/" . $gambar;
        }

        Maintenance::where('id',1)->update($data);
        return redirect()->back()->with('success','Data berhasil ditambahkan');
    }

    public function show(){
        $maintenance = Maintenance::first();
        return view('main/aftersales/maintenance',compact('maintenance'));
    }
}
