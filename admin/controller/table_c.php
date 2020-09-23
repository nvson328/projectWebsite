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
				case 'done':
					if (isset($_GET['id'])) {
						$id = $_GET['id'];
						$rsCheck = $this->table->checkFood($id);
						if(count($rsCheck) < 1){
							foreach($_SESSION['cart'] as $key => $value){
								$ma_thuc_don = $value['ma_thuc_don'];
								$don_gia = $value['gia_tien'];		
								$qty = $value['qty'];
								$tong_tien = $value['gia_tien']*$value['qty'];									
								$this->table->addFood($id, $ma_thuc_don, $don_gia, $qty, $tong_tien);
							}
						}
						else{
							foreach($rsCheck as $key => $check){								
								foreach($_SESSION['cart'] as $key => $value){								
									$ma_thuc_don = $value['ma_thuc_don'];
									$don_gia = $value['gia_tien'];												
									if($check['ma_thuc_don']==$ma_thuc_don){
										$check['so_luong'] += $value['qty'];
										$tong_tien = $check['so_luong']*$don_gia;
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
						// unset($_SESSION['cart']);
						// unset($_SESSION['sum']);	
						// header('location: index.php?page=list-tables');
                	}
				break;
					
				case 'order':
					if(isset($_GET['id_del'])){
						$id_del = $_GET['id_del'];
						unset($_SESSION['cart'][$id_del]);
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
						$_SESSION['id_order'] = $id_bill;
					}
					
					include_once 'views/table/details-table.php';
				break;
				case 'pay':
					if(isset($_SESSION['id_order'])){
						$this->table->thanhtoan($_SESSION['id_order']);	
					}
				break;
				case 'bills':
					if(isset($_GET['id_order'])){
						$id_bill=$_GET['id_order'];
						$rsDetails= $this->table->getDetailsTable($id_bill);
						$_SESSION['rsDetails'] = $rsDetails;
						$_SESSION['id_order'] = $id_bill;
					}
					$rsBill= $this->table->getHoadon();
					$_SESSION['rsBill']= $rsBill;
					include_once 'views/table/list-bills.php';
				break;
				case 'details-bills':
					if(isset($_GET['id_bill'])){
						$id_bill=$_GET['id_bill'];
						$rsDetails= $this->table->getDetailsTable($id_bill);
						$_SESSION['rsDetails'] = $rsDetails;
						echo "<pre>";
						print_r($_SESSION['rsDetails']);
						echo "</pre>";
					}
					
					include_once 'views/table/detail-bills.php';
				break;
				default:
				if(isset($_POST['submit_search'])){
					if(isset($_POST['key'])){
					$key = $_POST['key'];
					$rsSearch = $this->table->search($key);
					// $count= count($rsSearch);
					// echo "<pre>";
					// print_r($rsSearch);
					// echo "</pre>";
					$rsBill= $this->table->getHoadon_page();
					include_once 'views/table/search.php';
					}
				}
				else{
					$rsBill= $this->table->getHoadon_page();
					$_SESSION['rsBill']= $rsBill;
            		include_once 'views/table/list-tables.php';
					break;
				}
            }
        }
		
	}
 ?>