<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
    	@section('head')

            <title>@yield('title') - {{ config('app.name', 'Boubouh Karim') }}</title>

            @section('meta')
    			<meta name="csrf-token" content="{{ csrf_token() }}">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta charset="UTF-8">
                <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
            @show

            <link rel="icon" type="image/x-icon" href="{{ asset('favicon.png') }}">

            @yield('styles')

    	@show
    </head>

    <body class="@yield('bodyclass')">

    	@section('body')

    		@yield('wrapper')

    		@yield('scripts')

    	@show

    </body>
</html>
