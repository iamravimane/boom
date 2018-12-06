<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publishers extends Model
{
    protected $fillable = ['name','description','url','address'];
}
