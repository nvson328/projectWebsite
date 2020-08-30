<div class="container">
	<form action="" method='post'>
	<div class = "row">
		<div class="col-md-8">
			<table class="table">
				  <thead>
				    <tr>
				      <th>STT</th>
				      <th>Tên món</th>
				      <th>Ảnh</th>
				      <th>Giá tiền</th>
				      <th>Số lượng</th>
				      <th></th>
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
				      <th style='padding-top: 40px; font-size: 20px;' scope="row"><?php echo $stt; ?></th>
				      <td style='padding-top: 40px; font-size: 20px;'><?= $value['ten_mon_an']?></td>
				      <td><img style="width:80px; height:80px;" src="publics-admin/images/<?= $value['anh_chi_tiet'] ?>" alt=""></td>
				      <td style='padding-top: 40px; font-size: 20px;'><?= number_format($value['gia_tien']).'<sup>đ</sup>'; ?></td>
				      <td>
				      	<input  type="number" min="0" max="100" value="0" style='width: 50px; margin-top: 30px; font-size: 20px;'>
				      </td>
				      <td><button style='margin-top: 30px; font-size: 20px;'>Chọn</button></td>
				    </tr>
				  </tbody>
				<?php
				}
				?>
			</table>
		</div>
		<div class="col-md-4">
			<table style="margin-left:50px;" class="table" border="1">
			  <thead class="thead-dark">
			    <tr>
			      <th>Món ăn</th>
			      <th>Số lượng</th>
			      <th>Tổng tiền</th>
			    </tr>
			  </thead>
			  <tbody>
			    <tr>
			      <td>Bánh mì bơ tỏi</td>
			      <td>3</td>
			      <td>90,000</td>
				</tr>
				<tr>
			      <td>Salad</td>
			      <td>2</td>
			      <td>120,000</td>
				</tr>
				<tr>
			      <td>Cánh gà BBQ</td>
			      <td>3</td>
			      <td>240,000</td>
			    </tr>
			  </tbody>
			</table>
			<label style="margin-left:50px;">Thành tiền: </label><br>
			<button style="margin-left:200px;" type="submit" name="order_done">Đồng ý</button>
		</div>
		</form>
	</div>
 </div>