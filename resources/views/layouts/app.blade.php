<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- bootstrap 3.0.2 -->
    <link href="{{ asset('Superhero/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
{{--<link href="{{ asset('AdminLTE/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>--}}

<!-- font Awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
{{--    <link href="{{ asset('AdminLTE/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css"/>--}}

<!-- Ionicons -->
    <link href="{{ asset('AdminLTE/css/ionicons.min.css') }}" rel="stylesheet" type="text/css"/>

@yield('styles')

<!-- Theme style -->
    <link href="{{ asset('AdminLTE/css/AdminLTE.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('AdminLTE/css/AdminLTE.custom.css') }}" rel="stylesheet" type="text/css"/>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

</head>
<body class="skin-black">
<!-- header logo: style can be found in header.less -->
@include('layouts.pvNavBar')

<div class="wrapper row-offcanvas row-offcanvas-left">

@include('layouts.pvSidebar')

<!-- Right side column. Contains the navbar and content of the page -->
    <aside class="right-side">

    @yield('content')

    <!-- echo the controller name as 'HomeController' -->
{{--        {{ dd(Route::currentRouteAction()) }}--}}
    </aside><!-- /.right-side -->
</div><!-- ./wrapper -->

<!-- jQuery 2.0.2 -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="{{ asset('AdminLTE/js/bootstrap.min.js') }}" type="text/javascript"></script>

@yield('scripts')

<!-- AdminLTE App -->
<script src="{{ asset('AdminLTE/js/AdminLTE/app.js') }}" type="text/javascript"></script>


</body>
</html>
