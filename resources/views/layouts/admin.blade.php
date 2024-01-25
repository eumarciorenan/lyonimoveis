<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">

    <title>Administração</title>

    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="icon" href="images/fevicon.png" type="image/png" />

    <link rel="stylesheet" href="{{ asset ('assets/theme_admin/css/bootstrap.min.css')}}" />

    <link rel="stylesheet" href="{{ asset ('assets/theme_admin/style.css')}}" />

    <link rel="stylesheet" href="{{ asset ('assets/theme_admin/css/responsive.css')}}" />

    <link rel="stylesheet" href="{{ asset ('assets/theme_admin/css/colors.css')}}" />

    <link rel="stylesheet" href="{{ asset ('assets/theme_admin/css/bootstrap-select.css')}}" />

    <link rel="stylesheet" href="{{ asset ('assets/theme_admin/css/perfect-scrollbar.css')}}" />

    <link rel="stylesheet" href="{{ asset ('assets/theme_admin/css/custom.css')}}" />

</head>

<body class="dashboard dashboard_1">
    <div class="full_container">
        <div class="inner_container">

            @include('layouts.admin_parts.nav_sidebar')

            <div id="content">

                @include('layouts.admin_parts.topbar')

                <div class="midde_cont">
                    <div class="container-fluid">

                        @yield('content')

                    </div>

                    @include('layouts.admin_parts.topbar')

                </div>

            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="{{ asset ('assets/theme_admin/js/jquery.min.js')}}"></script>
    <script src="{{ asset ('assets/theme_admin/js/popper.min.js')}}"></script>
    <script src="{{ asset ('assets/theme_admin/js/bootstrap.min.js')}}"></script>
    <!-- wow animation -->
    <script src="{{ asset ('assets/theme_admin/js/animate.js')}}"></script>
    <!-- select country -->
    <script src="{{ asset ('assets/theme_admin/js/bootstrap-select.js')}}"></script>
    <!-- owl carousel -->
    <script src="{{ asset ('assets/theme_admin/js/owl.carousel.js')}}"></script>
    <!-- chart js -->
    <script src="{{ asset ('assets/theme_admin/js/Chart.min.js')}}"></script>
    <script src="{{ asset ('assets/theme_admin/js/Chart.bundle.min.js')}}"></script>
    <script src="{{ asset ('assets/theme_admin/js/utils.js')}}"></script>
    <script src="{{ asset ('assets/theme_admin/js/analyser.js')}}"></script>
    <!-- nice scrollbar -->
    <script src="{{ asset ('assets/theme_admin/js/perfect-scrollbar.min.js')}}"></script>
    <script>
        var ps = new PerfectScrollbar('#sidebar');
    </script>
    <!-- custom js -->
    <script src="{{ asset ('assets/theme_admin/js/custom.js')}}"></script>
    <script src="{{ asset ('assets/theme_admin/js/chart_custom_style1.js')}}"></script>
</body>

</html>
