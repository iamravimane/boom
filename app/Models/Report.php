<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $table = 'reports';

    protected $fillable = ['category_id', 'subcategory_id', 'publisher_id', 'report_title', 'page_title', 'report_url', 'report_description', 'table_of_content', 'list_of_tables', 'meta_title', 'meta_tags', 'publish_day', 'publish_month', 'publish_year', 'total_pages', 'basic_price','	discount_available', 'discount_type', 'discount', 'publish_upcomming_status', 'status', 'delete_status', 'popularity_status', 'query_count', 'report_code'];
}
