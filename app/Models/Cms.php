<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cms extends Model
{
    protected $table = 'cms';
    protected $fillable = ['title', 'content', 'page_title', 'meta_keywords', 'meta_description'];
}