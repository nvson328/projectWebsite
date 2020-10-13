<?php 
include_once'config/myConfig.php';

class table_m extends Connect{
    function __construct()
		{
			parent::__construct();
        }
        //Hiển thị thông tin bàn ăn
        public function getHoadon(){
            
            $sql = "SELECT * FROM tbl_hoadon,tbl_khachhang where tbl_hoadon.ma_khach_hang=tbl_khachhang.ma_khach_hang ";
			$pre = $this->pdo->prepare($sql);
			$pre->execute();
			return $pre->fetchAll(PDO::FETCH_ASSOC);
        }
        //Show hoa don
        public function getHoadon_page(){
            $sp_page=5;
            if(!isset($_GET['trang'])){
                $trang= 1;

            }
            else{
                $trang=$_GET['trang'];
            }
            $on_page=($trang-1)*$sp_page;
            $sql = "SELECT * FROM tbl_hoadon,tbl_khachhang where tbl_hoadon.ma_khach_hang=tbl_khachhang.ma_khach_hang and tbl_hoadon.status_hoa_don =1 order by ma_hoa_don desc limit $on_page,$sp_page";
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
        public function addTables($ma_loai_ban, $ten_ban){
            $sql = "INSERT INTO tbl_banan (ma_loai_ban, ten_ban) VALUES (:ma_loai_ban, :ten_ban);";
            $pre = $this->pdo->prepare($sql);
            $pre->bindParam(':ma_loai_ban', $ma_loai_ban);
            $pre->bindParam(':ten_ban', $ten_ban);
	
		    if($pre->execute()){
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
            $sql= "SELECT * FROM tbl_chitietban,tbl_thucdon,tbl_hoadon WHERE tbl_chitietban.ma_hoa_don=tbl_hoadon.ma_hoa_don and tbl_chitietban.ma_thuc_don=tbl_thucdon.ma_thuc_don AND tbl_hoadon.ma_hoa_don = $id";
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
                unset($_SESSION['cart']);
                unset($_SESSION['sum']);	
                // header('location: index.php');
                
		    }else{
                echo "<h1>Saiiiiii!</h1>";
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
                unset($_SESSION['cart']);
                unset($_SESSION['sum']);	
              
		    }else{
                echo "Saiiiiii!";
            }
        }
        //Kiểm tra
        public function checkFood($ma_hoa_don){
            $sql = "SELECT ma_thuc_don,so_luong FROM tbl_chitietban WHERE ma_hoa_don = :ma_hoa_don on";
            $pre= $this->pdo->prepare($sql);
            $pre->bindParam(':ma_hoa_don', $ma_hoa_don);
            $pre->execute();
            return $pre->fetchAll(PDO::FETCH_ASSOC);
        }
        //Tìm kiếm thông tin
        public function search($key){
            $sql="SELECT *FROM tbl_khachhang,tbl_hoadon WHERE tbl_hoadon.ma_khach_hang=tbl_khachhang.ma_khach_hang AND tbl_khachhang.so_dien_thoai LIKE '%$key%'";
            $pre=$this->pdo->prepare($sql);
            $pre->bindParam(':key', $key);
            $pre->execute();
            return $pre->fetchAll(PDO::FETCH_ASSOC);
        }
        public function thanhtoan($ma_hoa_don){
            $sql = "UPDATE tbl_hoadon SET status_hoa_don=2 where ma_hoa_don= :ma_hoa_don";
            $pre = $this->pdo->prepare($sql);
            $pre->bindParam(':ma_hoa_don', $ma_hoa_don);
            if($pre->execute()){
                unset($_SESSION['id_order']);
            }
        }
        public function showBill(){
            $sql = "select *from tbl_hoadon,tbl_khachhang where tbl_hoadon.ma_khach_hang=tbl_khachhang.ma_khach_hang and status_hoa_don=2 and DATEDIFF(CURDATE(),ngay_dat_ban) = 0";
            $pre = $this->pdo->prepare($sql);
            $pre->execute();
            return $pre->fetchAll(PDO::FETCH_ASSOC);
        }
        public function countBill()
        {
            $sql = "SELECT COUNT(*) as COUNT FROM tbl_hoadon WHERE status_hoa_don = 2";
            $pre = $this->pdo->prepare($sql);
            $pre->execute();
            return $pre->fetchAll(PDO::FETCH_ASSOC);
        }
        public function countTable()
        {
            $sql = "SELECT COUNT(*) AS count FROM tbl_banan";
            $pre = $this->pdo->prepare($sql);
            $pre->execute();
            return $pre->fetchAll(PDO::FETCH_ASSOC);
        }
        //doanh thu
        public function doanhthu(){
            $sql = "select tong_tien, ngay_dat_ban from tbl_hoadon,tbl_chitietban where tbl_hoadon.ma_hoa_don=tbl_chitietban.ma_hoa_don and status_hoa_don=2";
            $pre = $this->pdo->prepare($sql);
            $pre->execute();
            return $pre->fetchAll(PDO::FETCH_ASSOC);
            }
            //liệt kê tổng hóa đơn
            public function listBill(){
                $sql = "select *from tbl_hoadon,tbl_khachhang where tbl_hoadon.ma_khach_hang=tbl_khachhang.ma_khach_hang AND status_hoa_don=2 order by ngay_dat_ban asc";
                $pre = $this->pdo->prepare($sql);
                $pre->execute();
                return $pre->fetchAll(PDO::FETCH_ASSOC);
                }
}

?>