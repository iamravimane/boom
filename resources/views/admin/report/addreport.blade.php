@extends('layouts.admin') 
@section('content')
<div class="container col-md-8 mb-5 border p-3">
  <header class="bg-dark text-light p-2 my-1">
      <h4>Add New Reports</h4>
  </header>
  <form method="POST" action="{{ route('report.store') }}">
       <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="form-group">
          <label>Category Name:</label>
          <select name="category_id" id="category_id" class="form-control" onchange="getSubcategories(this.value);">
                  <option>Select Category</option>
                  @foreach($categories as $category)
                  <option value="{{$category->id}}"> {{$category->title}}</option>
                  @endforeach
              </select>
      </div>
      <div class="form-group">
          <label>Subcategory Name:</label>
          <select name="subcategory_id" id="subcategory_id" class="form-control">

          </select>
          {{-- <input type="number" class="form-control" name="subcategory_id" required > --}}
      </div>
      <div class="form-group">
          <label>Publisher Name:</label>
          <select name="publisher_id" id="publisher_id" class="form-control">
              @foreach($publishers as $publisher)
              <option value="{{$publisher->id}}"> {{$publisher->name}}</option>
              @endforeach
          </select>
      </div>
      <div class="form-group">
          <label>Report Title:</label>
          <textarea class="form-control" name="report_title" required></textarea>
      </div>
      <div class="form-group">
          <label>Page Title:</label>
          <textarea class="form-control" name="page_title" required></textarea>
      </div>
      <div class="form-group">
          <label>Report URL:</label>
          <textarea class="form-control" name="report_url" required></textarea>
      </div>
      <div class="form-group">
          <label>Report Description:</label>
          <textarea class="form-control textarea" name="report_description" rows="5" required></textarea>
      </div>
      <div class="form-group">
          <label>Table of Content:</label>
          <textarea class="form-control textarea" name="table_of_content" rows="5" required></textarea>
      </div>
      <div class="form-group">
          <label>List of Tables:</label>
          <textarea class="form-control textarea" name="list_of_tables" rows="5" required></textarea>
      </div>
      <div class="form-group">
          <label>Meta Title:</label>
          <textarea class="form-control" name="meta_title" required></textarea>
      </div>
      <div class="form-group">
          <label>Meta Tags:</label>
          <textarea class="form-control" name="meta_tags" required></textarea>
      </div>
      <div class="form-group">
          <label>Publish Day:</label>
          <input type="number" class="form-control-sm mr-4" name="publish_day" min="1" max="31" placeholder="day" required >
          <select name="publish_month" id="publish_month" class="form-control-sm mr-4">
              <option value="">Publish Month</option>
              <option value="January">January</option>
              <option value="February">February</option>
              <option value="March">March</option>
              <option value="April">April</option>
              <option value="May">May</option>
              <option value="June">June</option>
              <option value="July">July</option>
              <option value="August">August</option>
              <option value="September">September</option>
              <option value="October">October</option>
              <option value="November">November</option>
              <option value="December">December</option>
          </select>
          <input type="number" class="form-control-sm" name="publish_year" min="1980" max="2050" placeholder="year" required >
      </div>
      <div class="form-group">
          <label>Total Pages:</label>
          <input type="number" class="form-control" name="total_pages" required >
      </div>
      <div class="form-group">
          <label>Basic Price:</label>
          <input type="number" class="form-control" name="basic_price" required >
      </div>
      <div class="form-group">
          <label>5 User:</label>
          <input type="number" class="form-control" name="five_user" required >
      </div>
      <div class="form-group">
          <label>Multiple:</label>
          <input type="number" class="form-control" name="multiple" required >
      </div>
      <div class="form-group">
          <label>Corporate:</label>
          <input type="number" class="form-control" name="corporate" required >
      </div>
      <div class="form-group">
          <label>Data Pack:</label>
          <input type="number" class="form-control" name="data_pack" required >
      </div>
      <div class="form-group">
          <label>Elect Single:</label>
          <input type="number" class="form-control" name="elect_single" required >
      </div>
      <div class="form-group">
          <label>Hard Copy:</label>
          <input type="number" class="form-control" name="hard_copy" required >
      </div>
      <div class="form-group">
          <label>CD Price:</label>
          <input type="number" class="form-control" name="cd_price" required >
      </div>
      <div class="form-group">
          <label>Site User:</label>
          <input type="number" class="form-control" name="site_user" required >
      </div>
      <div class="form-group">
          <label>Enterprise:</label>
          <input type="number" class="form-control" name="enterprise" required >
      </div>
      <div class="form-group">
          <label>Enterprise Wide:</label>
          <input type="number" class="form-control" name="enterprise_wide" required >
      </div>
      <div class="form-group">
          <label>Local PDF:</label>
          <input type="number" class="form-control" name="local_pdf" required >
      </div>
      <div class="form-group">
          <label>Team License:</label>
          <input type="number" class="form-control" name="team_license" required >
      </div>
      <div class="form-group">
          <label>Global Site:</label>
          <input type="number" class="form-control" name="global_site" required >
      </div>
      <div class="form-group">
          <label>Country Wide:</label>
          <input type="number" class="form-control" name="country_wide" required >
      </div>
      <div class="form-group">
          <label>Global PDF:</label>
          <input type="number" class="form-control" name="global_pdf" required >
      </div>
      <div class="form-group">
          <label>Data Local PDF:</label>
          <input type="number" class="form-control" name="data_local_pdf" required >
      </div>
      <div class="form-group">
          <label>Data Global PDF:</label>
          <input type="number" class="form-control" name="data_global_pdf" required >
      </div>
      <div class="form-group">
          <label>Discount Available:</label>
          <div class="radio">
            <label><input type="radio" value="Y" name="discount_available">Yes</label>
        </div>
        <div class="radio">
            <label><input type="radio" value="N" name="discount_available" checked>No</label>
        </div>
      </div>
      <div class="form-group">
          <label>Discount Type:</label>
          <div class="radio">
                <label><input type="radio" value="P" name="discount_type">Percentage</label>
            </div>
            <div class="radio">
                <label><input type="radio" value="F" name="discount_type">Fixed</label>
            </div>
      </div>
      <div class="form-group">
          <label>Discount:</label>
          <input type="number" class="form-control" name="discount">
      </div>
      <div class="form-group">
          <label>Publish/Upcomming Status:</label>
          <div class="radio">
                <label><input type="radio" value="P" name="publish_upcomming_status" checked>Publish</label>
        </div>
        <div class="radio">
            <label><input type="radio" value="U" name="publish_upcomming_status">Upcoming</label>
        </div>
      </div>
      <div class="form-group">
          <label>Report Code:</label>
          <input type="text" class="form-control" name="report_code" required >
      </div>
      <input type="submit" value="Submit Report" class="btn btn-primary">
    </form>
</div>
<script src="{{ URL::asset('admin/vendors/jquery/dist/jquery.min.js')}}"></script>
<script>
    function getSubcategories(cat)
    {
        $('#subcategory_id').html('');
        $.ajax({
            headers: 
            {
                'X-CSRF-Token': $('input[name="_token"]').val()
            },
                type: "POST",
                url:"{{ url('admin/fetch-sub-categories') }}",
                data: "category="+cat, 
            success:function(response)
            {
                response.forEach(element => {
                    $('#subcategory_id').append('<option value="'+element.id+'">'+element.title+'</option>')
                });
            }
        });
    }
    
</script>
@endsection