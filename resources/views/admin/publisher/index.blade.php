@extends('layouts.admin')

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
                <h4>All Publishers</h4>
            </header>
        <table class="table table-hover table-bordered">
            <thead>
            <thead>
            <tr>
                <th>{{ __('Name') }}</th>
                <th>{{ __('Description') }}</th>
                <th>{{ __('Action') }}</th>
               
            </tr>
            </thead>
            <tbody>

            @foreach($publisherdetails as $publisherdetail)
                <tr>
                    <td>{{$publisherdetail->name}}</td>
                    <td>
                    {!! html_entity_decode(Str_limit($publisherdetail->description, 50), ENT_QUOTES, 'UTF-8') !!} </td>

                    
                        <td>   {!! Form::open([
            'method' => 'DELETE',
            'route' => ['publishers.destroy', $publisherdetail->id]
        ]); !!}
                            {!! Form::submit( __('Delete'), ['class' => 'btn btn-sm btn-danger m-1', 'onclick' => 'return confirm("Are you sure?")']); !!}

                            {!! Form::close(); !!}


                             {!! Form::open([
            'method' => 'GET',
            'route' =>['publishers.edit', $publisherdetail->id]
        ]); !!}
                            {!! Form::submit( __('EDIT'), ['class' => 'btn btn-sm btn-danger m-1'])!!}

                            {!! Form::close(); !!}


                        </td>
                   
                </tr>
            @endforeach

            </tbody>
        </table>

    </div>
    <script>
        setTimeout(function() {
            jQuery('div.alert').fadeOut('slow');
        }, 3000);
        
    </script>
@stop