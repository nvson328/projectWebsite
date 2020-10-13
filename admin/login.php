<?php 
if (isset($_SESSION['ma_tai_khoan'])) {
    header("Location: index.php");
}

include_once "controller/login_c.php";
$ad=new login_c();


?>

<?php?>
<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="shortcut icon" href="../images/icon_index_admin.png" type="image/x-icon" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="publics-admin/css/myCSS.css">
    <!-- Bootstrap Core CSS -->
    <link href="publics-admin/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="publics-admin/css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="publics-admin/css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="publics-admin/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <title></title>
</head>
<body style="margin: 0px ; padding: 0px">


<?php  ?>

<?php 
    if(isset($_POST['submit_login'])){
        $taikhoan=$_POST['taikhoan'];
        $matkhau=md5($_POST['matkhau']);

        $check=$ad->getAcc($taikhoan, $matkhau);
        if(count($check)!=1){
            echo "<script>alert(Đăng nhập thất bại');</script>";
        }else{
            // echo "<pre>";
            // print_r($check);
            // echo "</pre>";
            foreach ($check as $key => $value) {
                $_SESSION['ma_tai_khoan']=$value['ma_tai_khoan'];
                $_SESSION['acc']=$value['ten_dang_nhap'];
                $_SESSION['stt']=$value['status'];
                $_SESSION['ten']=$value['ten_nguoi_dung'];
            }
            echo  $_SESSION['ma_tai_khoan'];
            echo  $_SESSION['stt'];
            header("Location:index.php");
        }
    }
 ?>
    <div class="div_login"  style="height: 700px;">
        <img  class="img_bg" src="publics-admin/images/banner.jpg" style="width: 100% ;height: auto;"  alt="">
        
        <form action="" method="POST" role="form" class="form-login">
            <img class="img_logo" src="publics-admin/images/logo.png" alt="">
            <legend style="color:  #e75b1e;">Đăng nhập</legend>
        
            <div class="form-group">
                <label for="">Tài khoản</label>
                <input type="text" class="form-control" id="tk" placeholder="" name="taikhoan">
            </div>
            <div class="form-group">
                <label for="">Mật khẩu</label>
                <input type="password" class="form-control" id="mk" placeholder="" name="matkhau">
            </div>
        
            <button type="submit" class="btn btn-primary" name="submit_login">Đăng nhập</button>
        </form>
        
    </div>



<!-- jQuery -->
<script src="publics-admin/js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="publics-admin/js/bootstrap.min.js"></script>

<!-- Morris Charts JavaScript -->
<script src="publics-admin/js/myJava.js"></script>
</body>
</html>