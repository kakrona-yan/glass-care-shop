<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>@yield('title')</title>
<meta name="google-site-verification" content="_LpJNNvu5JnU2hACuLGALeiNwcJb79dUqejVDKkD6v0" />
@if(Route::currentRouteName() == 'home')
<meta property="og:title" content="swipe shop | swipe-shop.com"/>
@else 
<meta property="og:title" content="@yield('ogTitle')"/>
<meta property="og:url" content="@yield('ogUrl')" />
@endif
<meta property="og:description" content="swipe shope | swipe-shop.com is your source for iPhone, iPad, AirPods, Mac, Samsung, Pixel and Apple Watch accessories buying guides. Don&#039;t miss out on product news, deals, reviews, tips or how-tos. Learn about the protective cases, screen protectors, Glass screen protector premium,  Screen protector, News & Events, Tips & Guides, charging and the other gear you love!" />
<meta property="og:type" content="website" />
<meta property="og:url" content="https://swipe-shop.com/" />
<meta property="og:image" content="https://swipe-shop.com/theme/img/logo.png"/>
<meta property="og:site_name" content="swipe shop | swipe-shop.com" />
<link rel="icon" href="{{ URL('theme/img/favicon.png') }}" type="image/x-icon"/>
<meta name="robots" content="max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
<!-- Fonts -->
<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
<!-- Styles-->
<link rel="stylesheet" type="text/css" href="{{ URL('theme/bootstrap/css/bootstrap.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL('theme/css/style-home.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL('theme/css/style-res-home.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL('theme/css/style-fix-nav.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('theme/css/main.css') }}">
@stack('head-styles')
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-156482170-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-156482170-1');
</script>