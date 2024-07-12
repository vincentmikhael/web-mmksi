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
        $promo_list = Berita::where('kategori','Promo')->limit(3)->get();
        $berita_list = Berita::where('kategori','Berita')->limit(3)->get();
        $pers_list = Berita::where('kategori','Siaran Pers')->limit(3)->get();
        $maintenance = Maintenance::first();
        $kendaraan = Kendaraan::all();
        return view('welcome',compact('banner','youtube','promo','berita','pers','kendaraan','maintenance','promo_list','berita_list','pers_list'));
    }
}
