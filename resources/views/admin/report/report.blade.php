@extends('layouts.admin') 
@section('content')
<div class="container mt-1 mb-5">
    <div>
        @if(session()->get('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
        @endif 
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
    <header class="bg-dark text-light p-2 my-3">
        <h4>All Reports</h4>
    </header>
    <table class="table table-bordered">
        <tr>
          <th>ID</th>
          <th>Title</th>
          <th>Status</th>
          <th>Options</th>
        </tr>
        @foreach ($reports as $report)
        <tr>
          <td>{{$report->id}}</td>
          <td>{{$report->report_title}}</td>
          <td>{{$report->status}}</td>
          <td><a href="{{ route('report.edit',$report->id) }}" class="btn btn-sm btn-primary" role="button">Edit</a></td>
        </tr>
        @endforeach
    </table>
    <div class="d-flex justify-content-center">
    {!! $reports->links() !!}
    </div>
</div>
<script>
    setTimeout(function() {
        jQuery('div.alert').fadeOut('slow');
    }, 3000);
    
</script>
@endsection