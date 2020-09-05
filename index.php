<?php  
    
    session_start();

?>

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
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- color -->
    <link id="changeable-colors" rel="stylesheet" href="css/colors/orange.css" />
    <link rel="stylesheet" href="css/myCSS.css">
    <!-- Modernizer -->
    <script src="js/modernizer.js"></script>
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <div id="loader">
        <div id="status"></div>
    </div>
    <!-- Notify -->
    <?php include_once 'layout/noti/successMember.php' ?>
    <!-- ./Notify -->
    <?php include_once'layout/header.php'; ?>
	<!-- end site-header -->
	
    <?php include_once 'layout/banner.php'; ?>
    <!-- end banner -->
    <?php include_once 'layout/about.php' ?>
    <?php
     if (isset($_GET['page'])){
            $page = $_GET['page'];
        }else{
            $page = 'home';
        }

        switch ($page) {            
            default:
                include_once 'controller/home_c.php';
                $home = new home_c();
                $home->home();
                break;
        }
    ?>
    <div id="footer" class="footer-main">
        <?php include_once"layout/footer-main.php" ?>
        <!-- end footer-news -->
        <?php include_once'layout/footer.php'; ?>
        <!-- end footer-box -->
    </div>
    <!-- end footer-main -->

    <a href="#" class="scrollup" style="display: none;">Scroll</a>

    <!-- jQuery -->
    <script src="js/jquery-3.5.1.min.js"></script>
    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>
    <!-- ajax -->
    <script src="js/ajax.js"></script>
    <!--myJS-->
    
</body>

</html>