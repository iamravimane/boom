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
        <h4>All Press Release</h4>
    </header>
    <table class="table table-bordered">
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Active_status</th>
            <th>Popularity</th>
            <th>Options</th>
        </tr>
        @foreach ($pressRelease as $press)
        <tr>
            <td>{{$press->id}}</td>
            <td>{{$press->title}}</td>
            <td>{{$press->active_status}}</td>
            <td>{{$press->popularity_status}}</td>
            <td><a href="{{ route('press.edit',$press->id) }}" class="btn btn-sm btn-primary" role="button">Edit</a></td>
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