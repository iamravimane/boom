<?php
namespace App\Repositories\Report;
use App\Models\Report;
use DB;


class ReportRepository implements ReportRepositoryContract
{
    public function getAllReports()
    {
        return DB::table('bmr_report')->get();
    }

    public function getLimitedReport()
    {

        Report::take($count)->skip($count)->get();
    }

       public function getPopularReport()
    {

         $popularReports = DB::table('bmr_report')
             ->select('rep_id','rep_title','rep_url','rep_descrip','rep_price','rep_pub_month','rep_pub_year')
            ->where('popularity', 'Y')
            ->where('rep_status', 'Y')->limit(6)

            ->get();

            return $popularReports;
    }
       public function getLatestReport()
    {

           $latestReports = DB::table('bmr_report')
            ->select('rep_id','rep_title','rep_url','rep_descrip','rep_price','rep_pub_month','rep_pub_year')
            ->where('rep_pub_year', 2018)
            ->where('rep_status', 'Y')
            ->orderBy('rep_pub_month', 'desc')->limit(6)
            ->get();

            return $latestReports;
    }
       public function getUpcomingReport()
    {

         $upcomingReports = DB::table('bmr_report')
             ->select('rep_id','rep_title','rep_url','rep_descrip','rep_price','rep_pub_month','rep_pub_year')
            ->where('rep_upcoming_published_status', 'U')
            ->where('rep_status', 'Y')->limit(6)
            ->get();

            return $upcomingReports;
    }


    public function reportDetail($url)
    {
         $report = DB::table('bmr_report')
            ->select('bmr_report.*')
            ->leftJoin('bmr_report_metadata', 'bmr_report.rep_id', '=', 'bmr_report_metadata.meta_rep_id')
            ->leftJoin('bmr_category', 'bmr_report.rep_cat_id', '=', 'bmr_category.cat_id')
            ->leftJoin('bmr_sub_cat_1', 'bmr_report.rep_sub_cat_1_id', '=', 'bmr_sub_cat_1.sc1_id')
            ->where('rep_url', $url)->first();

        // $data = DB::table('bmr_report')->select('rep_sub_cat_1_id')
        //     ->where('rep_id', $id)->get();
        // $subCategory = $data[0]->rep_sub_cat_1_id;
        // $similarReports = DB::table('bmr_report')
        //     ->leftJoin('bmr_report_metadata', 'bmr_report.rep_id', '=', 'bmr_report_metadata.meta_rep_id')
        //     ->leftJoin('bmr_category', 'bmr_report.rep_cat_id', '=', 'bmr_category.cat_id')
        //     ->leftJoin('bmr_sub_cat_1', 'bmr_report.rep_sub_cat_1_id', '=', 'bmr_sub_cat_1.sc1_id')
        //     ->where('rep_sub_cat_1_id', $subCategory)
        //     ->where('rep_id', '!=', $id)->inRandomOrder()->limit(5)
        //     ->get();

      
      //$final_data=['report_details'=>$report,'subcategory'=>$subCategory,'similarreport'=>$similarReports];

      return $report;


    }

       public function searchReport($request, $query)
    {
        $reports = DB::table('bmr_report')
        ->select('rep_id', 'rep_title','rep_url')
        ->where('rep_title','like','%'.$query.'%')->limit(6)->get();
        return $reports;

    }


    public function reportDescription($query)
    {
         $report_description = DB::table('bmr_report')
        ->select('rep_descrip')
        ->where('rep_id',$query)->first();

        return $report_description;
    }


    public function reportToc($query)
    {
         $report_toc = DB::table('bmr_report')
         ->select('bmr_report_metadata.rep_table_of_contents')
        ->leftJoin('bmr_report_metadata', 'bmr_report.rep_id', '=', 'bmr_report_metadata.meta_rep_id')
        ->where('bmr_report.rep_id',$query)->first();
        return $report_toc;
    }


