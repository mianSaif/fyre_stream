<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    @yield('title')
    <!-- General CSS Files -->
    <link rel="stylesheet" href="web_admin/css/app.min.css">
    <!-- Template CSS -->
    <link rel="stylesheet" href="web_admin/css/style.css">
    <link rel="stylesheet" href="web_admin/bundles/pretty-checkbox/pretty-checkbox.min.css">
    <link rel="stylesheet" href="web_admin/css/components.css">
    <!-- Custom style CSS -->
    <link rel="stylesheet" href="web_admin/css/custom.css">
    <link rel="stylesheet" href="web_admin/css/own.css">
    <link rel='shortcut icon' type='image/x-icon' href='web_admin/img/favicon.ico' />
</head>

<body>
<div class="loader"></div>
<div id="app">
    <div class="main-wrapper main-wrapper-1">
    {{--    Header content--}}
        @include('admin.partials.header')

    {{--    Left Sidebar content--}}

        @include('admin.partials.leftbar')

        <!-- Main Content -->
        @yield('content')

    </div>
{{--    Footer content--}}
    @include('admin.partials.footer')
</div>
</div>
<!-- General JS Scripts -->
<script src="web_admin/js/app.min.js"></script>
<!-- JS Libraies -->
<script src="web_admin/bundles/apexcharts/apexcharts.min.js"></script>
<!-- Page Specific JS File -->
<script src="web_admin/js/page/index.js"></script>
<!-- Template JS File -->
<script src="web_admin/js/scripts.js"></script>
<!-- Custom JS File -->
<script src="web_admin/js/custom.js"></script>
</body>

</html>
