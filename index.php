<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">

    <!-- Site Metas -->
    <title>Food Funday Restaurant - One page HTML Responsive</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="publics/css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="publics/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="publics/css/responsive.css">
    <!-- color -->
    <link id="changeable-colors" rel="stylesheet" href="publics/css/colors/orange.css" />

    <!-- Modernizer -->
    <script src="publics/js/modernizer.js"></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <div id="loader">
        <div id="status"></div>
    </div>
    <?php include_once'layout/header.php'; ?>
	<!-- end site-header -->
	
    <?php include_once 'layout/banner.php'; ?>
    <!-- end banner -->

    <?php include_once'layout/about.php'; ?>
    <!-- end about us -->

    <?php include_once'layout/special_menu.php'; ?>
    <!-- end special-menu -->

    <?php include_once'layout/menu.php'; ?>
    <!-- end menu -->

    <?php include_once'layout/our_team.php'; ?>
    <!-- end team-main -->

    <?php include_once'layout/gallery.php'; ?>
    <!-- end gallery-main -->

    <?php include_once'layout/reservation.php'; ?>
    <!-- end reservations-main -->
        

    <?php include_once'layout/footer.php'; ?>
    <!-- end footer-main -->

    <a href="#" class="scrollup" style="display: none;">Scroll</a>
    <!-- ALL JS FILES -->
    <script src="publics/js/all.js"></script>
    <script src="publics/js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="publics/js/custom.js"></script>
</body>

</html>