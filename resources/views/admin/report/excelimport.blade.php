@extends('layouts.admin') 
@section('content')
<div class="container col-md-8 mb-5 border p-3">
  <div class="mt-1">
      @if(session()->get('success'))
      <div class="alert alert-success">
        <h5><b>{{ session()->get('success') }}</b>Reports uploaded !!</h5>
      </div>
      @endif
    </div>
    <div class="card border border-dark">
      <div class="card-header bg-dark text-light">
        <h3>Upload Excel</h3>
      </div>
      <div class="card-body">
        <form action="{{ route('excelimport')}}" method="POST" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="form-group">
            <input type="file" name="reports" class="form-control">
          </div>
          <input type="submit" value="upload" class="btn btn-primary">
        </form>
      </div>
    </div>
</div>
<script>
    setTimeout(function() {
        jQuery('div.alert').fadeOut('slow');
    }, 3000);
    
</script>
@endsection
