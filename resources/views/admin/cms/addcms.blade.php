@extends('layouts.admin') 
@section('content')
<div class="container col-md-8 mb-5 border p-3">
  <header class="bg-dark text-light p-2 my-3">
      <h4>Add New CMS</h4>
  </header>
  <form method="POST" action="{{ route('cms.store') }}">
    @csrf
    <div class="form-group">
      <label>Title:</label>
      <input type="text" class="form-control" name="title" required>
    </div>
    <div class="form-group">
      <label>Content:</label>
      <textarea class="form-control textarea" name="content" rows="5" required></textarea>
    </div>
    <div class="form-group">
      <label>Page Title:</label>
      <input type="text" class="form-control" name="page_title">
    </div>
    <div class="form-group">
      <label>Meta Keywords:</label>
      <textarea class="form-control" name="meta_keywords"></textarea>
    </div>
    <div class="form-group">
      <label>Meta Description:</label>
      <textarea class="form-control " name="meta_description"></textarea>
    </div>
    <input type="submit" value="Submit" class="btn btn-primary">
  </form>
</div>

@endsection