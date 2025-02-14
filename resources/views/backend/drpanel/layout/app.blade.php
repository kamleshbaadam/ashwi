<!DOCTYPE html>
<html>
<!-- Mirrored from light.pinsupreme.com/apps_bank.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 20 Jun 2020 08:54:36 GMT -->

<head>
    <meta charset="utf-8">
    @stack('title')
    <meta content="ie=edge" http-equiv="x-ua-compatible">
    <meta content="template language" name="keywords">
    <meta content="Tamerlan Soziev" name="author">
    <meta content="Admin dashboard html template" name="description">
    <meta content="width=device-width,initial-scale=1" name="viewport">
    <link href="{{ asset('backend/drpanel/favicon.png') }}" rel="shortcut icon">
    <link href="{{ asset('backend/drpanel/apple-touch-icon.png') }}" rel="apple-touch-icon">
    <link href="{{ asset('backend/drpanel/fast.fonts.net/cssapi/487b73f1-c2d1-43db-8526-db577e4c822b.html') }}"
        rel="stylesheet">
    <link href="{{ asset('backend/drpanel/bower_components/select2/dist/css/select2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/drpanel/bower_components/bootstrap-daterangepicker/daterangepicker.css') }}"
        rel="stylesheet">
    <link href="{{ asset('backend/drpanel/bower_components/dropzone/dist/dropzone.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/drpanel/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}"
        rel="stylesheet">
    <link href="{{ asset('backend/drpanel/bower_components/fullcalendar/dist/fullcalendar.min.css') }}"
        rel="stylesheet">
    <link href="{{ asset('backend/drpanel/bower_components/perfect-scrollbar/css/perfect-scrollbar.min.css') }}"
        rel="stylesheet">
    <link href="{{ asset('backend/drpanel/bower_components/slick-carousel/slick/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/drpanel/css/main5739.css?version=4.5.0') }}" rel="stylesheet">
</head>

<body class="menu-position-top full-screen with-content-panel">
 <!-- START: Header -->
    @include('backend.drpanel.layout.header')

    <section class="content">
        @yield('content')
    </section>

    <script src="{{ asset('backend/drpanel/bower_components/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('backend/drpanel/bower_components/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('backend/drpanel/bower_components/moment/moment.js') }}"></script>
    <script src="{{ asset('backend/drpanel/bower_components/chart.js/dist/Chart.min.js') }}"></script>
    <script src="{{ asset('backend/drpanel/bower_components/select2/dist/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('backend/drpanel/bower_components/jquery-bar-rating/dist/jquery.barrating.min.js') }}">
    </script>
    <script src="{{ asset('backend/drpanel/bower_components/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('backend/drpanel/bower_components/bootstrap-validator/dist/validator.min.js') }}"></script>
    <script src="{{ asset('backend/drpanel/bower_components/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ asset('backend/drpanel/bower_components/ion.rangeSlider/js/ion.rangeSlider.min.js') }}"></script>
    <script src="{{ asset('backend/drpanel/bower_components/dropzone/dist/dropzone.js') }}"></script>
    <script src="{{ asset('backend/drpanel/bower_components/editable-table/mindmup-editabletable.js') }}"></script>
    <script src="{{ asset('backend/drpanel/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('backend/drpanel/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}">
    </script>
    <script src="{{ asset('backend/drpanel/bower_components/fullcalendar/dist/fullcalendar.min.js') }}"></script>
    <script src="{{ asset('backend/drpanel/bower_components/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js') }}">
    </script>
    <script src="{{ asset('backend/drpanel/bower_components/tether/dist/js/tether.min.js') }}"></script>
    <script src="{{ asset('backend/drpanel/bower_components/slick-carousel/slick/slick.min.js') }}"></script>
    <script src="{{ asset('backend/drpanel/bower_components/bootstrap/js/dist/util.js') }}"></script>
    <script src="{{ asset('backend/drpanel/bower_components/bootstrap/js/dist/alert.js') }}"></script>
    <script src="{{ asset('backend/drpanel/bower_components/bootstrap/js/dist/button.js') }}"></script>
    <script src="{{ asset('backend/drpanel/bower_components/bootstrap/js/dist/carousel.js') }}"></script>
    <script src="{{ asset('backend/drpanel/bower_components/bootstrap/js/dist/collapse.js') }}"></script>
    <script src="{{ asset('backend/drpanel/bower_components/bootstrap/js/dist/dropdown.js') }}"></script>
    <script src="{{ asset('backend/drpanel/bower_components/bootstrap/js/dist/modal.js') }}"></script>
    <script src="{{ asset('backend/drpanel/bower_components/bootstrap/js/dist/tab.js') }}"></script>
    <script src="{{ asset('backend/drpanel/bower_components/bootstrap/js/dist/tooltip.js') }}"></script>
    <script src="{{ asset('backend/drpanel/bower_components/bootstrap/js/dist/popover.js') }}"></script>
    <script src="{{ asset('backend/drpanel/js/demo_customizer5739.js?version=4.5.0') }}"></script>
    <script src="{{ asset('backend/drpanel/js/main5739.js?version=4.5.0') }}"></script>
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date(); a = s.createElement(o),
                m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '../www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-42863888-9', 'auto');
        ga('send', 'pageview');
    </script>

</body>
<!-- Mirrored from light.pinsupreme.com/apps_bank.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 20 Jun 2020 08:54:44 GMT -->

</html>