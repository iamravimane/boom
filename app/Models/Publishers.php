<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Publishers extends Model
{
    protected $fillable = ['name','description','url','address'];
}
