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

   <!--  {!! Form::open(['route' => 'publishers.store','files'=>true,
            'enctype' => 'multipart/form-data' ]) !!} -->

            {!! Form::model($publisherdetails,[ 'method' => 'PATCH',
            'route' => ['publishers.update', $publisherdetails['id']],'files'=>true,
            'enctype' => 'multipart/form-data' ]) !!}
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
     <input type="hidden" name="logo_old" value="{{ isset($publisherdetails['logo']) ? $publisherdetails['logo'] : null }}">
    <div class="form-group">
        {!! Form::label( __('publisherdetailsname'), 'publisherdetails Name:', ['class' => 'control-label']) !!}
        {!! Form::text('name', isset($publisherdetails['name']) ? $publisherdetails['name'] : null,['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label( __('publisherdetailsurl'), 'publisherdetails Url:', ['class' => 'control-label']) !!}
        {!! Form::text('url', isset($publisherdetails['url'])?$publisherdetails['url']:null,['class' => 'form-control']) !!}
    </div>

   

   

    <div class="form-group">
        {!! Form::label( __('publisherdetailsdescription'), 'publisherdetails Description:', ['class' => 'control-label']) !!}
        {!! Form::textarea('description', isset($publisherdetails['description'])?$publisherdetails['description']:null, ['class' => 'form-control textarea']) !!}
    </div>

     <div class="form-group">
        {!! Form::label( __('Address'), 'publisherdetails Address:', ['class' => 'control-label']) !!}
        {!! Form::textarea('address', isset($publisherdetails['address'])?$publisherdetails['address']:null, ['class' => 'form-control']) !!}
    </div>

     @if($publisherdetails['logo'])
        <img src="{{ url('publisherimages/'.$publisherdetails['name'] .'/'. $publisherdetails['logo']) }}">
        

        <!-- <img class="card-img-top" src="{{url('public/publisherimages/'.$publisherdetails['name'] .'/'. $publisherdetails['logo'])}}"> -->

        <!-- <img src="{{asset('publisherimages/'.$publisherdetails['name'] .'/'. $publisherdetails['logo'])}}" alt="some thing"> -->
    @else
            <p>No image found</p>
    @endif
    <div class="form-group">
    {{ Form::label('logo_path', __('Logo Image'), ['class' => 'control-label']) }}
    {!! Form::file('logo_path', null, ['class' => 'form-control']) !!}
	</div>


	 <div class="form-group">
        {!! Form::label( __('page title'), 'Page Title:', ['class' => 'control-label']) !!}
        {!! Form::text('page_title',  isset($publisherdetails['page_title'])?$publisherdetails['page_title']:null,['class' => 'form-control']) !!}
    </div>

     <div class="form-group">
        {!! Form::label( __('metakeyword'), 'Meta Keyword:', ['class' => 'control-label']) !!}
        {!! Form::text('meta_keyword',   isset($publisherdetails['meta_keyword'])?$publisherdetails['meta_keyword']:null,['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label( __('metadescription'), 'Meta Description:', ['class' => 'control-label']) !!}
        {!! Form::text('meta_description',   isset($publisherdetails['meta_description'])?$publisherdetails['meta_description']:null,['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
      
       {!! Form::label( __('Status'), 'publisherdetailss status:', ['class' => 'control-label']) !!}
       {!!Form::radio('status','active', ['class' => 'form-control'])!!}
        
       {!!Form::radio('status','de-active', ['class' => 'form-control'])!!}

    </div>

    <div class="form-group">
      
       {!! Form::label( __('Popularity'), 'Popularity status:', ['class' => 'control-label']) !!}
       {!!Form::radio('popularity_status','Y', ['class' => 'form-control'])!!}
        
       {!!Form::radio('popularity_status','N', ['class' => 'form-control'])!!}

    </div>


    {!! Form::submit("Update Pubhisher", ['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}
</div>
@endsection