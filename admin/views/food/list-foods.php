<div class="container">
	<form action="" method='post'>
	<div class = "row">
		<div class="col-md-10">
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
				      <th scope="row"><?php echo $stt; ?></th>
				      <td style='padding-top: 40px; font-size: 20px;'><?= $value['ten_mon_an']?></td>
				      <td><img src="publics-admin/images/<?= $value['anh_chi_tiet'] ?>" alt=""></td>
				      <td style='padding-top: 40px; font-size: 20px;'><?= number_format($value['gia_tien']).'<sup>đ</sup>'; ?></td>
				      <td>
				      	<input type="number" min="0" max="100" value="0" style='width: 50px;'>
				      </td>
				    </tr>
				  </tbody>
				<?php
				}
				?>
			</table>
		</div>
		<div class="col-md-2">

				<button  class="btn btn-primary" name="add_food" >Thêm món ăn mới</button><br><br>
				<button  class="btn btn-primary" name="del_food" >Xóa món ăn</button><br><br>
				<button  class="btn btn-primary" name="edit_member" >Sửa món ăn</button>

			
		</div>
		</form>
	</div>
 </div>