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
					case 'edit':
						
            	default:
            		$rs_food= $this->food->getFood();
            		include_once 'views/food/list-foods.php';
            		break;
            }
        }
		
	}
 ?>