<?php  
	session_start();

	// import controller.
	include_once 'server_c.php';
	$server =  new server_c();

	
	/*----------------------------------------
		checkbanan.
	------------------------------------------*/
	if (isset($_POST['action']) && $_POST['action'] == 'checkbanan') {

		$id = $_POST['id'];
		$result = $server->getma_ban_an($id);

		echo json_encode($result);
	}

	
	/*----------------------------------------
		Đặt bàn.
	------------------------------------------*/
	if (isset($_POST['action']) && $_POST['action'] == 'datban') {
		
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$banan = $_POST['banan'];
		$date = $_POST['date'];
		$time = $_POST['time'];

		// $_SESSION['phone'] = $phone;
		// $_SESSION['email'] = $email;

		$checkMember = $server->checkMember($email, $phone);
		
		if (count($checkMember) == 1) {
			foreach ($checkMember as $key => $val) {
				$id = $val['ma_khach_hang'];
				// cầm id này add order.
				// Thêm hóa đơn.
				$add = $server->addHoadon($id, $banan, $date, $time);
			}
		} else {
			// thêm thành viên.
			$addMember = $server->addKhachhang($name, $phone, $email);
			$id_Member = $_SESSION['lastID'];
			// Thêm hóa đơn.
			$add = $server->addHoadon($id_Member, $banan, $date, $time);

		}

		echo 'oke';

	}

?>