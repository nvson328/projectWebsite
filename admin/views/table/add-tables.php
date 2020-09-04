
<form action="" method="POST" role="form">
							<legend>Thêm mới bàn ăn</legend>

							<div class="form-group">
                                <label for="">Loại bàn<span style="color: red;">*</span></label>
                                <select name="ma_loai_ban" id="">
                                    <?php
                                        foreach ($rsTables as $key => $value){
                                    ?>
                                    <option value="<?php echo $value['ma_loai_ban'] ?>"><?php echo $value['ten_loai_ban'] ?></option>
                                        <?php } ?>
                                </select>
							</div>
							<button type="submit" name="add-table" class="btn btn-primary">Thêm mới</button>
						</form>