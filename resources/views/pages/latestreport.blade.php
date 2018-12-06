@extends('layouts.master') 
@section('content')

<div class="container">
	<div class="row">
<div class="col-md-3 col-xs-12 col-md-push-9">
	<h2 class="bc-head" id="fliter-plus" style="cursor:pointer;">FILTER BY <span>PRICE</span> 
     <span class="glyphicon glyphicon-plus filter-plus"></span></h2>

     <div class="col-md-12 col-xs-12">
      <div class="checkbox filter-checkbox up2" id="filter-check">
			 <input name="filter_price" onclick="window.location='https://www.bigmarketresearch.com/latest-reports?price-range=0-800'" type="checkbox"> 
              <label> 
               <a href="https://www.bigmarketresearch.com/latest-reports?price-range=0-800" class="cat_lable">USD 75 - USD 800</a>
               </label> 
            <hr style="margin-bottom:10px; margin-top:5px;">  
       <input name="filter_price" onclick="window.location='https://www.bigmarketresearch.com/latest-reports?price-range=801-2000'" type="checkbox"> 
              <label> 
               <a href="https://www.bigmarketresearch.com/latest-reports?price-range=801-2000" class="cat_lable">USD 801 - USD 2000</a>
               </label>
              <hr style="margin-bottom:10px; margin-top:5px;">  
         <input name="filter_price" onclick="window.location='https://www.bigmarketresearch.com/latest-reports?price-range=2001-3500'" type="checkbox"> 
              <label> 
               <a href="https://www.bigmarketresearch.com/latest-reports?price-range=2001-3500" class="cat_lable">USD 2001 - USD 3500</a>
               </label> 
          <hr style="margin-bottom:10px; margin-top:5px;">
        <input name="filter_price" onclick="window.location='https://www.bigmarketresearch.com/latest-reports?price-range=3501-5000'" type="checkbox"> 
              <label> 
               <a href="https://www.bigmarketresearch.com/latest-reports?price-range=3501-5000" class="cat_lable">USD 3501 - USD 5000</a>
               </label>
              <hr style="margin-bottom:10px; margin-top:5px;">
	   <input name="filter_price" onclick="window.location='https://www.bigmarketresearch.com/latest-reports?price-range=5001-'" type="checkbox"> 
              <label> 
               <a href="https://www.bigmarketresearch.com/latest-reports?price-range=5001-" class="cat_lable"> USD 5000 AND ABOVE</a>
               </label>
                              			 <!--             <input type="checkbox" name="published" id="pubfilter" value="0" />
-->            
                 <hr style="margin-bottom:10px; margin-top:5px;">  
          </div>
          </div>
          <div class="clearfix"></div>
          <h2 class="bc-head" id="bra-categ" style="cursor:pointer;">browse <span>categories</span><span class="glyphicon glyphicon-plus filter-plus"></span></h2>
          <ul class="categ-list" id="dis-cate">
        	<li><a href="https://www.bigmarketresearch.com/pharmaceuticals-market-report">Pharmaceuticals</a></li>
          	<li><a href="https://www.bigmarketresearch.com/medical-devices-market-report">Medical Devices</a></li>
          	<li><a href="https://www.bigmarketresearch.com/healthcare-market-report">Healthcare</a></li>
          	<li><a href="https://www.bigmarketresearch.com/diagnostic-and-biotech-market-report">Diagnostic and Biotech</a></li>
          	<li><a href="https://www.bigmarketresearch.com/consumer-goods-market-report">Consumer Goods</a></li>
          	<li><a href="https://www.bigmarketresearch.com/materials-and-chemicals-market-report">Materials and Chemicals</a></li>
          	<li><a href="https://www.bigmarketresearch.com/construction-and-manufacturing-market-report">Construction &amp; Manufacturing</a></li>
          	<li><a href="https://www.bigmarketresearch.com/food-and-beverages-market-report">Food and Beverages</a></li>
          	<li><a href="https://www.bigmarketresearch.com/energy-and-power-market-report">Energy and Power</a></li>
          	<li><a href="https://www.bigmarketresearch.com/semiconductor-and-electronics-market-report">Semiconductor and Electronics</a></li>
          	<li><a href="https://www.bigmarketresearch.com/automotive-and-transportation-market-report">Automotive and Transportation</a></li>
          	<li><a href="https://www.bigmarketresearch.com/information-and-communication-technology-and-media-market-report">ICT &amp; Media</a></li>
          	<li><a href="https://www.bigmarketresearch.com/aerospace-and-defence-market-report">Aerospace &amp; Defence</a></li>
          	<li><a href="https://www.bigmarketresearch.com/banking-financial-services-and-insurance-market-report">BFSI</a></li>
          	<li><a href="https://www.bigmarketresearch.com/tourism-and-lifestyle-market-report">Tourism and Lifestyle</a></li>
          	<li><a href="https://www.bigmarketresearch.com/environment-and-gas-market-report">Environment and Gas</a></li>
          	<li><a href="https://www.bigmarketresearch.com/Others-market-report">Others</a></li>
          	<li><a href="https://www.bigmarketresearch.com/packaging-market-report">Packaging</a></li>
          	<li><a href="https://www.bigmarketresearch.com/glass-market-report">Glass</a></li>
          	<li><a href="https://www.bigmarketresearch.com/optical-goods-market-report">Optical Goods</a></li>
          	<li><a href="https://www.bigmarketresearch.com/clothing-and-textiles-market-report">Clothing and Textiles</a></li>
          	<li><a href="https://www.bigmarketresearch.com/retail-market-report">Retail</a></li>
          	<li><a href="https://www.bigmarketresearch.com/machines-market-report">Machines</a></li>
          	<li><a href="https://www.bigmarketresearch.com/company-profiles-and-swot-market-report">Company Profiles</a></li>
          	<li><a href="https://www.bigmarketresearch.com/agriculture-industry-market-report">Agriculture</a></li>
          </ul>
