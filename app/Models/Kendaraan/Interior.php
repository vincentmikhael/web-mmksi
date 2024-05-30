<?php

namespace App\Models\Kendaraan;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Interior extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'interior_kendaraan';
    protected $guarded = [];
}
