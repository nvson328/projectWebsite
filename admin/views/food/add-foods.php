
<style>
#cke_up_images{
	width: 500px;
}
#price_f{
	width: 100px;
}
</style>
<form action="" method="POST">
	<div class="form-group">
		<label for="">Tên món ăn<span style="color: red;">*</span></label>
		<input type="text"><br>
		<label for="">Ảnh<span style="color: red;">*</span></label><br>
		<textarea name="" id="up_images" cols="30" rows="10"></textarea><br>
		<label for="">Giá tiền<span style="color: red;">*</span></label>
		<input type="number" id="price_f">
		<button type="submit" name="sm_add">Thêm mới</button>

	</div>
<script>
	CKEDITOR.replace('up_images');
</script>
</form>	
