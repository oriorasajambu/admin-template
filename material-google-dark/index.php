<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Material Dashboard Dark Edition by Creative Tim
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="assets/css/material-dashboard.css?v=2.1.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="dark-edition">
  <div class="wrapper ">

    <?php $pages = isset($_GET["pages"]) ? $_GET['pages'] : "dashboard"; ?>

    <!-- Sidebar -->
    <?php include_once "addons/sidebar.php"; ?>
    <!-- End Sidebar -->

    <div class="main-panel">

      <!-- Navbar -->
      <?php include_once "addons/navbar.php"; ?>
      <!-- End Navbar -->

      <!-- Content -->
      <?php
        if($pages == "dashboard") include_once "content/dashboard.php";
        else if($pages == "user") include_once "content/user.php";
        else if($pages == "tables") include_once "content/tables.php";
        else if($pages == "typography") include_once "content/typography.php";
        else if($pages == "icons") include_once "content/icons.php";
        else if($pages == "map") include_once "content/map.php";
        else if($pages == "notifications") include_once "content/notifications.php";
        else include_once "content/dashboard.php";
       ?>
      <!-- End Content -->

      <!-- Footer -->
      <?php include_once "addons/footer.php"; ?>
      <!-- End Footer -->

    </div>
  </div>

  <!-- Fixed Plugin -->
  <?php include_once "addons/fixed-plugin.php"; ?>
  <!-- End Fixed Plugin -->

  <!--   Core JS Files   -->
  <script src="assets/js/core/jquery.min.js"></script>
  <script src="assets/js/core/popper.min.js"></script>
  <script src="assets/js/core/bootstrap-material-design.min.js"></script>
  <script src="https://unpkg.com/default-passive-events"></script>
  <script src="assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!--  Google Maps Plugin    -->
  <!-- <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script> -->
  <!-- Chartist JS -->
  <script src="assets/js/plugins/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="assets/js/material-dashboard.js?v=2.1.0"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="assets/demo/demo.js"></script>
  <script src="assets/js/material.js"></script>
</body>

</html>
