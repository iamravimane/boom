<div class="container">

         <div class="row">

            <div class="col-sm-12 col-md-12">
            	<p class="pop-heading">LATEST <span>PUBLICATIONS</span>
           		 </p> 
            	<div class="reports-border"></div>
			</div>

			@foreach($latestReports as $LatestReport)
			<div class="col-sm-12 col-md-12">
				<div class="pop-report-image">
					<a href="{{ url($LatestReport->rep_url.'-market') }}" class="img-responsive">
						<img src="https://www.bigmarketresearch.com/rd_images/1/01_Pharma.jpg" alt="report img">
					</a>
				</div>
				<p class="pop-reports-heading">
					<a href="{{ url($LatestReport->rep_url.'-market') }}">{{$LatestReport->rep_title}}
					</a>
				</p>
				<p class="pop-reports-desc">{{ str_limit($LatestReport->rep_descrip, $limit = 300, $end = '...') }}
				</p>
				<p class="pop-reports-date">{{date("F", mktime(0, 0, 0, $LatestReport->rep_pub_month, 1))}} {{$LatestReport->rep_pub_year}} | ${{$LatestReport->rep_price}} |
					<a href="{{ url($LatestReport->rep_url.'-market') }}">View Details&gt;&gt;
					</a>
				</p>
			</div>
			@endforeach
			<div class="clearfix">
				
			</div>
			<div class="clearfix"></div>
            <div class="col-md-12 btn-center">

               <a href="https://www.bigmarketresearch.com/latest-reports" class="btn btn-register" style="padding: 6px 22px;"> VIEW ALL REPORTS 
               </a>

            </div>

         </div>

      </div>