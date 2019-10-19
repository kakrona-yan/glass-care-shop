
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('frontends.partials.head')
</head>
<body>
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
