<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">


         <meta name="csrf-token" content="{{ csrf_token() }}">
        <script>window.Laravel = { csrfToken: '{{ csrf_token() }}' }</script>

        <title>Laravel</title>

       
    </head>
    <body>
       <div>
       @section('content')
        <h1>IndexPage</h1>
       @endsection
       </div>
          
    </body>
</html>
