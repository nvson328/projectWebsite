<form action="" method="POST" role="form" enctype="multipart/form-data" >
					<legend style="color:black;font-weight: bold;">Sửa món ăn</legend>
				
					<div class="form-group">
						<label for="">Tên món ăn</label>
						<input type="text" name="ten_mon_an" value="<?php if(isset($_SESSION['nameFood'])){ echo $_SESSION['nameFood']; } ?>" required class="form-control" id="" placeholder="Nhập tên món ăn...">
					</div>
					<div class="form-group">
						<label for="">Mã danh mục</label>
						<select name="ma_danh_muc" id="">
                                    <?php
                                        foreach ($category as $key => $value){
                                    ?>
                                    <option <?php if($_SESSION['category'] == $value['ma_danh_muc']){echo "selected";} ?> value="<?php echo $value['ma_danh_muc'] ?>"><?php echo $value['ten_danh_muc'] ?></option>
                                        <?php } ?>
                                </select>
					</div>
					<div class="form-group">
						<label for="">Giá tiền</label>
						<input type="number" required value="<?php if(isset($_SESSION['price'])){ echo $_SESSION['price']; } ?>" name="gia_tien" class="form-control" id="" placeholder="">
					</div>
					
					<div class="form-group">
						<label for="">Ảnh món ăn</label>
						<input type="file" name="anh_chi_tiet" multiple="" class="form-control" id="">
					</div>
					
					<button type="submit" name="btn_edit"  class="btn btn-primary">Sửa</button>
				</form>		
		