<?php

namespace App\Models\Aftersales;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CmsSparepart extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'cms_sparepart';
    protected $guarded = [];
}
