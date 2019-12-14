<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>@yield('title')</title>
<link rel="icon" href="{{ URL('theme/img/favicon.png') }}" type="image/x-icon"/>
<!-- Fonts -->
<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link href="{{ asset('vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}" rel="stylesheet">
