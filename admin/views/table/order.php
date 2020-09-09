<div class="container">
	
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
                      			<input style='margin-top: 30px;width: 40px; font-size: 20px;' id="btn_qty_<?php echo $value['ma_thuc_don']; ?>" type="number" value="1" min="1" max="50"/>
                    		</td>
					      <td><button onclick="addOrders(<?= $value['ma_thuc_don'] ?>,<?= $_GET['id'] ?>)" id="btn_<?= $value['ma_thuc_don'] ?>" value="<?= $value['ma_thuc_don'] ?>" style='margin-top: 30px; font-size: 20px;' >Chọn</button></td>
					    </tr>
					  </tbody>
					<?php
					}
					?>
				</table>
			</div>
			<div id="load-table-order" class="col-md-4">
				<table id="table-order" style="margin-left:50px;" class="table" border="1">
				  <thead class="thead-dark">
				    <tr>
				      <th>Món ăn</th>
				      <th>Số lượng</th>
					  <th>Tổng tiền</th>
					  <th>Chức năng</th>
				    </tr>
				  </thead>

				  <tbody>
				  <?php if(!isset($_SESSION['cart']) && empty($_SESSION['cart'])){

				  }
				else{
				  $_SESSION['sum'] = 0;
				   foreach ($_SESSION['cart'] as $key => $value){ 
					  $_SESSION['sum'] += $value['gia_tien']*$value['qty'];
				?>
				
				    <tr>
				    		
					      <td><?= $value['ten_mon_an'] ?></td>
					      <td><?php echo $value['qty']; ?></td>
					      <td><?= number_format($value['gia_tien']*$value['qty']).'<sup>đ</sup>' ?></td>
					    	<td><button onclick="del(<?= $value['ma_thuc_don']?>,<?= $_GET['id'] ?>)" id="btn_del_<?=$value['ma_thuc_don'] ?>" value="<?= $value['ma_thuc_don']?>"><i class="far fa-window-close"></i></button></td>
					</tr>
					
					<?php }}?>
					<tr>
						<td colspan="4"><label style="margin-left:50px;">Thành tiền: <?php if(isset($_SESSION['sum'])){echo number_format($_SESSION['sum']).'<sup>đ</sup>';}else{echo "0<sup>đ</sup>";}  ?></label><br></td>
					</tr>
				  </tbody>
				</table>
				
			</div>
			
			<button style="margin-left:200px;" id="btn-done" onclick="done(<?= $_GET['id'] ?>)">Đồng ý</button>
		</div>
	
 </div>