<?php

namespace App\Models\Aftersales;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SparepartKategori extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'sparepart_kategori';
    protected $guarded = [];
}
