
<?php  

	if (isset($_SESSION['sentEmail']) && !empty($_SESSION['sentEmail'])) {
		
		foreach ($_SESSION['sentEmail'] as $key => $item) {

			$name 	= $item['ten_khach_hang'];
			$email  = $item['email'];
			$banan  = $item['ten_ban'];
			$date 	= $item['ngay_dat_ban'];
			$time  	= $item['gio_dat_ban'];
		}
	}



?>


<!-- nD -->

<?php  
	$htmlMail = '
		<div class="div" style="width: 550px; margin: 0 auto; border: solid 1px black; font-size: 25px; font-style: arial;">
		<div class="div" style="background-color:  #e75b1e; color: white; width: 100%; border: solid 1px black; text-align: center; ">
			<p>FOOD FUNDAY - Chi tiết đặt bàn</p>
		</div>
		<div class="div" style="width: 100%; font-size: 18px; padding: 5px;">
		<p>Xin chào ' .$name. ', <br>
			Quý khách đã đặt bàn ' .$banan. ' lúc ' .$time. ' ngày ' .$date. ' <br>
			Lưu ý nhà hàng sẽ chỉ giữ bàn trong 15 phút, mong quý khách đến đúng giờ. <br>
			Chúc quý khách có một bữa ăn ngon miệng. <br>
			Xin cảm ơn quý khách!!!</p> 
		</div>
	</div>';
	// $htmlMail = '<p>Aloo</p>';
?>



<?php  
	
	include_once 'PHPMailer/class.phpmailer.php';
	include_once 'PHPMailer/class.smtp.php';
	// Instantiation and passing true enables exceptions
	$mail = new PHPMailer(true);
	try {
	    //Server settings
	    $mail->CharSet = 'UTF-8';
	    $mail->SMTPDebug = 0; // Dev = 2 or default = 0;              // Enable verbose debug output
	    $mail->isSMTP();                                      // Send using SMTP
	    $mail->Host       = 'smtp.gmail.com';              // Set the SMTP server to send through
	    $mail->SMTPAuth   = true;                             // Enable SMTP authentication
	    $mail->Username   ='foodfunday.thaiha@gmail.com'; // Mail của admin.              // SMTP username
	    $mail->Password   ='foodfunday123';    // Pass của admin.                        // SMTP password
	    $mail->SMTPSecure = 'tls'; 
	    $mail->Port       = 587;   
	    //Recipients
	    $mail->setFrom('foodfunday.thaiha@gmail.com', 'Food Funday'); // 
	    $mail->addAddress($email, $name); // customer email.
	    $mail->addReplyTo('foodfunday.thaiha@gmail.com', 'Khách hàng của Food Funday'); //customer replies to email
	    // Content
	    $mail->isHTML(true);                                  // Set email format to HTML
	    $mail->Subject = 'Food Funday thông báo';  // Title email.
	    $mail->Body    = $htmlMail; // Content email.
	    $mail->send();
		/*------------------------------------------
					Unset all SESSION here.
		-------------------------------------------*/
		unset($_SESSION['sentEmail']);
		/*------------------------------------------
					Java location here.
		-------------------------------------------*/
		echo "<script>alert('Đặt bàn thành công!');";
		echo "window.location = 'index.php';";
		echo "</script>";

		
	} catch (Exception $e) {
	    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
	}
?>
<!-- $('#noti').slideDown();
		// 	$('#noti').delay(5000).slideUp(); -->