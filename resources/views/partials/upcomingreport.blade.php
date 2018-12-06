 <div id="upcoming-reports" class="container">

         <div class="row">

            <div class="col-sm-12 col-md-12">
            	<p class="pop-heading">UPCOMING MARKET <span>RESEARCH REPORTS</span> 
            	</p> 
            	<div class="reports-border">
    			</div>
    		</div>
            @foreach($upcomingReports as $UpcomingReport)
    		<div class="col-sm-6 col-md-4 margin-bottom-40">
    			<blockquote class="borders">
    				<p class="upcoming-heading">
    					<a href="{{ url($UpcomingReport->rep_url.'-market') }}">{{$UpcomingReport->rep_title}}
    					</a>
    				</p>
    			</blockquote>
    			<p class="upcoming-desc">{{ str_limit($UpcomingReport->rep_descrip, $limit = 300, $end = '...') }}
    			</p>
    			<p class="upcoming-date">May 2018 | $5370 | Pre Book Price:$4699
    			</p>
    		</div>
            @endforeach
    		<div class="col-md-12 btn-center">

               <a href="https://www.bigmarketresearch.com/upcoming-reports" class="btn btn-register" style="padding: 6px 22px;">

               VIEW ALL REPORTS </a>

            </div>
        </div>
    </div>