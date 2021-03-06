$(document).ready(function(){
    "use strict";


    // chon ban an.

    $(document).on('click', '.single', function() {
        $(this).addClass('active');
    });

    /*------------------------------
    	Loại bàn ăn.
    -------------------------------*/
    $('#table').on('change',function(){

    	var id = $(this).val();
    	var action = 'checkbanan';

    	$.ajax({
    		url: 'server/server.php',
    		type: 'POST',
    		dataType: 'json',
    		data: {id: id, action: action },
    	})
    	.done(function(data) {
    
    		var result = '';
    		$.each(data,function(index, el) {
    			result += `<div class="col-lg-4">
                        <div class="single">
                            <label class="div_ban_an">
                                <img id="img_ban_an" class="select_color" src="images/ban_an.png">
								<input type="radio" name="banan" id="radio_ban_an" value="`+ el['ma_ban'] +`">`+ el['ten_ban'] +`
								<span class=""></span>
                            </label> 
                        </div> 
                    </div>`;
    		});

    		$('#data_table').html(result);
    	})
    	.fail(function() {
    		console.log("error");
    	})
    	
    });


    
});

/*------------------------------
   Đặt bàn
-------------------------------*/
function datban() {

	var name 	= $('#name').val();
	var email 	= $('#email').val();
	var phone 	= $('#phone').val();
	var banan 	= $('input[name="banan"]:checked').val();
	var date    = $('#date-picker').val();
	var time    = $('#time-picker').val();
	var action  = 'datban';
	
	$.post('server/server.php', {action: action, name: name, email: email, phone: phone, banan: banan, date: date, time: time}, function(data) {
	
        data = parseInt(data);
        if (data == 1) {
            window.location = 'index.php?page=sentmail';
        }
	});
}