<div class="container">
	<form action="" method='post'>
	<div class = "row">
		<div class="col-md-12">
			<table class="table" style="position: relative;">
				  <thead>
				    <tr>
				      <th>STT</th>
				      <th>Tên món</th>
				      <th>Ảnh</th>
				      <th>Giá tiền</th>
				      <th>Chức năng</th>
				    </tr>
				  </thead>
				<?php 
				// echo '<pre>';
				// print_r($rs_food);
				// echo '</pre>';
				$stt=0;
				foreach ($rs_food as $key => $value) {
					$stt++;
				?>

				  <tbody>
				    <tr>
				      <td style='padding-top: 40px; font-size: 20px;' scope="row"><?php echo $stt; ?></td>
				      <td style='padding-top: 40px; font-size: 20px;'><?= $value['ten_mon_an']?></td>
				      <td><img style="width:80px; height:80px;" src="publics-admin/images/<?= $value['anh_chi_tiet'] ?>" alt=""></td>
				      <td style='padding-top: 40px; font-size: 20px;'><?= number_format($value['gia_tien']).'<sup>đ</sup>'; ?></td>
					  <td style="position: relative;">
							<a onclick="return confirm('Bạn có thực sự muốn xóa món ăn này không?');" href="index.php?page=list-food&method=del&id=<?php echo $value['ma_ban']; ?>">
									<button style="position:absolute; top:40px; left:50px;"><i class="far fa-trash-alt"></i></button>
							</a>
							<a href="">
							<button style="position:absolute; top:40px; left:10px;" ><i class="fas fa-wrench" name="edit_food"></i></button>
							</a>
					  </td>
				    </tr>
				  </tbody>
				<?php
				}
				?>
			</table>
		</div>
		</form>
	</div>
 </div>