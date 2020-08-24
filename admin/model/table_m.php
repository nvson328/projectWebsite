<?php 
include_once'config/myConfig.php';

class table_m extends Connect{
    function __construct()
		{
			parent::__construct();
        }
        //Hiển thị thông tin bàn ăn
        public function getTables(){
            $sql = "SELECT * FROM tbl_banan, tbl_loaiban WHERE tbl_banan.ma_loai_ban=tbl_loaiban.ma_loai_ban";
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

}

?>