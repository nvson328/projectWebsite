$(document).ready(function(){

});

function addOrders(id_food, id_order){
	var id_food = $('#btn_' + id_food).val();
	var qty = $('#btn_qty_' + id_food).val();
	$.get('index.php?page=list-tables&method=order',{id_food : id_food,qty : qty}, function(){
		$("#load-table-order").load('index.php?page=list-tables&method=order&id='+ id_order +' #table-order');
	});

}
function detailsBill(id_order){
	var id_order = $('#btn_details_' + id_order).val();
	$.get('index.php?page=list-tables&method=details-table',{id_order : id_order}, function(){
		$("#load-table-order-detail").load('index.php?page=list-tables&method=list #table-order-detail');
	});
}
function del(id_del, id_order){
	var id_del = $('#btn_del_' + id_del).val();
	$.get('index.php?page=list-tables&method=order',{id_del : id_del}, function(){
		$("#load-table-order").load('index.php?page=list-tables&method=order&id='+ id_order +' #table-order');
	});
}
function done(id){
	$.get('index.php?page=list-tables&method=done',{id : id }, function(){
		alert('Gọi món thành công!')  ;
		location.href = 'index.php?page=list-tables';
		
	});
	
}
// function del(id_delFood){
// 	var id_delFood = $('#btn_delFood_' + id_delFood).val();
// 	$.get('index.php?page=list-foods&method=list',{id_delFood : id_delFood}, function(){
// 		$("#load-listFood").load('index.php?page=list-foods&method=list&id='+ id_delFood +' #table-order');
// 	});
// }