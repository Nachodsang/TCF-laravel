<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EmailContactMd extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'email_contact';

    protected $fillable = ['status', 'favourite'];
}
