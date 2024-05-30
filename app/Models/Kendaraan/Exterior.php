<?php

namespace App\Models\Kendaraan;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exterior extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'exterior_kendaraan';
    protected $guarded = [];
}
