<?php 
include_once'config/myConfig.php';

class food_m extends Connect{
    function __construct()
		{
			parent::__construct();
        }
        //Hiển thị thông tin bàn ăn
         public function getFood(){
            $sql = "SELECT * FROM tbl_thucdon";
            $pre = $this->pdo->prepare($sql);
            $pre->execute();
            return $pre->fetchAll(PDO::FETCH_ASSOC);
        }
        public function getFood_page(){
          if(!isset($_GET['trang'])){
            $trang=1;
          }
          else{
            $trang = $_GET['trang'];
          }
          $sp_food=5;
          $on_page=($trang-1)*$sp_food;
          $sql = "SELECT * FROM tbl_thucdon limit $on_page,$sp_food ";
          $pre = $this->pdo->prepare($sql);
          $pre->execute();
          return $pre->fetchAll(PDO::FETCH_ASSOC);
      }
        // public function delFood($idDel){
        //   $sql= "DELETE FROM tbl_thucdon WHERE ma_thuc_don = :idDel";
        //   $pre=$this->pdo->prepare($sql);
        //   // $pre->bindParam(':idFood',$idFood);
        //   $pre->execute();
            
        // }
        public function addFood($ten_mon_an,$gia_tien,$anh_chi_tiet){
          $sql = "INSERT INTO tbl_thucdon (ten_mon_an, anh_chi_tiet,gia_tien) VALUES (:ten_mon_an,:gia_tien,:anh_chi_tiet)";
          $pre = $this->pdo->prepare($sql);
          $pre->bindParam(':ten_mon_an', $ten_mon_an);
          $pre->bindParam(':gia_tien', $gia_tien);
          $pre->bindParam(':anh_chi_tiet', $anh_chi_tiet);
          $pre->execute();
          return $pre->fetchAll(PDO::FETCH_ASSOC);
        }
}

?>