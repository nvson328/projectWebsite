<div class="container">
	<form action="" method='post'>
	<div class = "row">
		<div class="col-md-12">
		<h2>Danh sách món ăn</h2>
			<table id="listFood" class="table" style="position: relative;">
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
							<a href="index.php?page=list-foods&method=del&id=<?= $value['ma_thuc_don']?>">
								<i title="Sửa" class="fas fa-wrench" style="position:absolute; top:40px; left:40px;" name="edit_food"></i>
							</a>
					  </td>
				    </tr>
				  </tbody>
				<?php
				}
				?>
			</table>
			<!--Phan trang -->
			<div style="text-align: center;">
                        <ul class="pagination">
                            
                            <?php
                                $page_f = $this->food->getFood();
                                $food_count = count($page_f);
                                $food_page = ceil($food_count/5);
                                // echo $bill_count.',,';
                                // echo $bill_page.',,';
                                
                                for($i=1;$i<= $food_page;$i++){
                                    // echo '<a style="margin:0 5px;" href="index.php?page=list-tables&method=list&trang='.$i.'">'.$i.'</a>';
                                    echo '<li class="page-item"><a class="page-link" href="index.php?page=list-foods&method=list&trang='.$i.'">'.$i.'</a></li>';
        
                                }
                            
                            ?>
                            
                            </ul>
                        </div>
		</div>
		</form>
	</div>
 </div>