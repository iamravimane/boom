@extends('layouts.admin')
@section('heading')
    <h1>{{ __('All Banner') }}</h1>
@stop
@section('content')
    <div class="container mt-1 mb-5 currenttask">
        <div>
            @if(session()->get('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
            @endif 
        </div>
            <header class="bg-dark text-light p-2 my-3">
                <h4>All Banners</h4>
            </header>

            @if(!$bannerdetails->isEmpty())
        <table class="table table-hover table-bordered"  >
            <thead>
            <thead>
            <tr>
                <th>{{ __('Title') }}</th>
                <th>{{ __('Banner Text') }}</th>
                 <th>{{ __('Banner Image') }}</th>
                  <th>{{ __('Valid Date') }}</th>
                  <th>{{ __('Banner Status') }}</th>
                <th>{{ __('Action') }}</th>
               
            </tr>
            </thead>
            <tbody>

            @foreach($bannerdetails as $bannerdetail)
                <tr>
                    <td>{{$bannerdetail->title}}</td>
                    <td>
                    {!! html_entity_decode(Str_limit($bannerdetail->banner_text, 50), ENT_QUOTES, 'UTF-8') !!} </td>

                    
                        <td> 
                            
                   <img src="{{ url('bannerimages/'.$bannerdetail->title .'/'. $bannerdetail->banner_path) }}" class="img-rounded" alt="{{$bannerdetail->title}}" width="200" height="150">

                    
                        </td>
                         <td>{{$bannerdetail->valid_date }}</td>
                        <td>{{$bannerdetail->status}}</td>
                        <td>

                          {!! Form::open([
            'method' => 'DELETE',
            'route' => ['banners.destroy', $bannerdetail->id]
        ]); !!}
                            {!! Form::submit( __('Delete'), ['class' => 'btn btn-sm btn-danger m-1', 'onclick' => 'return confirm("Are you sure?")']); !!}

                            {!! Form::close(); !!}


                             {!! Form::open([
            'method' => 'GET',
            'route' =>['banners.edit', $bannerdetail->id]
        ]); !!}
                            {!! Form::submit( __('EDIT'), ['class' => 'btn btn-sm btn-danger m-1'])!!}

                            {!! Form::close(); !!}


                        </td>
                   
                </tr>
            @endforeach

            </tbody>
        </table>
        @else
        NO record Found
        @endif

    </div>
         <table class="table table-hover" id="banner-table">
        <thead>
        <tr>
                <th>{{ __('Id') }}</th>
                <th>{{ __('Title') }}</th>
                <th>{{ __('Banner Text') }}</th>
                <th>{{ __('Valid Date') }}</th>
                <th>{{ __('Banner Status') }}</th>
                
            

        </tr>
        </thead>
    </table>

    <script>
        setTimeout(function() {
            jQuery('div.alert').fadeOut('slow');
        }, 3000);
        
    </script>

 

@stop




