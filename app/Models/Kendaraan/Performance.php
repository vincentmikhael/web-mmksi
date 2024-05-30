<?php

namespace App\Models\Kendaraan;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Performance extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'performance_kendaraan';
    protected $guarded = [];
}
