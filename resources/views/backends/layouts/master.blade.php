
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('backends.partials.head')
</head>
<body id="page-top">
    <div id="master">
        <div id="wrapper">
            <!--slide-bar-->
            @yield('menu', Menu::render())
            <!--/slide-bar-->
            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">
                <!-- Main Content -->
                <div id="content" class="bg-light">
                    <!--header-->
                    @include('backends.partials.header')
                    <!--/header-->
                    <!-- Begin Page Content -->
                    <div class="container-fluid">

                        @include('backends.partials.flash')

                        @yield('content')

                    </div>
                    <!-- /.container-fluid -->
                </div>
                <!--footer-->
                @include('backends.partials.footer')
                <!--/footer-->
            </div>
        </div>
    </div>

    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

</body>
</html>
