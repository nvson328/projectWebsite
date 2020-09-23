<?php 
include_once'config/myConfig.php';

class food_m extends Connect{
    function __construct()
		{
			parent::__construct();
        }
        //Hiển thị thông tin bàn ăn
         public function getFood(){
            $sql = "SELECT * FROM tbl_thucdon,tbl_danhmuc where tbl_thucdon.ma_danh_muc=tbl_danhmuc.ma_danh_muc";
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
          $sql = "SELECT * FROM tbl_thucdon,tbl_danhmuc where tbl_thucdon.ma_danh_muc=tbl_danhmuc.ma_danh_muc limit $on_page,$sp_food ";
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
        public function addFood($ten_mon_an,$ma_danh_muc,$gia_tien,$anh_chi_tiet){
          $sql = "INSERT INTO tbl_thucdon (ten_mon_an,ma_danh_muc,gia_tien,anh_chi_tiet) VALUES (:ten_mon_an,:ma_danh_muc,:gia_tien,:anh_chi_tiet)";
          $pre = $this->pdo->prepare($sql);
          $pre->bindParam(':ten_mon_an', $ten_mon_an);
          $pre->bindParam(':ma_danh_muc', $ma_danh_muc);
          $pre->bindParam(':gia_tien', $gia_tien);
          $pre->bindParam(':anh_chi_tiet', $anh_chi_tiet);
          if($pre->execute()){
            echo "Thêm món ăn thành công";
          }else{
            echo "Thêm món ăn thất bại";
          }
          
        }
        public function category(){
          $sql = "select *from tbl_danhmuc";
          $pre = $this->pdo->prepare($sql);
          $pre->execute();
          return $pre->fetchAll(PDO::FETCH_ASSOC);
        }
        public function getnameFood($id){
          $sql = "select *from tbl_thucdon where ma_thuc_don = :id";
          $pre = $this->pdo->prepare($sql);
          $pre->bindParam(':id', $id);
          $pre->execute();
          return $pre->fetchAll(PDO::FETCH_ASSOC);
  
        }
        public function editFood($id,$ten_mon_an,$ma_danh_muc,$gia_tien,$anh_chi_tiet){
          $sql = "UPDATE tbl_thucdon SET ten_mon_an=:ten_mon_an, ma_danh_muc =:ma_danh_muc, gia_tien =:gia_tien, anh_chi_tiet=:anh_chi_tiet WHERE ma_thuc_don = $id";
          $pre = $this->pdo->prepare($sql);
          $pre->bindParam(':ten_mon_an', $ten_mon_an);
          $pre->bindParam(':ma_danh_muc', $ma_danh_muc);
          $pre->bindParam(':gia_tien', $gia_tien);
          $pre->bindParam(':anh_chi_tiet', $anh_chi_tiet);
          if($pre->execute()){
            echo "Sửa món ăn thành công";
          }else{
            echo "Sửa món ăn thất bại";
          }
        }
    }

?>