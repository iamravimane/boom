@extends('layouts.admin') 
@section('content')
<div class="container col-md-8 mb-5 border p-3">
    <div>
        @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
            </ul>
        </div>
        @endif
    </div>
    <form method="POST" action="{{ route('report.update',$report->id) }}">
        @method('PATCH')
        @csrf
        <div class="form-group">
            <label>Category ID:</label>
            <select name="category_id" id="category_id" class="form-control">
                @foreach($categories as $category)
                @if($report->category_id === $category->id)
                <option value="{{$category->id}}" selected> {{$category->title}}</option>
                @else
                <option value="{{$category->id}}"> {{$category->title}}</option>
                @endif
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Subcategory Name:</label>
            <input type="number" class="form-control" name="subcategory_id" value="{{$report->subcategory_id}}" required >
        </div>
        <div class="form-group">
            <label>Publisher Name:</label>
            <select name="publisher_id" id="publisher_id" class="form-control">
                @foreach($publishers as $publisher)
                @if($report->publisher_id === $publisher->id)
                <option value="{{$publisher->id}}" selected> {{$publisher->name}}</option>
                @else
                <option value="{{$publisher->id}}"> {{$publisher->name}}</option>
                @endif
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Report Title:</label>
            <textarea class="form-control" name="report_title" required>{{$report->report_title}}</textarea>
        </div>
        <div class="form-group">
            <label>Page Title:</label>
            <textarea class="form-control" name="page_title" required>{{$report->page_title}}</textarea>
        </div>
        <div class="form-group">
            <label>Report URL:</label>
            <textarea class="form-control" name="report_url" required>{{$report->report_url}}</textarea>
        </div>
        <div class="form-group">
            <label>Report Description:</label>
            <textarea class="form-control textarea" name="report_description" rows="5" required>{{$report->report_description}}</textarea>
        </div>
        <div class="form-group">
            <label>Table of Content:</label>
            <textarea class="form-control textarea" name="table_of_content" rows="5" required>{{$report->table_of_content}}</textarea>
        </div>
        <div class="form-group">
            <label>List of Tables:</label>
            <textarea class="form-control textarea" name="list_of_tables" rows="5" required>{{$report->list_of_tables}}</textarea>
        </div>
        <div class="form-group">
            <label>Meta Title:</label>
            <textarea class="form-control" name="meta_title" required>{{$report->meta_title}}</textarea>
        </div>
        <div class="form-group">
            <label>Meta Tags:</label>
            <textarea class="form-control" name="meta_tags" required>{{$report->meta_tags}}</textarea>
        </div>
        <div class="form-group">
            <label>Publish Day:</label>
            <input type="number" class="form-control-sm mr-4" name="publish_day" min="1" max="31" placeholder="day" value="{{$report->publish_day}}" required >
            <select name="publish_month" id="publish_month" class="form-control-sm mr-4">
                @foreach(array('January','February','March','April','May','June','July','August','September','October','November','December') as $month)
                @if($month === $report->publish_month)
                <option value="{{$month}}" selected> {{$month}}</option>
                @else
                <option value="{{$month}}"> {{$month}}</option>
                @endif
                @endforeach

            </select>
            <input type="number" class="form-control-sm" name="publish_year" min="1980" max="2050" placeholder="year" value="{{$report->publish_year}}" required >
        </div>
        <div class="form-group">
            <label>Total Pages:</label>
            <input type="number" class="form-control" name="total_pages" value="{{$report->total_pages}}" required >
        </div>
        <div class="form-group">
            <label>Basic Price:</label>
            <input type="number" class="form-control" name="basic_price" value="{{$report->basic_price}}" required >
        </div>
        <div class="form-group">
            <label>5 User:</label>
            <input type="number" class="form-control" name="five_user" value="{{$license->five_user}}" required >
        </div>
        <div class="form-group">
            <label>Multiple:</label>
            <input type="number" class="form-control" name="multiple" value="{{$license->multiple}}" required >
        </div>
        <div class="form-group">
            <label>Corporate:</label>
            <input type="number" class="form-control" name="corporate" value="{{$license->corporate}}" required >
        </div>
        <div class="form-group">
            <label>Data Pack:</label>
            <input type="number" class="form-control" name="data_pack" value="{{$license->data_pack}}" required >
        </div>
        <div class="form-group">
            <label>Elect Single:</label>
            <input type="number" class="form-control" name="elect_single" value="{{$license->elect_single}}" required >
        </div>
        <div class="form-group">
            <label>Hard Copy:</label>
            <input type="number" class="form-control" name="hard_copy" value="{{$license->hard_copy}}" required >
        </div>
        <div class="form-group">
            <label>CD Price:</label>
            <input type="number" class="form-control" name="cd_price" value="{{$license->cd_price}}" required >
        </div>
        <div class="form-group">
            <label>Site User:</label>
            <input type="number" class="form-control" name="site_user" value="{{$license->site_user}}" required >
        </div>
        <div class="form-group">
            <label>Enterprise:</label>
            <input type="number" class="form-control" name="enterprise" value="{{$license->enterprise}}" required >
        </div>
        <div class="form-group">
            <label>Enterprise Wide:</label>
            <input type="number" class="form-control" name="enterprise_wide" value="{{$license->enterprise_wide}}" required >
        </div>
        <div class="form-group">
            <label>Local PDF:</label>
            <input type="number" class="form-control" name="local_pdf" value="{{$license->local_pdf}}" required >
        </div>
        <div class="form-group">
            <label>Team License:</label>
            <input type="number" class="form-control" name="team_license" value="{{$license->team_license}}" required >
        </div>
        <div class="form-group">
            <label>Global Site:</label>
            <input type="number" class="form-control" name="global_site" value="{{$license->global_site}}" required >
        </div>
        <div class="form-group">
            <label>Country Wide:</label>
            <input type="number" class="form-control" name="country_wide" value="{{$license->country_wide}}" required >
        </div>
        <div class="form-group">
            <label>Global PDF:</label>
            <input type="number" class="form-control" name="global_pdf" value="{{$license->global_pdf}}" required >
        </div>
        <div class="form-group">
            <label>Data Local PDF:</label>
            <input type="number" class="form-control" name="data_local_pdf" value="{{$license->data_local_pdf}}" required >
        </div>
        <div class="form-group">
            <label>Data Global PDF:</label>
            <input type="number" class="form-control" name="data_global_pdf" value="{{$license->data_global_pdf}}" required >
        </div>
        <div class="form-group">
            <label>Discount Available:</label>
            @if($report->discount_available == 'Y')
            <div class="radio">
                <label><input type="radio" value="Y" name="discount_available" checked>Yes</label>
            </div>
            <div class="radio">
                <label><input type="radio" value="N" name="discount_available">No</label>
            </div>
            @else
            <div class="radio">
                <label><input type="radio" value="Y" name="discount_available">Yes</label>
            </div>
            <div class="radio">
                <label><input type="radio" value="N" name="discount_available" checked>No</label>
            </div>
        @endif
        </div>
        <div class="form-group">
            <label>Discount Type:</label>
            @if($report->discount_type == '')
                <div class="radio">
                    <label><input type="radio" value="P" name="discount_type">Percentage</label>
                </div>
                <div class="radio">
                    <label><input type="radio" value="F" name="discount_type">Fixed</label>
                </div>
            @elseif($report->discount_type == 'P')
                <div class="radio">
                    <label><input type="radio" value="P" name="discount_type" checked>Percentage</label>
                </div>
                <div class="radio">
                    <label><input type="radio" value="F" name="discount_type">Fixed</label>
                </div>
            @else
                <div class="radio">
                    <label><input type="radio" value="P" name="discount_type">Percentage</label>
                </div>
                <div class="radio">
                    <label><input type="radio" value="F" name="discount_type" checked>Fixed</label>
                </div>
            @endif
        </div>
        <div class="form-group">
            <label>Discount:</label>
            <input type="number" class="form-control" name="discount" value="{{$report->discount}}" required >
        </div>
        <div class="form-group">
            <label>Publish/Upcomming Status:</label>
            @if($report->publish_upcomming_status == 'P')
                <div class="radio">
                    <label><input type="radio" value="P" name="publish_upcomming_status" checked>Published</label>
                </div>
                <div class="radio">
                    <label><input type="radio" value="U" name="publish_upcomming_status">Upcoming</label>
                </div>
                @else
                <div class="radio">
                    <label><input type="radio" value="P" name="publish_upcomming_status">Published</label>
                </div>
                <div class="radio">
                    <label><input type="radio" value="U" name="publish_upcomming_status" checked>Upcoming</label>
                </div>
            @endif
        </div>
        <div class="form-group">
            <label>Status:</label>
            @if($report->status == 'active')
                <div class="radio">
                <label><input type="radio" value="active" name="status" checked>Active</label>
                </div>
                <div class="radio">
                <label><input type="radio" value="de-active" name="status">De-Active</label>
                </div>
                @else
                <div class="radio">
                <label><input type="radio" value="active" name="status">Active</label>
                </div>
                <div class="radio">
                <label><input type="radio" value="de-active" name="status" checked>De-Active</label>
                </div>
            @endif
        </div>
        <div class="form-group">
            <label>Delete Status:</label>
            @if($report->delete_status == 'Y')
                <div class="radio">
                    <label><input type="radio" value="Y" name="delete_status" checked>Yes</label>
                </div>
                <div class="radio">
                    <label><input type="radio" value="N" name="delete_status">No</label>
                </div>
                @else
                <div class="radio">
                    <label><input type="radio" value="Y" name="delete_status">Yes</label>
                </div>
                <div class="radio">
                    <label><input type="radio" value="N" name="delete_status" checked>No</label>
                </div>
            @endif
        </div>
        <div class="form-group">
            <label>Popularity Status:</label>
            @if($report->popularity_status == 'Y')
                <div class="radio">
                    <label><input type="radio" value="Y" name="popularity_status" checked>Yes</label>
                </div>
                <div class="radio">
                    <label><input type="radio" value="N" name="popularity_status">No</label>
                </div>
                @else
                <div class="radio">
                    <label><input type="radio" value="Y" name="popularity_status">Yes</label>
                </div>
                <div class="radio">
                    <label><input type="radio" value="N" name="popularity_status" checked>No</label>
                </div>
            @endif
        </div>
        <div class="form-group">
            <label>Report Code:</label>
            <input type="text" class="form-control" name="report_code" value="{{$report->report_code}}" required >
        </div>
        <input type="submit" value="Save Changes" class="btn btn-primary">
      </form>
</div>

@endsection