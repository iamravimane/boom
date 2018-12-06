@extends('layouts.admin') 
@section('content')
<div class="container col-md-8 mb-5 border p-3">
    <form method="POST" action="{{ route('cms.update',$cms->id) }}">
        @method('PATCH')
        @csrf
        <div class="form-group">
          <label>Title:</label>
        <input type="text" class="form-control" name="title" value="{{$cms->title}}" required>
        </div>
        <div class="form-group">
          <label>Content:</label>
          <textarea class="form-control textarea" name="content" rows="5" required>{{$cms->content}}</textarea>
        </div>
        <div class="form-group">
          <label>Page Title:</label>
          <input type="text" class="form-control" name="page_title" value="{{$cms->page_title}}">
        </div>
        <div class="form-group">
          <label>Meta Keywords:</label>
          <textarea class="form-control" name="meta_keywords">{{$cms->meta_keywords}}</textarea>
        </div>
        <div class="form-group">
          <label>Meta Description:</label>
          <textarea class="form-control " name="meta_description">{{$cms->meta_description}}</textarea>
        </div>
        <input type="submit" value="Update" class="btn btn-primary">
      </form>
</div>

@endsection