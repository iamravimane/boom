<?php

namespace App\Http\Controllers;

use App\Models\Report;
use App\Models\Licensetype;
use Illuminate\Http\Request;
use App\Imports\ReportsImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{

     public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function import() 
    {
        $previous_records = DB::table('reports')->count();
        Excel::import(new ReportsImport, request()->file('reports'));

        $updated_records = DB::table('reports')->count();
        $upload_records = $updated_records - $previous_records;
        return redirect('admin/excel-import')->with('success', $upload_records.' ');
    }
    
    public function index()
    {
        $reports = Report::select('id','report_title','status')->paginate(50);
        return view('admin.report.report',compact('reports'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = DB::table('categories')
                        ->select('id','title')
                        ->where('parent_id', NULL)
                        ->get();
        $publishers = DB::table('publishers')
                        ->select('id','name')
                        ->get();
        return view('admin.report.addreport',compact('categories','publishers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'category_id' => 'required',
        //     'subcategory_id' => 'required',
        //     'publisher_id' => 'required',
        //     'report_title' => 'required',
        //     'page_title' => 'required',
        //     'report_url' => 'required',
        //     'report_description' => 'required',
        //     'table_of_content' => 'required',
        //     'list_of_tables' => 'required',
        //     'meta_title' => 'required',
        //     'meta_tags' => 'required',
        //     'publish_day' => 'required',
        //     'publish_month' => 'required',
        //     'publish_year' => 'required',
        //     'total_pages' => 'required',
        //     'basic_price' => 'required',
        //     'discount_available' => 'required',
        //     'discount_type' => 'required',
        //     'discount' => 'required',
        //     'publish_upcomming_status' => 'required',
        //     'report_code' => 'required',
        //     'five_user' => 'required',
        //     'multiple' => 'required',
        //     'corporate' => 'required',
        //     'data_pack' => 'required',
        //     'elect_single' => 'required',
        //     'hard_copy' => 'required',
        //     'cd_price' => 'required',
        //     'site_user' => 'required',
        //     'enterprise' => 'required',
        //     'enterprise_wide' => 'required',
        //     'local_pdf' => 'required',
        //     'team_license' => 'required',
        //     'global_site' => 'required',
        //     'country_wide' => 'required',
        //     'global_pdf' => 'required',
        //     'data_local_pdf' => 'required',
        //     'data_global_pdf' => 'required',
        // ]);

        Report::create($request->all());

        $last_id = DB::table('reports')
                ->select('id')
                ->orderBy('id', 'desc')
                ->first();

        Licensetype::create(array_merge($request->all(), ['report_id' => $last_id->id]));
        return redirect('/admin/report')
                        ->with('success','Report added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function show(Report $report)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lid = DB::table('licensetypes')
                ->select('license_id')
                ->where('report_id', $id)
                ->first();
        $report = Report::findOrFail($id);
        $license = Licensetype::findOrFail($lid->license_id);
        $categories = DB::table('categories')
                        ->select('id','title')
                        ->where('parent_id', NULL)
                        ->get();
        $publishers = DB::table('publishers')
                        ->select('id','name')
                        ->get();
        return view('admin.report.editreport',compact('report','license','categories','publishers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        // $request->validate([
        //     'category_id' => 'required',
        //     'subcategory_id' => 'required',
        //     'publisher_id' => 'required',
        //     'report_title' => 'required',
        //     'page_title' => 'required',
        //     'report_url' => 'required',
        //     'report_description' => 'required',
        //     'table_of_content' => 'required',
        //     'list_of_tables' => 'required',
        //     'meta_title' => 'required',
        //     'meta_tags' => 'required',
        //     'publish_day' => 'required',
        //     'publish_month' => 'required',
        //     'publish_year' => 'required',
        //     'total_pages' => 'required',
        //     'basic_price' => 'required',
        //     'discount_available' => 'required',
        //     'discount_type' => 'required',
        //     'discount' => 'required',
        //     'publish_upcomming_status' => 'required',
        //     'status' => 'required',
        //     'popularity_status' => 'required',
        //     'report_code' => 'required',
        //     'five_user' => 'required',
        //     'multiple' => 'required',
        //     'corporate' => 'required',
        //     'data_pack' => 'required',
        //     'elect_single' => 'required',
        //     'hard_copy' => 'required',
        //     'cd_price' => 'required',
        //     'site_user' => 'required',
        //     'enterprise' => 'required',
        //     'enterprise_wide' => 'required',
        //     'local_pdf' => 'required',
        //     'team_license' => 'required',
        //     'global_site' => 'required',
        //     'country_wide' => 'required',
        //     'global_pdf' => 'required',
        //     'data_local_pdf' => 'required',
        //     'data_global_pdf' => 'required',
        // ]);
        

        $report = Report::findOrFail($id);
        $report->category_id = $request->get('category_id');
        $report->subcategory_id = $request->get('subcategory_id');
        $report->publisher_id = $request->get('publisher_id');
        $report->report_title = $request->get('report_title');
        $report->page_title = $request->get('page_title');
        $report->report_url = $request->get('report_url');
        $report->report_description = $request->get('report_description');
        $report->table_of_content = $request->get('table_of_content');
        $report->list_of_tables = $request->get('list_of_tables');
        $report->meta_title = $request->get('meta_title');
        $report->meta_tags = $request->get('meta_tags');
        $report->publish_day = $request->get('publish_day');
        $report->publish_month = $request->get('publish_month');
        $report->publish_year = $request->get('publish_year');
        $report->total_pages = $request->get('total_pages');
        $report->basic_price = $request->get('basic_price');
        $report->discount_available = $request->get('discount_available');
        $report->discount_type = $request->get('discount_type');
        $report->discount = $request->get('discount');
        $report->publish_upcomming_status = $request->get('publish_upcomming_status');
        $report->status = $request->get('status');
        $report->delete_status = $request->get('delete_status');
        $report->popularity_status = $request->get('popularity_status');
        $report->report_code = $request->get('report_code');


        $lid = DB::table('licensetypes')
        ->select('license_id')
        ->where('report_id', $id)
        ->first();

        $license = Licensetype::findOrFail($lid->license_id);
        $license->five_user = $request->get('five_user');
        $license->multiple = $request->get('multiple');
        $license->corporate = $request->get('corporate');
        $license->data_pack = $request->get('data_pack');
        $license->elect_single = $request->get('elect_single');
        $license->hard_copy = $request->get('hard_copy');
        $license->cd_price = $request->get('cd_price');
        $license->site_user = $request->get('site_user');
        $license->enterprise = $request->get('enterprise');
        $license->enterprise_wide = $request->get('enterprise_wide');
        $license->local_pdf = $request->get('local_pdf');
        $license->team_license = $request->get('team_license');
        $license->global_site = $request->get('global_site');
        $license->country_wide = $request->get('country_wide');
        $license->global_pdf = $request->get('global_pdf');
        $license->data_local_pdf = $request->get('data_local_pdf');
        $license->data_global_pdf = $request->get('data_global_pdf');

        $report->save();
        $license->save();
        return redirect('/admin/report')
                        ->with('success','Report updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function destroy(Report $report)
    {
        //
    }

    // public function addReport()
    // {
    //     $categories = DB::table('categories')
    //                     ->select('id','title')
    //                     ->where('parent_id', NULL)
    //                     ->get();
    //     $publishers = DB::table('publishers')
    //                     ->select('id','name')
    //                     ->get();
    //     return view('pages.addreport',compact('categories','publishers'));
        
    // }

    public function getCategories()
    {
        $category = $request->get('category_name');
        $subcategories = DB::table('categories')
                        ->select('id','title')
                        ->where('parent_id', $category)
                        ->get();
        return $subcategories;
    }
}
