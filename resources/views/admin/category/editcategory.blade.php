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
    <form method="POST" action="{{ route('category.update',$catdetails->id) }}">
        @method('PATCH')
        @csrf
        <div class="form-group">
          <label>Title:</label>
        <input type="text" class="form-control" name="title" value="{{$catdetails->title}}" required>
        </div>
        <div class="form-group">
            <label>Main Category:</label>
            <select name="parent_id" id="parent_id" class="form-control">
                <option></option>
                @foreach($categories as $category)
                @if($catdetails->parent_id === $category->id)
                <option value="{{$category->id}}" selected> {{$category->title}}</option>
                @else
                <option value="{{$category->id}}"> {{$category->title}}</option>
                @endif
                @endforeach
            </select>
        </div>
        <div class="form-group">
          <label>Description</label>
          <textarea class="form-control textarea" name="description" rows="5" required>{{$catdetails->description}}</textarea>
        </div>
        <div class="form-group">
            <label>Status(Y/N):</label>
            @if($catdetails->status == 'active')
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
              <label>Delete Status(Y/N):</label>
              @if($catdetails->delete_status == 'Y')
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
        <input type="submit" value="Update Category" class="btn btn-primary">
    </form>
</div>
@endsection