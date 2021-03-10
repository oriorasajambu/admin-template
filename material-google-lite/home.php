<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, materialpro admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, materialpro admin lite design, materialpro admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Material Pro Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Material Pro Lite Template by WrapPixel</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/materialpro-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <!-- chartist CSS -->
    <link href="assets/plugins/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="assets/plugins/chartist-js/dist/chartist-init.css" rel="stylesheet">
    <link href="assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <!--This page css - Morris CSS -->
    <link href="assets/plugins/c3-master/c3.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="assets/css/style.min.css" rel="stylesheet">
</head>

<body>

    <?php $pages = isset($_GET['pages']) ? $_GET['pages'] : "dashboard"; ?>

    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">

        <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>

        <?php

            if($pages == "404") include_once "content/404.php";
            else {
              include_once "addons/topbar.php";
              include_once "addons/sidebar.php";
         ?>

        <div class="page-wrapper">

            <?php include_once "addons/bread-crumb.php"; ?>

            <?php
                if($pages == "dashboard") include_once "content/dashboard.php";
                else if($pages == "profile") include_once "content/profile.php";
                else if($pages == "tables") include_once "content/tables.php";
                else if($pages == "icons") include_once "content/icons.php";
                else if($pages == "map") include_once "content/map.php";
                else if($pages == "blank") include_once "content/blank.php";
                else include_once "content/dashboard.php";
            ?>

            <?php
                include_once "addons/footer.php";
              }
            ?>

        </div>

    </div>

    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="assets/plugins/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/app-style-switcher.js"></script>
    <!--Wave Effects -->
    <script src="assets/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="assets/js/sidebarmenu.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!-- chartist chart -->
    <script src="assets/plugins/chartist-js/dist/chartist.min.js"></script>
    <script src="assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
    <!--c3 JavaScript -->
    <script src="assets/plugins/d3/d3.min.js"></script>
    <script src="assets/plugins/c3-master/c3.min.js"></script>
    <!--Custom JavaScript -->
    <script src="assets/js/pages/dashboards/dashboard1.js"></script>
    <script src="assets/js/custom.js"></script>
    <!-- google maps api -->
    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="assets/plugins/gmaps/gmaps.min.js"></script>
    <script src="assets/plugins/gmaps/jquery.gmaps.js"></script>

    <script>
        $(".preloader").fadeOut();
    </script>
</body>

</html>
