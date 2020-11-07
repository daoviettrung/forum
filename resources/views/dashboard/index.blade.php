<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title') | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <base href="{{asset('')}}">
    @yield('style')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
    <!-- Navbar -->
    @include('dashboard.layouts.nav')
    <!-- /.navbar -->
    <!-- Main Sidebar Container -->
    @include('dashboard.layouts.main-sidebar')
    <!-- Content Wrapper. Contains page content -->
    @yield('main')
    <!-- /.content-wrapper -->
    @include('dashboard.layouts.footer')
</div>
<!-- ./wrapper -->
@yield('js')
</body>
</html>
