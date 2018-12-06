<?php

namespace App\Imports;

use App\Models\Report;
use App\Models\Licensetype;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Facades\DB;

class ReportsImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        DB::table('reports')->insert(
            ['category_id' => $row['category_id'],
            'subcategory_id' => $row['subcategory_id'],
            'publisher_id' => $row['publisher_id'],
            'report_title' => $row['report_title'],
            'page_title' => $row['page_title'],
            'report_url' => $row['report_url'],
            'report_description' => $row['report_description'],
            'table_of_content' => $row['table_of_content'],
            'list_of_tables' => $row['list_of_tables'],
            'meta_title' => $row['meta_title'],
            'meta_tags' => $row['meta_tags'],
            'publish_day' => $row['publish_day'],
            'publish_month' => $row['publish_month'],
            'publish_year' => $row['publish_year'],
            'total_pages' => $row['total_pages'],
            'basic_price' => $row['basic_price'],
            'discount_available' => $row['discount_available'],
            'discount_type' => $row['discount_type'],
            'discount' => $row['discount'],
            'publish_upcomming_status' => $row['publish_upcomming_status'],
            'status' => $row['status'],
            'delete_status' => $row['delete_status'],
            'popularity_status' => $row['popularity_status'],
            'query_count' => $row['query_count'],
            'report_code' => $row['report_code']]
        );

        $last_id = DB::table('reports')
                ->select('id')
                ->orderBy('id', 'desc')
                ->first();

        $rid =$last_id->id;

        return new Licensetype(['report_id' => $rid,
             'five_user' => $row['five_user'],
             'multiple' => $row['multiple'],
             'corporate' => $row['corporate'],
             'data_pack' => $row['data_pack'],
             'elect_single' => $row['elect_single'],
             'hard_copy' => $row['hard_copy'],
             'cd_price' => $row['cd_price'],
             'site_user' => $row['site_user'],
             'enterprise' => $row['enterprise'],
             'enterprise_wide' => $row['enterprise_wide'],
             'local_pdf' => $row['local_pdf'],
             'team_license' => $row['team_license'],
             'global_site' => $row['global_site'],
             'country_wide' => $row['country_wide'],
             'global_pdf' => $row['global_pdf'],
             'data_local_pdf' => $row['data_local_pdf'],
             'data_global_pdf' => $row['data_global_pdf'],
             'status' => $row['status']
            ]);
    }
}
