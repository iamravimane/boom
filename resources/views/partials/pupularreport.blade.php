 <div class="container" id="pop_reports">
      	<div class="row">
      		<div class="col-sm-12 cl-md-12">
      			<h3 class="pop-heading">POPULAR <span>REPORTS</span></h3>

      			<div class="reports-border"></div>
      		</div>	

                  @foreach($popularReports as $PopularReport)
      		<div class="col-sm-6 col-md-3">
      			<p class="reports-heading">
      				<a href="{{ url($PopularReport->rep_url.'-market') }}">{{$PopularReport->rep_title}}<span class="glyphicon glyphicon-chevron-right"></span>
      				</a>
      			</p>
      			<p class="reports-details">{{ str_limit($PopularReport->rep_descrip, $limit = 300, $end = '...') }}
      			</p>
      			<a href="{{ url($PopularReport->rep_url.'-market') }}" class="pull-left pop-read-more">Read More</a>
      		</div>
                  @endforeach
      	 </div>
      	

      </div>