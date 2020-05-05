<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.css')}}">
        <title>{{config('app.name')}}</title>

    </head>
    <body>
    	<div>@include('inc.navbar')</div>
    	<div class="container">
    		<br>
        	@yield('content')
    	</div>
        
        <script type="text/javascript" src="{{asset('js/app.js')}}"></script>
    </body>
</html>
