<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cabang extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'cabang';
    protected $guarded = [];
}
