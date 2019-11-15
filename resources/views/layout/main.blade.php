<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="Pixelparty">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Tvoybox</title>

    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,700,400italic,700italic&amp;subset=latin,vietnamese">

    @section('css')
    <link href="https://fonts.googleapis.com/css?family=Permanent+Markera&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Neucha&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Monoton&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Montserrat:400,700">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,700,400italic,700italic&amp;subset=latin,vietnamese">
        <link rel="stylesheet" href="css/customstyle.css">
        <link rel="stylesheet" href="css/bootstrap.css">

        <link rel="stylesheet" href="css/plugins.css">

        <link rel="stylesheet" href="css/styles.css">
        <link rel="stylesheet" href="css/custom.css">


        @yield('css')
    @show
</head>
<body>

@include('layout.header')

<!-- // LOADING -->
<div class="awe-page-loading">
    <div class="awe-loading-wrapper">
        <div class="awe-loading-icon">
            <span class="icon icon-logo"></span>
        </div>

        <div class="progress">
            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
    </div>
</div>
<!-- // END LOADING -->


<div id="wrapper">
    @section("content")

    @show
</div>

@include('layout.footer')

@include('layout.modal')

@section('js')
    <script src="js/vendor.js"></script>

    <script>
        window.SHOW_LOADING = false;
    </script>

    <script>
        $(function() {
            $('a[href="#login-popup"]').magnificPopup({
                type:'inline',
                midClick: false,
                closeOnBgClick: false
            });
        });
    </script>



    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>

    <script src="js/plugins.js"></script>

    <script src="js/main.js"></script>

    <script src="js/docs.js"></script>

     <script src="js/script.js"></script>

    @yield('javascript')
@show
</body>
</html>
