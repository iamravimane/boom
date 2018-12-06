@extends('layouts.admin') 
@section('content')
<div class="container col-md-8 mb-5 border p-3">
  <header class="bg-dark text-light p-2 my-3">
      <h4>Add New Category</h4>
  </header>
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
  <form method="POST" action="{{ route('category.store') }}">
      @csrf
      <div class="form-group">
        <label>Title:</label>
        <input type="text" class="form-control" name="title" required>
      </div>
      <div class="form-group">
          <label>Main Category:</label>
          <select name="parent_id" id="parent_id" class="form-control">
              <option></option>
              @foreach($categories as $category)
              <option value="{{$category->id}}"> {{$category->title}}</option>
              @endforeach
          </select>
      </div>
      <div class="form-group">
        <label>Description</label>
        <textarea class="form-control textarea" name="description" rows="5" required></textarea>
      </div>
      <input type="submit" value="Add Category" class="btn btn-primary">
  </form>
</div>
@endsection