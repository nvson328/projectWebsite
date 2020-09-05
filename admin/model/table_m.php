<?php 
include_once'config/myConfig.php';

class table_m extends Connect{
    function __construct()
		{
			parent::__construct();
        }
        //Hiển thị thông tin bàn ăn
        public function getHoadon(){
            $sql = "SELECT * FROM tbl_hoadon";
			$pre = $this->pdo->prepare($sql);
			$pre->execute();
			return $pre->fetchAll(PDO::FETCH_ASSOC);
        }
        //Hiển thị thông tin loại bàn
        public function gettypeTables(){
            $sql = "SELECT * FROM tbl_loaiban";
			$pre = $this->pdo->prepare($sql);
			$pre->execute();
            return $pre->fetchAll(PDO::FETCH_ASSOC);
        }
         public function getFood(){
            $sql = "SELECT * FROM tbl_thucdon";
            $pre = $this->pdo->prepare($sql);
            $pre->execute();
            return $pre->fetchAll(PDO::FETCH_ASSOC);
        }
        //Thêm bàn ăn
        public function addTables($ma_loai_ban){
            $sql = "INSERT INTO tbl_banan (ma_loai_ban) VALUES (:ma_loai_ban);";
            $pre = $this->pdo->prepare($sql);
			$pre->bindParam(':ma_loai_ban', $ma_loai_ban);
	
		    if($pre->execute()){
		    	$_SESSION['check'] = 1;
		    	header('location: index.php?page=list-tables');
		    }else{
		     echo "Thêm thất bại";
		    }
        }
        //Lấy món theo id
        public function getIdfood($id){
            $sql= 'SELECT * FROM tbl_thucdon WHERE ma_thuc_don = :id';
            $pre = $this->pdo->prepare($sql);
            $pre->bindParam(':id', $id);
            $pre->execute();
            return $pre->fetchAll(PDO::FETCH_ASSOC);
        }
        //Lấy chi tiết bàn ăn
        public function getDetailsTable($id){
            $sql= "SELECT * FROM tbl_chitietban,tbl_thucdon WHERE tbl_chitietban.ma_thuc_don=tbl_thucdon.ma_thuc_don AND ma_hoa_don = $id";
            $pre = $this->pdo->prepare($sql);
            $pre->execute();
            return $pre->fetchAll(PDO::FETCH_ASSOC);
        }
        //Thêm món vào hóa đơn
        public function addFood($ma_hoa_don,$ma_thuc_don,$don_gia,$so_luong,$tong_tien ){
            $sql = "INSERT INTO tbl_chitietban (ma_hoa_don, ma_thuc_don, don_gia, so_luong, tong_tien) VALUES (:ma_hoa_don, :ma_thuc_don, :don_gia, :so_luong, :tong_tien)";
            $pre= $this->pdo->prepare($sql);
            $pre->bindParam(':ma_hoa_don', $ma_hoa_don);
            $pre->bindParam(':ma_thuc_don', $ma_thuc_don);
            $pre->bindParam(':don_gia', $don_gia);
            $pre->bindParam(':so_luong', $so_luong);
            $pre->bindParam(':tong_tien', $tong_tien);
            if($pre->execute()){
		    	$_SESSION['check'] = 1;
                // header('location: index.php?page=list-tables');
                unset($_SESSION['cart']);
                unset($_SESSION['sum']);
		    }else{
                echo "Saiiiiii!";
            }
        }
        //update món ăn
        public function updateFood($ma_thuc_don,$don_gia,$so_luong,$tong_tien){
            $sql = "UPDATE tbl_chitietban SET ma_thuc_don=:ma_thuc_don, don_gia=:don_gia, so_luong=:so_luong, tong_tien =:tong_tien WHERE ma_thuc_don = :ma_thuc_don  ";
            $pre = $this->pdo->prepare($sql);
            $pre->bindParam(':ma_thuc_don', $ma_thuc_don);
            $pre->bindParam(':don_gia', $don_gia);
            $pre->bindParam(':so_luong', $so_luong);
            $pre->bindParam(':tong_tien', $tong_tien);
            if($pre->execute()){
		    	$_SESSION['check'] = 1;
                header('location: index.php?page=list-tables');
                unset($_SESSION['cart']);
                unset($_SESSION['sum']);
		    }
        }
        //Kiểm tra
        public function checkFood($ma_hoa_don){
            $sql = "SELECT ma_thuc_don,so_luong FROM tbl_chitietban WHERE ma_hoa_don = :ma_hoa_don";
            $pre= $this->pdo->prepare($sql);
            $pre->bindParam(':ma_hoa_don', $ma_hoa_don);
            $pre->execute();
            return $pre->fetchAll(PDO::FETCH_ASSOC);
        }
}

?>