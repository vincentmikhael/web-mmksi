<?php

namespace App\Http\Controllers;

use App\Models\Aftersales\Maintenance;
use App\Models\Banner;
use App\Models\Berita;
use App\Models\Kendaraan\Kendaraan;
use App\Models\Youtube;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        $banner = Banner::all();
        $youtube = Youtube::all();
        $promo = Berita::where('kategori','Promo')->first();
        $berita = Berita::where('kategori','Berita')->first();
        $pers = Berita::where('kategori','Siaran Pers')->first();
        $maintenance = Maintenance::first();
        $kendaraan = Kendaraan::all();
        return view('welcome',compact('banner','youtube','promo','berita','pers','kendaraan','maintenance'));
    }
}
