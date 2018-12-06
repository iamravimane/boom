<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Licensetype extends Model
{
    protected $fillable = ['report_id', 'five_user', 'multiple', 'corporate', 'data_pack', 'elect_single', 'hard_copy', 'cd_price', 'site_user', 'enterprise', 'enterprise_wide', 'local_pdf', 'team_license', 'global_site', 'country_wide', 'global_pdf', 'data_local_pdf', 'data_global_pdf','active_status'];

    protected $table = 'licensetypes';
    protected $primaryKey = 'license_id';
}