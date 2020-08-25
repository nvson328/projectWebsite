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
            	// case 'list-food':
            	// 	$rs_food = $this->food->getFood();            		
            	// 	include_once 'views/food/list-foods.php';
            	// 	break;
            	default:
            		$rs_food= $this->food->getFood();
            		include_once 'views/food/list-foods.php';
            		break;
            }
        }
		
	}
 ?>