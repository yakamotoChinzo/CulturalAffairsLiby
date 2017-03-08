@extends('layouts.master')

@section('title')
    Admin homepage
@append

@section('styles')

    <!-- Vendor -->
    <link rel="stylesheet" href="{{ asset('css/vendor.min.css') }}" media="screen,projection">
    <!-- Administration -->
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <!-- Material icons -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/icon?family=Material+Icons">

@append

@section('scripts')

    <!-- JQuery 2.x -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <!-- Vendor -->
    <script type="text/javascript" src="{{ asset('js/vendor.min.js') }}"></script>
    <!-- Administration -->
    <script type="text/javascript" src="{{ asset('js/admin.min.js') }}"></script>

@stop


@section('wrapper')

    <div id="wrapper" class="wrapper">

        @include('admin.elements.header')

        @include('admin.elements.sidebar')

        @yield('flash')

        <div class="content">
            
            @yield('content')

        </div>

        @include('admin.elements.footer')

    </div>

@stop