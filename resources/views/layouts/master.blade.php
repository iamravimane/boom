<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<body>
<div class="" id="app">

    <header class="row">
        @include('includes.header')
    </header>

    <div>
    	@include('includes.searchbar')
    	@include('includes.breadcrumb')
        
        @yield('content')

    </div>

    <footer class="row">
        @include('includes.footer')
    </footer>

</div>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>