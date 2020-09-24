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
							$ma_danh_muc = $_POST['ma_danh_muc'];
							$gia_tien = $_POST['gia_tien'];
							$file = $_FILES['anh_chi_tiet'];
							$fileName = time().$file['name'];
							move_uploaded_file($file["tmp_name"], "publics-admin/images/".$fileName);
							$this->food->addFood($ten_mon_an,$ma_danh_muc,$gia_tien,$fileName);	

						}
						$rs_food= $this->food->getFood_page();
						$category = $this->food->category();
						
						include_once 'views/food/add-foods.php';
					break;
				case'edit':
					if(isset($_GET['id'])){
						$id = $_GET['id'];
						$rs_getnameFood = $this->food->getnameFood($id);
						// echo "<pre>";
						// print_r($rs_getnameFood);
						// echo "</pre>";
						$_SESSION['nameFood']=$rs_getnameFood[0]['ten_mon_an'];
						$_SESSION['category']=$rs_getnameFood[0]['ma_danh_muc'];
						$_SESSION['price']=$rs_getnameFood[0]['gia_tien'];
						$fileName_old=$rs_getnameFood[0]['anh_chi_tiet'];
						if (isset($_POST['btn_edit'])){							
							$ten_mon_an = $_POST['ten_mon_an'];
							$ma_danh_muc = $_POST['ma_danh_muc'];
							$gia_tien = $_POST['gia_tien'];
							$file = $_FILES['anh_chi_tiet'];
							$fileName_new = time().$file['name'];
							if($fileName_new==""){
								$fileName = $fileName_old;
							}
							else{
								$fileName_new= $fileName_old;
								$fileName = $fileName_new;
							}

							move_uploaded_file($file["tmp_name"], "publics-admin/images/".$fileName);
							$edit=$this->food->editFood($id,$ten_mon_an,$ma_danh_muc,$gia_tien,$fileName);	
							

						}
						
					}
					$rs_food= $this->food->getFood_page();
					$category = $this->food->category();
					include_once 'views/food/edit-foods.php';
				break;
				default:
					$rs_food= $this->food->getFood_page();
					$count_food= $this->food->countFood();
					$_SESSION['count_food']=$count_food;
            		include_once 'views/food/list-foods.php';
            		break;
            }
        }
		
	}
 ?>