@extends('layouts.admin') 
@section('content')
<div class="container mt-1 mb-5">
    <div>
        @if(session()->get('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
        @endif 
    </div>
    <header class="bg-dark text-light p-2 my-3">
        <h4>All Categories</h4>
    </header>
    <table class="table table-bordered">
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Status</th>
            <th>Options</th>
        </tr>
        @foreach ($categories as $category)
        <tr>
            <td>{{$category->id}}</td>
            <td>{{$category->title}}</td>
            <td>{{$category->status}}</td>
            <td><a href="{{ route('category.edit',$category->id) }}" class="btn btn-sm btn-primary" role="button">Edit</a></td>
        </tr>
        @endforeach
    </table>
</div>
<script>
    setTimeout(function() {
        jQuery('div.alert').fadeOut('slow');
    }, 3000);
    
</script>
<br><br>
@endsection