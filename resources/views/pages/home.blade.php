@extends('layouts.default')
@section('content')
   
   <div class="jumbotron text-center">
		<h1 class="banner-heading" style="margin-bottom: 15px;">We are world's largest market research reports store

            <span>Search more than 17,10,745+ market research reports from $75</span>

         </h1>

         <div id="seacrch-container">

            <div id="app">
            <searchbar></searchbar>
         </div>
         </div>

         <style type="text/css">
            #search-bar{
               background-color: transparent !important;
            }

         </style>
         <div class="container">

            <div class="row banner-list">

               <div class="col-md-3">

                  <a href="https://www.bigmarketresearch.com/latest-reports">

                     <p class="reports-heading">Our Products<br>

                        <span style="color:#fff;font-weight: normal;">industry Reports &nbsp;&nbsp;|&nbsp;&nbsp;  </span>

                        <span style="color:#fff;font-weight: normal;">Geographic Reports</span><br>

                        <span style="color:#fff;font-weight: normal;">Company Reports</span>  

                     </p>

                  </a>

               </div>

               <div class="col-md-3">

                  <a href="https://www.bigmarketresearch.com/contact-us">

                     <p class="reports-heading">24/7 Support<br>

                        <span style="color:#fff;font-weight: normal;">

                        Toll Free : +1-800-910-6452<br>

                        Tel no : +1-971-202-1575

                        </span>

                     </p>

                  </a>

               </div>

               <div class="col-md-3">

                  <a href="https://www.bigmarketresearch.com/testimonials">

                     <p class="reports-heading">Beloved by our clients<br>

                        <span style="color:#fff;font-weight: normal;">we always define our victory<br>by your results.</span>

                     </p>

                  </a>

               </div>

               <div class="col-md-3">

                  <a href="https://www.bigmarketresearch.com/payment-modes">

                     <p class="reports-heading">100% safe and secure payment<br>

                        <span style="color:#fff;font-weight: normal;">

                        secured end-to-end, ensuring a <br>satisfactory purchase.</span>

                     </p>

                  </a>

               </div>

            </div>

         </div>

      </div>


      <div class="container">
      	<nav class="wsmenu slideLeft clearfix category-nav">

            <ul class="mobile-sub wsmenu-list">
            	<li>
            		<span class="wsmenu-click"><i class="wsmenu-arrow fa fa-angle-down"></i></span>
            		<a href="pharmaceuticals-market-report" style="height: 53px;">Pharmaceuticals<span class="arrow"></span></a>
            		
            		<div class="megamenu clearfix">

            			<ul class="col-lg-3 col-md-3 col-xs-12 link-list"><li class="title"><a href="category/biologics">Biologics</a></li></ul>

            		</div>	

            	</li>
            </ul>




      </div>

    @include('partials.pupularreport')

    @include('partials.latestpublication')
	      

    @include('partials.upcomingreport')
	@include('partials.testimonials')
    @include('partials.clients')
   
@stop
