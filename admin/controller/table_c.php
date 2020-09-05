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
					if(isset($_GET['id_del'])){
						$id_del = $_GET['id_del'];
						unset($_SESSION['cart'][$id_del]);
					}
         		if (isset($_GET['id'])) {
					$id = $_GET['id'];
                    if(isset($_POST['order_done'])){                   
				
						$rsCheck = $this->table->checkFood($id);
						foreach($rsCheck as $key=>$check){
							// echo($check['ma_thuc_don']).'<br>';
							foreach($_SESSION['cart'] as $key => $value){
							
								$ma_thuc_don = $value['ma_thuc_don'];
								$don_gia = $value['gia_tien'];
											
								if($check['ma_thuc_don']==$ma_thuc_don){
									$check['so_luong'] += $value['qty'];
									$tong_tien = $check['so_luong']*$don_gia;
									echo($check['so_luong']);
									$this->table->updateFood($ma_thuc_don, $don_gia, $check['so_luong'], $tong_tien);
								}
					
								else{
									$qty = $value['qty'];
									$tong_tien = $value['gia_tien']*$value['qty'];
									$this->table->addFood($id, $ma_thuc_don, $don_gia, $qty, $tong_tien);
								
								}
							}
						}
						
					
                    }
                }
	                
	                if (isset($_GET['id_food'])) {
	                	$id_food = $_GET['id_food'];
	                	$qty = $_GET['qty'];
	                	$rs_idfood = $this->table->getIdfood($id_food);
	                	$_SESSION['cart'][$id_food] = $rs_idfood[0];
						$_SESSION['cart'][$id_food]['qty']= $qty; 
					
	                }
	                // echo "<pre>";
	                // print_r($_SESSION['cart']);
	                // echo '</pre>';
            		// $rsTables = $this->table->getTables();
            		$rs_food = $this->table->getFood();
            		include_once 'views/table/order.php';
					break;
				case 'add':
					$rsTables= $this->table->gettypeTables();
					if(isset($_POST['add-table'])){
						$ma_loai_ban = $_POST['ma_loai_ban'];
    					$this->table->addTables($ma_loai_ban);
					}
					include_once'views/table/add-tables.php';
					break;
				case 'details-table':
					if(isset($_GET['id_order'])){
						$id_bill=$_GET['id_order'];
						$rsDetails= $this->table->getDetailsTable($id_bill);
						$_SESSION['rsDetails'] = $rsDetails;
						
					}
					echo '<pre>';
						echo print_r($_SESSION['rsDetails']);
						echo '</pre>';
					include_once 'views/table/details-table.php';
            	default:
            		$rsBill= $this->table->getHoadon();
            		include_once 'views/table/list-tables.php';
            		break;
            }
        }
		
	}
 ?>