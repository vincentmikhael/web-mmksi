<?php

namespace App\Models\Karir;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KarirApply extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'karir_apply';
    protected $guarded = [];
}
