<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaskMd extends Model
{
    use HasFactory;
    
    protected $table = 'task';
    protected $fillable = ['action', 'module', 'created_at'];

}
