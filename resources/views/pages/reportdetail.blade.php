@extends('layouts.master')
@section('content')


 
<section id="rd-page-title-content">

<div class="container">

	<div class="row rd-head">

    	<div class="col-md-12 col-md-1">

        	<div class="rd-report-image">

        		<img src="https://www.bigmarketresearch.com/rd_images/1/02_Pharma.jpg" alt="Pharmaceuticals">

            </div>    

        </div>

        <div class="col-md-11 rd-page-title-right-sec">

        	 <h1 class="rd-page-title">{{$reportDetail->rep_page_title}}</h1>

             <div class="row">

             <div class="col-md-12">

                <ul class="list-inline rd-cat">

                	<li>QYR2314559</li>

                  
                    <li>{{$reportDetail->rep_page}} Pages</li>

                    
                    
                    <li>December 2017</li>

                    
                   <!-- <li>Region: Global</li>-->

                    <li>Pharmaceuticals</li>

                </ul>

             </div>

             <div class="clearfix"></div>

             <div class="col-md-12">

                 <ul class="list-inline rd-enquiry-discount-img">

                   
                    <li><a href="https://www.bigmarketresearch.com/purchase-enquiry/2314559"><img class="rd-enquiry-img" src="https://www.bigmarketresearch.com/assets/images/enquiry_report.png" alt=""></a> </li>

                    
                    <li><a href="https://www.bigmarketresearch.com/request-for-discount/2314559"><img class="rd-discount-img" src="https://www.bigmarketresearch.com/assets/images/check_discount.png" alt=""></a></li>

                    
                </ul>

             </div>

             </div>

            </div>

    </div>

</div>

</section>


<div class="container">

        <div class="row">
            
            <div class="row">

            <div class="col-md-9"> 

            <reportdetailstab id={{$reportDetail->rep_id}}></reportdetailstab>
            </div> <!-- COL-MD-9 END -->

            <?php //print_r($reportDetail);?>

            <div class="col-md-3"> <!-- COL-MD-3 START -->

            <div class="sel-format">
                <form name="buy" id="buy" action="" method="post">     
                <input type="hidden" name="id" value="{{$reportDetail->rep_id}}">
                
                <input type="hidden" name="report_title" value="{{$reportDetail->rep_title}}">
                <input type="hidden" name="report_url" value="{{$reportDetail->rep_url}}">
                <input type="hidden" name="publisher_name" value="{{$reportDetail->publisher_name}}">
             <!--    <input type="hidden" name="rep_image" value="">
                <input type="hidden" name="flag" value="0"> -->
                <div class="right-tab-header">Please Select Format</div>
                <!-- <div class="rd-radio gray-box radio-active">
                    <label>
                        <input id="optradio0" value="Single User:2900" name="selected_license" checked="checked" type="radio">
                       
                         <span>Single User: US &nbsp;&nbsp;<span class="blue">$2900</span> </span>
                    </label>
                </div>
                <div class="rd-radio gray-box ">
                     <label>
                        <input id="optradio1" value="Enterprise User:5800" name="selected_license" type="radio">
                        
                          <span>Enterprise User: US &nbsp;&nbsp;<span class="blue">$5800</span> </span>
                      </label>
                </div> -->

                <select>
                    
                    <option>Enterprise User:5800</option>
                    <option>Enterprise User:5800</option>

                </select>

                <input type="hidden" name="license_orig" value="">
                <div class="rd-buy-now">
                        <button type="submit" name="submit" value="add_cart" class="btn-addcart">Add to Cart</button>
                        <br>
                    <button type="submit" name="submit" value="buy_now" class="btn-buynow" style="">Buy Now</button>    

                </div> 
                </form>

                

@include('partials.enquiry')
@include('partials.needmore')
               
        </div> <!-- COL-MD-3 END -->
    </div>
</div>
</div>
@include('partials.similer')
@include('partials.upcomingreport')
</div>
@stop



