<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';
    protected $fillable = ['title','url','content','description','page_title','meta_keywords','meta_description','publish_day','publish_month','publish_year','active_status','delete_status','popularity_status'];
    protected $primaryKey = 'id';
}
