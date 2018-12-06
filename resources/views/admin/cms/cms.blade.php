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
        <h4>All CMS</h4>
    </header>
    <table class="table table-bordered">
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Options</th>
        </tr>
        @foreach ($cmspages as $cms)
        <tr>
            <td>{{$cms->id}}</td>
            <td width="70%">{{$cms->title}}</td>
            <td>
              <a href="{{ route('cms.edit',$cms->id) }}" class="btn btn-sm btn-primary" role="button">Edit</a>
            </td>
        </tr>
        @endforeach
    </table>
</div>
<script>
  setTimeout(function() {
      jQuery('div.alert').fadeOut('slow');
  }, 3000);
  
</script>
@endsection