@extends('layouts.admin')

@section('content')
<div class="container col-md-8 mb-5 border p-3">
    <header class="bg-dark text-light p-2 my-3">
        <h4>Add New Publisher</h4>
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
    {!! Form::open(['route' => 'publishers.store','files'=>true,
            'enctype' => 'multipart/form-data' ]) !!}
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="form-group">
        {!! Form::label( __('publishername'), 'Publisher Name:', ['class' => 'control-label']) !!}
        {!! Form::text('name', null,['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label( __('publisherurl'), 'Publisher Url:', ['class' => 'control-label']) !!}
        {!! Form::text('url', null,['class' => 'form-control']) !!}
    </div>

   

   

    <div class="form-group">
        {!! Form::label( __('publisherdescription'), 'Publisher Description:', ['class' => 'control-label']) !!}
        {!! Form::textarea('description', null, ['class' => 'form-control textarea']) !!}
    </div>

     <div class="form-group">
        {!! Form::label( __('Address'), 'Publisher Address:', ['class' => 'control-label']) !!}
        {!! Form::textarea('address', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
    {{ Form::label('logo_path', __('Logo Image'), ['class' => 'control-label']) }}
    {!! Form::file('logo_path',  null, ['class' => 'form-control']) !!}
	</div>


	 <div class="form-group">
        {!! Form::label( __('page title'), 'Page Title:', ['class' => 'control-label']) !!}
        {!! Form::text('page_title', null,['class' => 'form-control']) !!}
    </div>

     <div class="form-group">
        {!! Form::label( __('metakeyword'), 'Meta Keyword:', ['class' => 'control-label']) !!}
        {!! Form::text('meta_keyword', null,['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label( __('metadescription'), 'Meta Description:', ['class' => 'control-label']) !!}
        {!! Form::text('meta_description', null,['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
      
       {!! Form::label( __('Status'), 'Publishers status:', ['class' => 'control-label']) !!}
       {!!Form::radio('status','active', ['class' => 'form-control'])!!}
        
       {!!Form::radio('status','de-active', ['class' => 'form-control'])!!}

    </div>

    <div class="form-group">
      
       {!! Form::label( __('Popularity'), 'Popularity status:', ['class' => 'control-label']) !!}
       {!!Form::radio('popularity_status','Y', ['class' => 'form-control'])!!}
        
       {!!Form::radio('popularity_status','N', ['class' => 'form-control'])!!}

    </div>


    {!! Form::submit("Create Pubhisher", ['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}
</div>
@endsection