</div>

<div class="col-sm-9 col-md-9 col-xs-12 col-md-pull-3">

	<h4 class="pop-heading">LATEST<span>REPORTS</span></h4>

	<div class="reports-border"></div>

	<div id="postList" class="post-list">
		<ul class="pagination pagination-sm my-pagination"></ul>
@foreach($allReports as $reports)

<div>
   <div class="pop-report-image">
      <img class="img-responsive" src="/rd_images/14/Aerospace&amp;Defence03-min.jpg" alt="report-img">
   </div>
<p class="pop-reports-heading">
		<a href="{{url($reports->rep_url)}}">{{$reports->rep_title}}</a>
	</p>
   	<p class="pop-reports-desc">{{substr($reports->rep_descrip, 0, 400).'...'}}</p>
   <p class="pop-reports-date"> ${{$reports->rep_price}}&nbsp;&nbsp; | {{ jdmonthname(gregoriantojd($reports->rep_pub_month,13,2018),1) }}&nbsp; {{$reports->rep_pub_year}} &nbsp;&nbsp; | &nbsp;&nbsp;{{substr($reports->publisher_name, 0, 3).$reports->rep_id }} | <a href="{{url($reports->rep_url)}}"> View Details &gt;&gt;</a></p>
</div>
@endforeach
</div>
</div>
</div>
</div>

@endsection

{{-- `rep_id`, `rep_cat_id`, `rep_sub_cat_1_id`, `rep_sub_cat_2_id`, `publisher_id`, `rep_title`, `rep_url`, `rep_descrip`, `rep_price`, `rep_entry_date`, `rep_upcoming_published_status`, `rep_date`, `rep_dis`, `rep_status`, `rep_page_title`, `rep_meta_title`, `rep_meta_tags`, `rep_upcoming_month`, `rep_upcoming_year`, `rep_archive_status`, `rep_report_code`, `rep_pub_day`, `rep_pub_month`, `rep_pub_year`, `rep_page`, `rep_authors`, `popularity`, `publisher_name`, `elect_single`, `rep_5user`, `site_user`, `site_lic_pdf`, `rep_m`, `rep_c`, `enterprise`, `enterprise_wide`, `team_licence`, `global_site_lic`, `global_pdf`, `global_lic_pdf`, `country_wide`, `cd_price`, `hard_copy`, `local_pdf`, `data_pack`, `data_local_pdf`, `data_global_pdf`, `report_update`, `rep_tables`, `rep_analyst`, `rep_key`, `new_meta_disc`, `new_meta_keyword`, `show_similarreports`, `similarreports_info`, `keyword`, `rep_discount` --}}