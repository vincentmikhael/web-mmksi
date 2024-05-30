<?php

namespace App\Models\Kendaraan;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lineup extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'lineup';
    protected $guarded = [];

    public function lineup_warna(){
        return $this->hasMany(LineupWarna::class,'id_lineup');
    }
}
