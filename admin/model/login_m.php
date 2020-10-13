<?php 
include_once'config/myConfig.php';

class login_m extends Connect{
    function __construct()
		{
			parent::__construct();
        }

        public function getAcc($ten_dang_nhap, $mat_khau)
        { 
            $sql = "SELECT * FROM tbl_taikhoan WHERE ten_dang_nhap=:ten_dang_nhap AND mat_khau=:mat_khau";

            $pre = $this->pdo->prepare($sql);

            $pre->bindParam(':ten_dang_nhap', $ten_dang_nhap);
            $pre->bindParam(':mat_khau', $mat_khau);
            $pre->execute();
            
			return $pre->fetchAll(PDO::FETCH_ASSOC);
        }
    }


?>