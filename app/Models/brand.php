<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class brand extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = 'brand';
    protected $fillable = [
        'brand_name',
        'brand_desc',
        'brand_status',
    ];
    public $timestamps = true;
}