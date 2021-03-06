<!DOCTYPE html>
<html lang="en">
    <head>
        <title>{{ env('APP_NAME') }} | Page Not Found</title>
        <link rel="icon" type="image/png" href="{{ env('APP_URL') }}/favicon/favicon.ico">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Vendor styles -->
        <link rel="stylesheet" href="{{ env('APP_URL') }}/vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css">

        <!-- App styles -->
        <link rel="stylesheet" href="{{ env('APP_URL') }}/css/app.min.css">
    </head>

    <body data-sa-theme="3">
        <section class="error">
            <div class="error__inner">
                <h1>404</h1>
                <h2>The page you were looking for doesn't exist!</h2>
                <p>Donec in ex eget orci facilisis gravida vitae ut tortor. In tempus lacus ac dui iaculis, placerat tempus diam vehiculaed suscipit tortor id lorem mollis</p>
            </div>
        </section>

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
        <script src="{{ env('APP_URL') }}/vendors/bower_components/popper.js/dist/umd/popper.min.js"></script>
        <script src="{{ env('APP_URL') }}/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    </body>
</html>