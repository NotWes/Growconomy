<!DOCTYPE html>
<html lang="en">
    <head>
        <title>{{ env('APP_NAME') }} | @yield('title')</title>
        <link rel="icon" type="image/png" href="{{ env('APP_URL') }}/favicon/favicon.ico">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Vendor styles -->
        <link rel="stylesheet" href="{{ env('APP_URL') }}/vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css">
        <link rel="stylesheet" href="{{ env('APP_URL') }}/vendors/bower_components/animate.css/animate.min.css">
        <link rel="stylesheet" href="{{ env('APP_URL') }}/vendors/bower_components/jquery.scrollbar/jquery.scrollbar.css">
        <link rel="stylesheet" href="{{ env('APP_URL') }}/vendors/bower_components/fullcalendar/dist/fullcalendar.min.css">

        <!-- App styles -->
        <link rel="stylesheet" href="{{ env('APP_URL') }}/css/app.min.css">
    </head>

    <body data-sa-theme="3">
        <main class="main">
            <!-- <div class="page-loader">
                <div class="page-loader__spinner">
                    <svg viewBox="25 25 50 50">
                        <circle cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
                    </svg>
                </div>
            </div> -->

            @include('app.header')

<section class="content content--full">
                <div class="content__inner">
                    
                    


            @yield('content')
            @include('app.footer')
            </div>
            </section>

           
        </main>

        <!-- Older IE warning message -->
            <!--[if IE]>
                <div class="ie-warning">
                    <h1>Warning!!</h1>
                    <p>You are using an outdated version of Internet Explorer, please upgrade to any of the following web browsers to access this website.</p>

                    <div class="ie-warning__downloads">
                        <a href="http://www.google.com/chrome">
                            <img src="img/browsers/chrome.png" alt="">
                        </a>

                        <a href="https://www.mozilla.org/en-US/firefox/new">
                            <img src="img/browsers/firefox.png" alt="">
                        </a>

                        <a href="http://www.opera.com">
                            <img src="img/browsers/opera.png" alt="">
                        </a>

                        <a href="https://support.apple.com/downloads/safari">
                            <img src="img/browsers/safari.png" alt="">
                        </a>

                        <a href="https://www.microsoft.com/en-us/windows/microsoft-edge">
                            <img src="img/browsers/edge.png" alt="">
                        </a>

                        <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                            <img src="img/browsers/ie.png" alt="">
                        </a>
                    </div>
                    <p>Sorry for the inconvenience!</p>
                </div>
            <![endif]-->

        <!-- Javascript -->
        <!-- Vendors -->
        <script src="{{ env('APP_URL') }}/vendors/bower_components/jquery/dist/jquery.min.js"></script>
        <script src="{{ env('APP_URL') }}/vendors/bower_components/jquery-text-counter/textcounter.min.js"></script>
        <script src="{{ env('APP_URL') }}/scss/inc/vendor-overrides/_jquery-text-counter.scss"></script>
        <script src="{{ env('APP_URL') }}/vendors/bower_components/popper.js/dist/umd/popper.min.js"></script>
        <script src="{{ env('APP_URL') }}/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="{{ env('APP_URL') }}/vendors/bower_components/jquery.scrollbar/jquery.scrollbar.min.js"></script>
        <script src="{{ env('APP_URL') }}/vendors/bower_components/jquery-scrollLock/jquery-scrollLock.min.js"></script>

        <script src="{{ env('APP_URL') }}/vendors/bower_components/salvattore/dist/salvattore.min.js"></script>
        <script src="{{ env('APP_URL') }}/vendors/bower_components/flot/jquery.flot.js"></script>
        <script src="{{ env('APP_URL') }}/vendors/bower_components/flot/jquery.flot.resize.js"></script>
        <script src="{{ env('APP_URL') }}/vendors/bower_components/flot.curvedlines/curvedLines.js"></script>
        <script src="{{ env('APP_URL') }}/vendors/bower_components/jqvmap/dist/jquery.vmap.min.js"></script>
        <script src="{{ env('APP_URL') }}/vendors/bower_components/jqvmap/dist/maps/jquery.vmap.world.js"></script>
        <script src="{{ env('APP_URL') }}/vendors/bower_components/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js"></script>
        <script src="{{ env('APP_URL') }}/vendors/bower_components/peity/jquery.peity.min.js"></script>
        <script src="{{ env('APP_URL') }}/vendors/bower_components/moment/min/moment.min.js"></script>
        <script src="{{ env('APP_URL') }}/vendors/bower_components/fullcalendar/dist/fullcalendar.min.js"></script>
        <script src="{{ env('APP_URL') }}/vendors/bower_components/remarkable-bootstrap-notify/dist/bootstrap-notify.min.js"></script>

        <!-- Charts and maps-->
        <script src="{{ env('APP_URL') }}/js/flot-charts/curved-line.js"></script>
        <script src="{{ env('APP_URL') }}/js/flot-charts/line.js"></script>
        <script src="{{ env('APP_URL') }}/js/flot-charts/chart-tooltips.js"></script>
        <script src="{{ env('APP_URL') }}/js/other-charts.js"></script>
        <script src="{{ env('APP_URL') }}/js/jqvmap.js"></script>
        <script src="{{ env('APP_URL') }}/scss/inc/vendor-overrides/_flot.scss"></script>

        <!-- App functions and actions -->
        <script src="{{ env('APP_URL') }}/js/app.min.js"></script>

        <script src="{{ env('APP_URL') }}/scss/inc/vendor-overrides/_select2.scss"></script>
        <script src="{{ env('APP_URL') }}/vendors/bower_components/select2/dist/css/select2.min.css"></script>
        <script src="{{ env('APP_URL') }}/vendors/bower_components/select2/dist/js/select2.full.min.js"></script>
    </body>
</html>