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
    {!! Form::open(['route' => 'banners.store','files'=>true,
            'enctype' => 'multipart/form-data' ]) !!}
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="form-group">
        {!! Form::label( __('bannername'), 'Banner Name:', ['class' => 'control-label']) !!}
        {!! Form::text('title', null,['class' => 'form-control']) !!}
    </div>

   

   

   

    <div class="form-group">
        {!! Form::label( __('bannerdescription'), 'Banner Text:', ['class' => 'control-label']) !!}
        {!! Form::textarea('banner_text', null, ['class' => 'form-control textarea']) !!}
    </div>

    <div class="form-group">
        {!! Form::label( __('bannerdate'), 'Banner Valid Date:', ['class' => 'control-label']) !!}
        {!! Form::text('valid_date', null,['class' => 'form-control glyphicon glyphicon-calendar','id' => 'datepicker']) !!}
        
       <label class="input-group-addon btn" for="date">
       <span class="fa fa-calendar open-datetimepicker"></span>
    </label>
    
    </div>

 

    <div class="form-group">
    {{ Form::label('banner_path', __('Banner Image'), ['class' => 'control-label']) }}
    {!! Form::file('banner_path',  null, ['class' => 'form-control']) !!}
	</div>


	
     


    <div class="form-group">
      
       {!! Form::label( __('Status'), 'Banner status:', ['class' => 'control-label']) !!}
       {!!Form::radio('status','active', ['class' => 'form-control'])!!}Active
        
       {!!Form::radio('status','de-active', ['class' => 'form-control'])!!}De-active

    </div>

  


    {!! Form::submit("Create Banner", ['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}
</div>
@endsection