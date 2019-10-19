<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>@yield('title')</title>
<link rel="icon" href="{{ URL('theme/img/favicon.png') }}" type="image/x-icon"/>
<!-- Styles-->
<link rel="stylesheet" type="text/css" href="{{ URL('theme/bootstrap/css/bootstrap.min.css') }}">
<!-- Fonts -->
<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
<link href="{{ asset('theme/css/main.css') }}" rel="stylesheet">
@stack('head-styles')