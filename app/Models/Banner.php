<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'banner';
    protected $fillable = ['slug','judul','gambar','content','kategori','tanggal'];
}
