<form action="" method="POST" role="form">
							<legend>Sửa thông tin món ăn</legend>

							<div class="form-group">
								<label for="">Tên món ăn<span style="color: red;">*</span></label>
								<input type="text" required class="form-control" name="name" value="" />
							</div>
                            <div class="form-group">
                            <form action="http://localhost/process_file_upload.php" method="POST" enctype="multipart/form-data">
                                    <input type="file" name="upload_file_input" id="upload_file_input">
                                    <br>
                                    <input type="submit" value="Upload Image" name="submit">
                            </form>

                            </div>
							<div class="form-group">
								<label for="">Giá tiền<span style="color: red;">*</span></label>
								<input type="number" required class="form-control" name="value" value="">
							</div>

							<button type="submit" name="update_member" class="btn btn-primary">Cập nhật</button>
						</form>