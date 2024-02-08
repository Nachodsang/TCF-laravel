<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MaProductMd extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'ma_product';
    protected $fillable = ['status'];

}
