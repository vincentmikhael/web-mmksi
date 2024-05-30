<?php

namespace App\Models\Aftersales;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aksesoris extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'aksesoris_aftersales';
    protected $guarded = [];
}
