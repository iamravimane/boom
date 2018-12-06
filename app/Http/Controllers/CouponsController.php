<?php

namespace App\Http\Controllers;

use App\Models\Coupons;
use App\Models\Publishers;
use App\Requests\CouponRequest;
use Illuminate\Http\Request;

class CouponsController extends Controller
{
   public function anyData()
    {
        return Datatables::of(Coupons::query())->make(true);

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $coupan_details= Coupons::where('delete_status','N')->orderBy('id', 'desc')->get();
   
        return view('admin.banner.index')->withBannerdetails($coupan_details);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $publishers = Publishers::where('delete_status','N')->orderBy('id', 'desc')->get();
        $types=array('fixed','percentage');
        return view('admin.coupan.create')->withTypes($types)->withPublishers($publishers);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CouponRequest $request)
    {
       

        $coupon=new Coupons();
        $coupon->title=$request->input('title');
        $coupon->publisher_id=$request->input('publisher_id');
        $coupon->banner_text=$request->input('banner_text');
        $coupon->banner_path=$filename;
        $coupon->valid_date=$request->input('valid_date');
        $coupon->status=$request->input('status');
        $coupon->save();
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
