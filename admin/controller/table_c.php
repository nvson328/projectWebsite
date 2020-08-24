<?php 
	include_once 'model/table_m.php';
	class table_c extends table_m
	{
		private $table;
		function __construct()
		{
			$this->table = new table_m();
		}
        public function tables(){
            if (isset($_GET['method'])) {
				$method = $_GET['method'];
			}else{
				$method = 'list';
			}
            
            switch ($method) {
            	case 'order':
            	$rsTables = $this->table->getTables();
            	$rs_food = $this->table->getFood();
         		if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    if(isset($_POST['order_done'])){                   
                        $_SESSION['order'][$id] = $id;
                        header("Location: index.php?page=list-tables&method=list&id=$id");
                    }
                }
            		
            		include_once 'views/table/order.php';
            		break;
            	default:
            		$rsTables= $this->table->getTables();
            		include_once 'views/table/list-tables.php';
            		break;
            }
        }
		
	}
 ?>