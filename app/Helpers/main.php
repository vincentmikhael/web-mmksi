<?php

use App\Models\Kendaraan\Kendaraan;
use App\Models\Setting;

function formatRp($value){
    return 'Rp ' .number_format($value, 0, ',', '.');
}

function getKendaraan1(){
return Kendaraan::where('kategori','Light Commercial Vehicle')->get();
}

function getKendaraan2(){
    return Kendaraan::where('kategori','Passenger Car')->get();
}

function getSetting(){
    return Setting::first();
}