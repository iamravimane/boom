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
  <form method="POST" action="{{ route('news.update',$news->id) }}">
      @method('PATCH')
    @csrf
    <div class="form-group">
      <label>Title:</label>
    <input type="text" class="form-control" name="title" value="{{$news->title}}" required>
    </div>
    <div class="form-group">
      <label>URL:</label>
      <input type="text" class="form-control" name="url" value="{{$news->url}}" required>
    </div>
    <div class="form-group">
      <label>Content:</label>
      <textarea class="form-control textarea" name="content" required>{{$news->content}}</textarea>
    </div>
    <div class="form-group">
      <label>Description</label>
      <textarea class="form-control textarea" name="description" required>{{$news->description}}</textarea>
    </div>
    <div class="form-group">
      <label>Page Title:</label>
      <input type="text" class="form-control" name="page_title" value="{{$news->page_title}}" required>
    </div>
    <div class="form-group">
      <label>Meta Keywords:</label>
      <input type="text" class="form-control" name="meta_keywords" value="{{$news->meta_keywords}}" required>
    </div>
    <div class="form-group">
      <label>Meta Description</label>
      <textarea class="form-control" name="meta_description" required>{{$news->description}}</textarea>
    </div>
    <div class="form-group">
      <label>Publish Day:</label>
      <input type="number" class="form-control-sm mr-4" name="publish_day" min="1" max="31" placeholder="day" value="{{$news->publish_day}}" required>
      <select name="publish_month" id="publish_month" class="form-control-sm mr-4">
          @foreach(array('January','February','March','April','May','June','July','August','September','October','November','December') as $month)
          @if($month === $news->publish_month)
          <option value="{{$month}}" selected> {{$month}}</option>
          @else
          <option value="{{$month}}"> {{$month}}</option>
          @endif
          @endforeach
      </select>
      <input type="number" class="form-control-sm" name="publish_year" value="{{$news->publish_year}}" min="1980" max="2050" placeholder="year" required>
    </div>
    <div class="form-group">
        <label>Active Status(Y/N):</label>
        @if($news->active_status == 'active')
          <div class="radio">
            <label><input type="radio" value="active" name="active_status" checked>Active</label>
          </div>
          <div class="radio">
            <label><input type="radio" value="de-active" name="active_status">De-Active</label>
          </div>
          @else
          <div class="radio">
            <label><input type="radio" value="active" name="active_status">Active</label>
          </div>
          <div class="radio">
            <label><input type="radio" value="de-active" name="active_status" checked>De-Active</label>
          </div>
        @endif
      </div>
    <div class="form-group">
        <label>Delete Status(Y/N):</label>
        @if($news->delete_status == 'Y')
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
        <label>Popularity Status(Y/N):</label>
        @if($news->popularity_status == 'Y')
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
    <input type="submit" value="Submit" class="btn btn-primary w-25">
  </form>
</div>
<br><br>
@endsection