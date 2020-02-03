
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('frontends.partials.head')
</head>
<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NZ4DF6D"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <!--Header-->
    @include('frontends.partials.header')
    <!--Content-->
    <main>
        <div class="body_content">
            @yield('content')
        </div>
    </main>
    <!-- Footer-->
    @include('frontends.partials.footer')
</body>
</html>
