<?php 
    include_once 'model/home_m.php';
    class home_c extends home_m{
       private $home;
       function __construct()
       {
           $this->home = new home_m();
       }

       public function home(){
           if (isset($_GET['page'])){
               $page = $_GET['page'];
           }else{
               $page = 'home';
           }

           switch ($page) {            
               default:
                   $rs1  = $this->home->getThucdon2();
                   include_once 'views/special_menu.php';
                   $rs2 = $this->home->getTDKhaivi();
                   $rs3 = $this->home->getTDMonchinh();
                   $rs4 = $this->home->getTDTrangmieng();
                   $rs5 = $this->home->getTDDouong();
                   include_once 'views/menu.php';
                   $rs6 = $this->home->getDaubep();
                   include_once 'views/our_team.php';
                   if (isset($_POST['submit'])) {
                       
                   }
                   include_once 'views/reservation.php';
                   break;
           }
       }
    }
?>