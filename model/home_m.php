<?php

    include_once 'config/myConfig.php';

    class home_m extends Connect
    {
        function __construct()
        {
            parent::__construct();
        }

        public function getThucdon2() 
        {
            $sql = "SELECT * FROM tbl_thucdon WHERE status = 2;";
			$pre = $this->pdo->prepare($sql);
			$pre->execute();

			return $pre->fetchAll(PDO::FETCH_ASSOC);
        }

        public function getTDKhaivi()
        {
            $sql = "SELECT * FROM tbl_thucdon WHERE ma_danh_muc = 1 AND status = 1";
			$pre = $this->pdo->prepare($sql);
			$pre->execute();

			return $pre->fetchAll(PDO::FETCH_ASSOC);
        }

        public function getTDMonchinh()
        {
            $sql = "SELECT * FROM tbl_thucdon WHERE ma_danh_muc = 2 AND status = 1";
			$pre = $this->pdo->prepare($sql);
			$pre->execute();

			return $pre->fetchAll(PDO::FETCH_ASSOC);
        }

        public function getTDTrangmieng()
        {
            $sql = "SELECT * FROM tbl_thucdon WHERE ma_danh_muc = 3 AND status = 1";
			$pre = $this->pdo->prepare($sql);
			$pre->execute();

			return $pre->fetchAll(PDO::FETCH_ASSOC);
        }

        public function getTDDouong()
        {
            $sql = "SELECT * FROM tbl_thucdon WHERE ma_danh_muc = 4 AND status = 1";
			$pre = $this->pdo->prepare($sql);
			$pre->execute();

			return $pre->fetchAll(PDO::FETCH_ASSOC);
        }

        public function getDaubep()
        {
            $sql = "SELECT * FROM tbl_daubep";
			$pre = $this->pdo->prepare($sql);
			$pre->execute();

			return $pre->fetchAll(PDO::FETCH_ASSOC);
        }

        public function getLoaiban()
        {
            $sql = "SELECT * FROM tbl_loaiban";
			$pre = $this->pdo->prepare($sql);
			$pre->execute();

			return $pre->fetchAll(PDO::FETCH_ASSOC);
        }


        public function addKhachhang($ten_khach_hang, $so_dien_thoai, $email)
        {
            $sql = "INSERT INTO tbl_khachhang (ten_khach_hang, so_dien_thoai, email) VALUES (:ten_khach_hang, :so_dien_thoai, :email)";

			$pre = $this->pdo->prepare($sql);
			$pre->bindParam(':ten_khach_hang', $ten_khach_hang);
			$pre->bindParam(':so_dien_thoai', $so_dien_thoai);
            $pre->bindParam(':email', $email);
            
            $pre->execute();
            $_SESSION['lastID'] = $this->pdo->lastInsertId();
        }

        public function addHoadon($ma_khach_hang, $ma_ban, $ngay_dat_ban, $gio_dat_ban)
        {
            $sql = "INSERT INTO tbl_hoadon (ma_khach_hang, ma_ban, ngay_dat_ban, gio_dat_ban) VALUES (:ma_khach_hang, :ma_ban, :ngay_dat_ban, :gio_dat_ban)";

			$pre = $this->pdo->prepare($sql);
			$pre->bindParam(':ma_khach_hang', $ma_khach_hang);
            $pre->bindParam(':ma_ban', $ma_ban);
			$pre->bindParam(':ngay_dat_ban', $ngay_dat_ban);
			$pre->bindParam(':gio_dat_ban', $gio_dat_ban);
            
            return $pre->execute();
        }

        public function getma_ban_an($id) {
            $sql = "SELECT * FROM tbl_banan WHERE ma_loai_ban = :id";

            $pre = $this->pdo->prepare($sql);
            $pre->bindParam(':id', $id, PDO::PARAM_INT);

            $pre->execute();
            return $pre->fetchAll(PDO::FETCH_ASSOC);
        }

        
    }
    
?>