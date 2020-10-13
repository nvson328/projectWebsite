				<form action="" method="POST" role="form" enctype="multipart/form-data" >
					<legend style="color:black;font-weight: bold;">Thêm món ăn mới</legend>
				
					<div class="form-group">
						<label for="">Tên món ăn</label>
						<input type="text" name="ten_mon_an" required class="form-control" id="" placeholder="Nhập tên món ăn...">
					</div>
					<div class="form-group">
						<label for="">Danh mục</label>
						<select class="form-control" name="ma_danh_muc" id="">
                                    <?php
                                        foreach ($category as $key => $value){
                                    ?>
                                    <option value="<?php echo $value['ma_danh_muc'] ?>"><?php echo $value['ten_danh_muc'] ?></option>
                                        <?php } ?>
                                </select>
					</div>
					<div class="form-group">
						<label for="">Giá tiền</label>
						<input type="number"  name="gia_tien" required class="form-control" id="" placeholder="Nhập giá tiền...">
					</div>
					<div class="form-group">
						<label for="">Giới thiệu</label>
						<textarea class="form-control" id="" rows="3" required name="gioi_thieu" placeholder="Giới thiệu món ăn.."></textarea>
					</div>
			
					<div class="form-group">
						<label for="">Ảnh món ăn</label><br>
						<input type="file" name="anh_chi_tiet" style="display: none;" multiple=""  class="form-control" id="pic" class ="form-control" title = "Chọn ảnh" >
						<button class = "btn-pic" style="background-color: Transparent;border: none;"><img style="width:50px; height: 50px" src="../images/picture.png" alt=""></button>
						
					</div>
				
						<button  type="submit" name="submit"  class="btn btn-primary">Thêm mới</button>
					
					
				</form>		
				