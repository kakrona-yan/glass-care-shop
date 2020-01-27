<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>@yield('title')</title>
<meta name="google-site-verification" content="_LpJNNvu5JnU2hACuLGALeiNwcJb79dUqejVDKkD6v0" />
<meta property="og:title" content="Swipe & Shop & Blog and News About Shop look contact us our place"/>
<meta property="og:description" content="Swipe & Shop & blog is your source for iPhone, iPad, AirPods, Mac, Samsung, Pixel and Apple Watch accessories buying guides. Don&#039;t miss out on product news, deals, reviews, tips or how-tos. Learn about the protective cases, screen protectors, Glass screen protector premium,  Screen protector, News & Events, Tips & Guides, charging and the other gear you love!" />
<meta property="og:type" content="website" />
<meta property="og:description" content="The Swipe shop & blog is your source for iPhone, iPad, AirPods, Mac, Samsung, Pixel and Apple Watch accessories buying guides. Don&#039;t miss out on product news, deals, reviews, tips or how-tos. Learn about the protective cases, screen protectors, charging and the other gear you love!" />
<meta property="og:url" content="https://swipe-shop.com/" />
<meta property="og:image" content="https://swipe-shop.com/theme/img/logo.png"/>
<meta property="og:site_name" content="Swipe & Shop" />
<link rel="icon" href="{{ URL('theme/img/favicon.png') }}" type="image/x-icon"/>
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