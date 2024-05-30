<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brosur extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'brosur';
    protected $guarded = [];
}
