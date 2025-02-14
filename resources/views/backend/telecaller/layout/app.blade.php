<!DOCTYPE html>
<html>
<!-- Mirrored from light.pinsupreme.com/apps_bank.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 20 Jun 2020 08:54:36 GMT -->

<head>
    <meta charset="utf-8">
    @stack('title')
    <title>Admin Dashboard HTML Template</title>
    <meta content="ie=edge" http-equiv="x-ua-compatible">
    <meta content="template language" name="keywords">
    <meta content="Tamerlan Soziev" name="author">
    <meta content="Admin dashboard html template" name="description">
    <meta content="width=device-width,initial-scale=1" name="viewport">
    <link href="{{ asset('backend/telecaller/favicon.png') }}" rel="shortcut icon">
    <link href="{{ asset('backend/telecaller/apple-touch-icon.png') }}" rel="apple-touch-icon">
    <link href="{{ asset('backend/telecaller/../fast.fonts.net/cssapi/487b73f1-c2d1-43db-8526-db577e4c822b.html') }}"
        rel="stylesheet">
    <link href="{{ asset('backend/telecaller/bower_components/select2/dist/css/select2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/telecaller/bower_components/bootstrap-daterangepicker/daterangepicker.css') }}"
        rel="stylesheet">
    <link href="{{ asset('backend/telecaller/bower_components/dropzone/dist/dropzone.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/telecaller/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}"
        rel="stylesheet">
    <link href="{{ asset('backend/telecaller/bower_components/fullcalendar/dist/fullcalendar.min.css') }}"
        rel="stylesheet">
    <link href="{{ asset('backend/telecaller/bower_components/perfect-scrollbar/css/perfect-scrollbar.min.css') }}"
        rel="stylesheet">
    <link href="{{ asset('backend/telecaller/bower_components/slick-carousel/slick/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/telecaller/css/main5739.css?version=4.5.0') }}" rel="stylesheet">
    <link href="{{ asset('backend/datatables.net-bs/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
    <style>
        .tooltip1 {
            margin-top: 1rem;
            padding-top: 1rem;
            position: relative;
        }

        .tooltip2 {
            margin-top: 1rem;
            padding-top: 1rem;
            position: sticky;
        }

        .tooltip-inner {
            background-color: #e2e4e6;
            color: #000;
            max-width: 500px !important;
            padding: 1rem;
        }

        td {
            max-width: 120px !important;
            max-height: 120px !important;
            /* user-select: all !important;*/
            -ms-user-select: all !important;
            font-weight: 400 !important;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }
    </style>
</head>

<body class="menu-position-top full-screen with-content-panel">

    <!-- START: Header -->
    @include('backend.telecaller.layout.header')

    <section class="content">
        @yield('content')
    </section>

    <!-- END: Header -->

    <script src="{{ asset('backend/telecaller/bower_components/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('backend/telecaller/bower_components/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('backend/telecaller/bower_components/moment/moment.js') }}"></script>
    <script src="{{ asset('backend/telecaller/bower_components/chart.js/dist/Chart.min.js') }}"></script>
    <script src="{{ asset('backend/telecaller/bower_components/select2/dist/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('backend/telecaller/bower_components/jquery-bar-rating/dist/jquery.barrating.min.js') }}">
    </script>
    <script src="{{ asset('backend/telecaller/bower_components/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('backend/telecaller/bower_components/bootstrap-validator/dist/validator.min.js') }}"></script>
    <script
        src="{{ asset('backend/telecaller/bower_components/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ asset('backend/telecaller/bower_components/ion.rangeSlider/js/ion.rangeSlider.min.js') }}"></script>
    <script src="{{ asset('backend/telecaller/bower_components/dropzone/dist/dropzone.js') }}"></script>
    <script src="{{ asset('backend/telecaller/bower_components/editable-table/mindmup-editabletable.js') }}"></script>
    <script
        src="{{ asset('backend/telecaller/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('backend/telecaller/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}">
    </script>
    <script src="{{ asset('backend/telecaller/bower_components/fullcalendar/dist/fullcalendar.min.js') }}"></script>
    <script
        src="{{ asset('backend/telecaller/bower_components/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js') }}">
        </script>
    <script src="{{ asset('backend/telecaller/bower_components/tether/dist/js/tether.min.js') }}"></script>
    <script src="{{ asset('backend/telecaller/bower_components/slick-carousel/slick/slick.min.js') }}"></script>
    <script src="{{ asset('backend/telecaller/bower_components/bootstrap/js/dist/util.js') }}"></script>
    <script src="{{ asset('backend/telecaller/bower_components/bootstrap/js/dist/alert.js') }}"></script>
    <script src="{{ asset('backend/telecaller/bower_components/bootstrap/js/dist/button.js') }}"></script>
    <script src="{{ asset('backend/telecaller/bower_components/bootstrap/js/dist/carousel.js') }}"></script>
    <script src="{{ asset('backend/telecaller/bower_components/bootstrap/js/dist/collapse.js') }}"></script>
    <script src="{{ asset('backend/telecaller/bower_components/bootstrap/js/dist/dropdown.js') }}"></script>
    <script src="{{ asset('backend/telecaller/bower_components/bootstrap/js/dist/modal.js') }}"></script>
    <script src="{{ asset('backend/telecaller/bower_components/bootstrap/js/dist/tab.js') }}"></script>
    <script src="{{ asset('backend/telecaller/bower_components/bootstrap/js/dist/tooltip.js') }}"></script>
    <script src="{{ asset('backend/telecaller/bower_components/bootstrap/js/dist/popover.js') }}"></script>
    <script src="{{ asset('backend/telecaller/js/demo_customizer5739.js?version=4.5.0') }}"></script>
    <script src="{{ asset('backend/telecaller/js/main5739.js?version=4.5.0') }}"></script>
    <script src="{{ asset('backend/js/dataTables.bootstrap4.min.js') }}"></script>
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '{{ asset('backend/telecaller/../www.google-analytics.com/analytics.js') }}', 'ga');

        ga('create', 'UA-42863888-9', 'auto');
        ga('send', 'pageview');

        function tooltip() {
            $(".tooltip1").tooltip({
                container: 'body'
            });
            $(".tooltip2").tooltip({
                container: 'body'
            });
        }

        tooltip();
    </script>



    @stack('javascript')
</body>
<!-- Mirrored from light.pinsupreme.com/apps_bank.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 20 Jun 2020 08:54:44 GMT -->

</html>