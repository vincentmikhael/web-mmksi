<?php

namespace App\Models\Aftersales;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sparepart extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'sparepart';
    protected $guarded = [];

    public function link(){
        return $this->hasMany(SparepartLink::class,'sparepart_id');
    }
}
