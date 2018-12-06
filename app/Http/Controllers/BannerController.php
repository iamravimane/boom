<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use App\Http\Requests\BannerRequest;
use Yajra\Datatables\Datatables;


class BannerController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function anyData()
    {
        //return Datatables::of(Banner::query())->make(true);

        $banners = Banner::select(['id', 'title', 'banner_path', 'banner_text','valid_date','status'])->where('delete_status','N');

        //print_r($banners);

        return Datatables::of($banners)
            ->addColumn('banner', function ($banners) {
                return $banners->banner_path;
            })->toJson();
            //  ->editColumn('banner_text', function ($banners) {
            //     return html_entity_decode(Str_limit($banners->banner_text));
            // })
            // ->addColumn('edit', function ($banners) {
            //     return $banners->id;
            // })
            // ->addColumn('delete', function ($banners) { 
            //     return $banners->id;
            // })
            // ->make(true);


    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $banner_details= Banner::where('delete_status','N')->orderBy('id', 'desc')->get();
   
        return view('admin.banner.index')->withBannerdetails($banner_details);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.banner.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BannerRequest $request)
    {
         $filename = null;
         $title=$request->input('title');
        if ($request->hasFile('banner_path')) {
            if (!is_dir(public_path(). '/bannerimages/'. $title)) {
                mkdir(public_path(). '/bannerimages/'. $title, 0777, true);
            }
            $file =  $request->file('banner_path');

            $destinationPath = public_path(). '/bannerimages/'. $title;
            $filename = str_random(8) . '_' . $file->getClientOriginalName() ;
            $file->move($destinationPath, $filename); 
        }


        $banner=new Banner();
        $banner->title=$request->input('title');
        $banner->banner_text=$request->input('banner_text');
        $banner->banner_path=$filename;
        $banner->valid_date=$request->input('valid_date');
        $banner->status=$request->input('status');
        $banner->save();
         return redirect('admin/banners')
                        ->with('success','Banner added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function show(Banner $banner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $banner_details=Banner::findOrFail($id);
      
        return view('admin.banner.edit')->withBannerdetails($banner_details);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function update(BannerRequest $request, $id)
    {
         if($request->hasFile('banner_path'))
         {
            $filename = null;
           
        
         }else{
            $filename = $request->input('banner_path_old');
            
         }  
         $title=$request->input('title');
        if ($request->hasFile('banner_path')) {
            if (!is_dir(public_path(). '/bannerimages/'. $title)) {
                mkdir(public_path(). '/bannerimages/'. $title, 0777, true);
            }
            $file =  $request->file('banner_path');

            $destinationPath = public_path(). '/bannerimages/'. $title;
            $filename = str_random(8) . '_' . $file->getClientOriginalName() ;
            $file->move($destinationPath, $filename); 
        }


        $banner=Banner::findOrFail($id);
        $banner->title=$request->input('title');
        $banner->banner_text=$request->input('banner_text');
        $banner->banner_path=$filename;
        $banner->valid_date=$request->input('valid_date');
        $banner->status=$request->input('status');
        $banner->save();
         return redirect('admin/banners')
                        ->with('success','Banner updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $banner= Banner::findOrFail($id);
         $banner->delete_status='Y';
         $banner->save();
         return redirect('admin/banners')
                        ->with('success','Banner Delected');
    }
}
