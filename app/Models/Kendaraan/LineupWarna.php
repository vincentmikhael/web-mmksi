<?php

namespace App\Models\Kendaraan;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LineupWarna extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'lineup_warna';
    protected $guarded = [];

    public function lineup(){
        return $this->belongsTo(Lineup::class);
    }
}
