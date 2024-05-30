<?php

namespace App\Models\Aftersales;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SparepartLink extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'sparepart_link';
    protected $guarded = [];

    public function lineup(){
        return $this->belongsTo(Sparepart::class);
    }
}
