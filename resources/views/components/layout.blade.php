<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <link href="{{ asset('https://fonts.googleapis.com/icon?family=Material+Icons') }}" rel="stylesheet">
    <link href="{{ asset('/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/css/select2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/css/style.css') }}" rel="stylesheet">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Dr Show') }}</title>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <style type="text/css">
        i {
            font-size: 50px;
        }
    </style>

</head>

<body>

  {{ $slot }}


    {{-- <div class="sidebar-overlay" data-reff=""></div>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/select2.min.js"></script>
    <script src="assets/js/moment.min.js"></script>
    <script src="assets/js/bootstrap-datetimepicker.min.js"></script>
    <script src="assets/js/app.js"></script> --}}

    <div class="sidebar-overlay" data-reff=""></div>
    <script src="/assets/js/jquery-3.2.1.min.js"></script>
    <script src="/assets/js/popper.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="/assets/js/jquery.slimscroll.js"></script>
    <script src="/assets/js/select2.min.js"></script>
    <script src="/assets/js/moment.min.js"></script>
    <script src="/assets/js/bootstrap-datetimepicker.min.js"></script>
    <script src="/assets/js/Chart.bundle.js"></script>
    <script src="/assets/js/chart.js"></script>
    <script src="/assets/js/app.js"></script>

    <script>
        $(function () {
            $('#datetimepicker3').datetimepicker({
                format: 'LT'
            });
            $('#datetimepicker4').datetimepicker({
                format: 'LT'
            });
        });
    </script>
</body>

</html>
