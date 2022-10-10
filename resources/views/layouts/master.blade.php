<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    @include('dashboard_fan.head')

</head>

<body class="fix-sidebar fix-header">
    <!-- Preloader -->
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <div id="wrapper">
        <!-- Navigation -->
        @include('dashboard_fan.navbar')

        <!-- Left navbar-header -->
        @include('dashboard_fan.sidebar')

        <!-- Left navbar-header end -->
        <!-- Page Content -->
        @yield('content')

        @include('dashboard_fan.footer')

</body>

</html>
