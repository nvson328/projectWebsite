<?php 
	include_once 'model/food_m.php';
	class food_c extends food_m
	{
		private $food;
		function __construct()
		{
			$this->food = new food_m();
		}
        public function food(){
            if (isset($_GET['method'])) {
				$method = $_GET['method'];
			}else{
				$method = 'list';
			}
            
            switch ($method) {
				case'add':
						if (isset($_POST['submit'])) {
							# code...
							$ten_mon_an = $_POST['ten_mon_an'];
							$gia_tien = $_POST['gia_tien'];
							$file = $_FILES['anh_chi_tiet'];
							$maxfileSize = 1000000;
		
							$arrnameFile = [];
							$countFile = count($file['ten_mon_an']);
							for ($i=0; $i < $countFile; $i++) {
								$fileName = time().$file['ten_mon_an'][$i]; //lấy thời gian đặt tên file để ko bị trùng 
		
								$check = getimagesize($file['tmp_name'][$i]);	
								if ($check == true && $file['size'][$i] < $maxfileSize) {
									array_push($arrnameFile, $fileName);
									move_uploaded_file($file["tmp_name"][$i], "img/".$fileName);
									$allowUpload = true;
								}else{
									$allowUpload = false;
								}				
							}
							if($allowUpload==true){
								$this->food->addFood($ten_mon_an,$gia_tien,$file);
								include_once 'views/food/add-foods.php';
							}
						}
					break;
				// case 'del':
				// 	if(isset($_GET['id'])) {
				// 		$id = $_GET['id'];
				// 		$del=$this->food->delFood($id);
				// 		if($del){
				// 			header('location:index.php?page=list-foods');
				// 		}
				// 		else{
				// 			echo"lỗi không xóa đc";
				// 		}
				// 	}
				// 	break;
				default:
					$rs_food= $this->food->getFood_page();
            		include_once 'views/food/list-foods.php';
            		break;
            }
        }
		
	}
 ?>