     //on advanced search page
    public function showLatestReport()
    {

        $latestReports = DB::table('bmr_report')
            ->select('rep_id', 'rep_title', 'rep_url', 'rep_descrip', 'rep_price', 'rep_pub_month', 'rep_pub_year','publisher_name')
            ->where('rep_pub_year', 2018)
            ->where('rep_status', 'Y')
            ->orderBy('rep_pub_month', 'desc')->limit(20)
            ->get();

        return $latestReports;
    }

    //advanced search report
    public function advancedSearchReport($request, $query)
    {
        $reports = DB::table('bmr_report')
            ->leftJoin('bmr_sub_cat_1', 'bmr_report.rep_sub_cat_1_id', '=', 'bmr_sub_cat_1.sc1_id')
            ->select('bmr_report.rep_id', 'bmr_report.rep_title', 'bmr_report.rep_url', 'bmr_report.rep_descrip', 'bmr_report.rep_price', 'bmr_report.rep_pub_month', 'bmr_report.rep_pub_year', 'bmr_report.publisher_name', 'bmr_sub_cat_1.sc1_name')
            ->where('bmr_report.rep_title', 'like', '%' . $query . '%')->get();
        return $reports;

    }

    //search by category
    public function categorySearchReport($request, $query, $category)
    {
        $categories = explode(',',$category);
        $reports = DB::table('bmr_report')
            ->leftJoin('bmr_sub_cat_1', 'bmr_report.rep_sub_cat_1_id', '=', 'bmr_sub_cat_1.sc1_id')
            ->select('bmr_report.rep_id', 'bmr_report.rep_title', 'bmr_report.rep_url', 'bmr_report.rep_descrip', 'bmr_report.rep_price', 'bmr_report.rep_pub_month', 'bmr_report.rep_pub_year', 'bmr_report.publisher_name', 'bmr_sub_cat_1.sc1_name')
            ->where('bmr_report.rep_title', 'like', '%' . $query . '%')
            ->whereIn('bmr_sub_cat_1.sc1_name',$categories)
            ->get();
        return $reports;

    }
    
    //search by price and category
    public function priceSearchReport($request, $query, $category,$min,$max)
    {
        $categories = explode(',',$category);
        $range = [$min,$max];
        $reports = DB::table('bmr_report')
            ->leftJoin('bmr_sub_cat_1', 'bmr_report.rep_sub_cat_1_id', '=', 'bmr_sub_cat_1.sc1_id')
            ->select('bmr_report.rep_id', 'bmr_report.rep_title', 'bmr_report.rep_url', 'bmr_report.rep_descrip', 'bmr_report.rep_price', 'bmr_report.rep_pub_month', 'bmr_report.rep_pub_year', 'bmr_report.publisher_name', 'bmr_sub_cat_1.sc1_name')
            ->where('bmr_report.rep_title', 'like', '%' . $query . '%')
            ->whereIn('bmr_sub_cat_1.sc1_name',$categories)
            ->whereBetween('bmr_report.rep_price', $range)
            ->get();
        return $reports;

    }

    //search by price
    public function onlyPriceSearchReport($request, $query, $min, $max)
    {
        $range = [$min,$max];
        $reports = DB::table('bmr_report')
            ->leftJoin('bmr_sub_cat_1', 'bmr_report.rep_sub_cat_1_id', '=', 'bmr_sub_cat_1.sc1_id')
            ->select('bmr_report.rep_id', 'bmr_report.rep_title', 'bmr_report.rep_url', 'bmr_report.rep_descrip', 'bmr_report.rep_price', 'bmr_report.rep_pub_month', 'bmr_report.rep_pub_year', 'bmr_report.publisher_name', 'bmr_sub_cat_1.sc1_name')
            ->where('bmr_report.rep_title', 'like', '%' . $query . '%')
            ->whereBetween('bmr_report.rep_price', $range)
            ->get();
        return $reports;

    }


   


   
}
