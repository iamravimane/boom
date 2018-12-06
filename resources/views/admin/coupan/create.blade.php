@extends('layouts.admin')

@section('content')
<div class="container col-md-8 mb-5 border p-3">
    <header class="bg-dark text-light p-2 my-3">
        <h4>Add New Coupan</h4>
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

     <div class="form-group">
          <label>Publisher Name:</label>
          <select name="publisher_id" id="publisher_id" class="form-control">
            <option value="">Select  </option>
            <option value="0">To All Publisher </option>

              @foreach($publishers as $publisher)

              <option value="{{$publisher->id}}"> {{$publisher->name}}</option>
              @endforeach
          </select>
      </div>

    {!! Form::open(['route' => 'coupans.store','files'=>true,
            'enctype' => 'multipart/form-data' ]) !!}
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="form-group">
        {!! Form::label( __('Title'), 'Title:', ['class' => 'control-label']) !!}
        {!! Form::text('title', null,['class' => 'form-control']) !!}
    </div>

   

   

   

    <div class="form-group">
        {!! Form::label( __('code'), 'Code:', ['class' => 'control-label']) !!}
        {!! Form::text('code', null, ['class' => 'form-control']) !!}
    </div>


    <div class="form-group">
        {!! Form::label( __('code text'), 'Code Text:', ['class' => 'control-label']) !!}
        {!! Form::textarea('code_text', null, ['class' => 'form-control textarea']) !!}
    </div>

    <div class="form-group">
        {!! Form::label( __('startdate'), 'Start Date:', ['class' => 'control-label']) !!}
        {!! Form::text('start_date', null,['class' => 'form-control glyphicon glyphicon-calendar datepicker']) !!}
        
       <label class="input-group-addon btn" for="date">
       <span class="fa fa-calendar open-datetimepicker"></span>
    </label> 

    <div class="form-group">
        {!! Form::label( __('enddate'), 'End Date:', ['class' => 'control-label']) !!}
        {!! Form::text('end_date', null,['class' => 'form-control glyphicon glyphicon-calendar datepicker']) !!}
        
       <label class="input-group-addon btn" for="date">
       <span class="fa fa-calendar open-datetimepicker"></span>
    </label>
    
    </div>

     <div class="form-group">
          <label>Type:</label>
          <select name="parent_id" id="parent_id" class="form-control">
              <option></option>
              @foreach($types as $type)
              <option value="{{$type}}"> {{$type}}</option>
              @endforeach
          </select>
      </div>

     
    <div class="form-group">
        {!! Form::label( __('value'), 'Value Off:', ['class' => 'control-label']) !!}
        {!! Form::text('value', null,['class' => 'form-control']) !!}
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