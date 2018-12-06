@extends('layouts.admin') 
@section('content')
<div class="container col-md-8 mb-5 border p-3">
  <header class="bg-dark text-light p-2 my-3">
      <h4>Add New Press Release</h4>
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
  <form method="POST" action="{{ route('press.store') }}">
    @csrf
    <div class="form-group">
      <label>Title:</label>
      <input type="text" class="form-control" name="title" required>
    </div>
    <div class="form-group">
      <label>URL:</label>
      <input type="text" class="form-control" name="url" required>
    </div>
    <div class="form-group">
      <label>Content:</label>
      <textarea class="form-control textarea" name="content" required></textarea>
    </div>
    <div class="form-group">
      <label>Description</label>
      <textarea class="form-control textarea" name="description" required></textarea>
    </div>
    <div class="form-group">
      <label>Page Title:</label>
      <input type="text" class="form-control" name="page_title" required>
    </div>
    <div class="form-group">
      <label>Meta Keywords:</label>
      <input type="text" class="form-control" name="meta_keywords" required>
    </div>
    <div class="form-group">
      <label>Meta Description</label>
      <textarea class="form-control" name="meta_description" required></textarea>
    </div>
    <div class="form-group">
      <label>Publish Day:</label>
      <input type="number" class="form-control-sm mr-4" name="publish_day" min="1" max="31" placeholder="day" required>
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
      <input type="number" class="form-control-sm" name="publish_year" min="1980" max="2050" placeholder="year" required>
    </div>
    <input type="submit" value="Submit" class="btn btn-primary">
  </form>
</div>
<br><br>
@endsection