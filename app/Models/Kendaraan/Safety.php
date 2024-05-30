<?php

namespace App\Models\Kendaraan;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Safety extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'safety_kendaraan';
    protected $guarded = [];
}
