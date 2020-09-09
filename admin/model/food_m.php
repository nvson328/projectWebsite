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
        // public function delFood($idDel){
        //   $sql= "DELETE FROM tbl_thucdon WHERE ma_thuc_don = :idDel";
        //   $pre=$this->pdo->prepare($sql);
        //   // $pre->bindParam(':idFood',$idFood);
        //   $pre->execute();
            
        // }
}

?>