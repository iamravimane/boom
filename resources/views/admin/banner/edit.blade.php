@extends('layouts.admin')

@section('content')
<div class="container col-md-8 mb-5 border p-3">
    <header class="bg-dark text-light p-2 my-3">
        <h4>Add New Banner</h4>
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
    {!! Form::model($bannerdetails,[ 'method' => 'PATCH',
            'route' => ['banners.update', $bannerdetails['id']],'files'=>true,
            'enctype' => 'multipart/form-data' ]) !!}
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="form-group">
        {!! Form::label( __('bannername'), 'Banner Name:', ['class' => 'control-label']) !!}
        {!! Form::text('title',  isset($bannerdetails['title']) ? $bannerdetails['title'] : null,['class' => 'form-control']) !!}
    </div>

 

    <div class="form-group">
        {!! Form::label( __('bannerdescription'), 'Banner Text:', ['class' => 'control-label']) !!}
        {!! Form::textarea('banner_text',  isset($bannerdetails['banner_text']) ? $bannerdetails['banner_text'] : null, ['class' => 'form-control textarea']) !!}
    </div>

    <div class="form-group">
        {!! Form::label( __('bannerdate'), 'Banner Valid Date:', ['class' => 'control-label']) !!}
        {!! Form::text('valid_date',   isset($bannerdetails['valid_date']) ? $bannerdetails['valid_date'] : null,['class' => 'form-control','id' => 'datepicker']) !!}
        <label class="input-group-addon btn" for="date">
       <span class="fa fa-calendar open-datetimepicker"></span>
    </label>
    </div>

 


    <div class="form-group">
        @if($bannerdetails['banner_path'])
        <img src="{{ url('bannerimages/'.$bannerdetails['title'] .'/'. $bannerdetails['banner_path']) }}">
        

       
    @else
            <p>No image found</p>
    @endif

    {{ Form::label('banner_path', __('Banner Image'), ['class' => 'control-label']) }}
    {!! Form::file('banner_path',  null, ['class' => 'form-control']) !!}

     <input type="hidden" name="banner_path_old" value="{{ isset($bannerdetails['banner_path']) ? $bannerdetails['banner_path'] : null }}">
    </div>


    
     


    <div class="form-group">
      
       {!! Form::label( __('Status'), 'Banner status:', ['class' => 'control-label']) !!}
       {!!Form::radio('status','active', ['class' => 'form-control'])!!}Active
        
       {!!Form::radio('status','de-active', ['class' => 'form-control'])!!}De-active

    </div>

  


    {!! Form::submit("Update Banner", ['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}
</div>
@endsection