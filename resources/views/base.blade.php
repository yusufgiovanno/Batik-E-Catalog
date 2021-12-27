<!DOCTYPE html>
<html lang="en">

<head>
    <title>Studio Batik</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
    <link rel="stylesheet" href="../fonts/icomoon/style.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/animate.css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="../fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="../css/aos.css">
    <link rel="stylesheet" href="../css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="../css/fontawesome.css" />
    <link rel="stylesheet" href="../css/fontawesome.min.css" />
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../DataTables/datatables.min.css" />

    <script src="../js/jquery-3.3.1.min.js"></script>

    <style>
        .mids {
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

    </style>

</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    <div class="site-wrap">
        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>
        @include('navbar')

        @yield('content')
    </div>

    </div>

    <script src="../js/zooming.min.js"></script>
    <script src="../js/fontawesome.min.js"></script>
    <script src="../js/fontawesome.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/owl.carousel.min.js"></script>
    <script src="../js/aos.js"></script>
    <script src="../js/jquery.sticky.js"></script>
    <script src="../js/stickyfill.min.js"></script>
    <script src="../js/jquery.easing.1.3.js"></script>
    <script src="../js/jquery.fancybox.min.js"></script>
    <script src="../js/main.js"></script>
    <script type="text/javascript" src="../DataTables/datatables.min.js"></script>
    <script>
        new Zooming().listen('img')
        $(document).ready(function() {
            $('#dtb').DataTable();
        });
    </script>


</body>

</html>
