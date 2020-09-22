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
				case 'add':
					if(isset($_POST['sm_add'])){
						$file = $_FILES['avatar'];
						echo '<pre>';
						print_r($file);
						echo '</pre>';

						// $filename = $file[]
					}
					include_once 'views/food/add-foods.php';
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