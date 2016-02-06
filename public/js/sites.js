/** 
 This is Site JS
*/
$(document).ready(function(){


	$('#add_item').on('click',function(e){
		e.preventDefault();

		var _form_data = $('#frm_add_item').serialize(),
			_url		=$('#frm_add_item').attr('action') ;
		$.ajax({
			method:"POST",
			url:_url,
			data:_form_data,
			type:"JSON",
			success:function(data){
				
				$('#alert_message').html();
				var data = JSON.parse(data);//PARSE SERVER DATA AS ACTUAL JSON OBJECT
				
				if(parseInt(data.status) === 200){
					$('#alert_message').html(data.message);
				}else{
					$('#alert_message').html(data.message);
				}
			}
	});
	});


});

