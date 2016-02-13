/** 
 This is Site JS
*/
$(document).ready(function(){

	getItemData();
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

	function getItemData(){
		$.ajax({
			method:"GET",
			url:'service/items/get',
			type:"JSON",
			success:function(data){
				
				var data = JSON.parse(data);//PARSE SERVER DATA AS ACTUAL JSON OBJECT
				
				if(parseInt(data.status) === 200){
					itemTmeplate(data.items)
				}else{
					console.log("Empty List")
				}
			}
		});
	}

	function itemTmeplate(itemList){
		var _html ='';
		for(var i =0;i< itemList.length;i++){
			var item = itemList[i];
	
		 	_html +='<div class="grid_1_of_4 images_1_of_4">';
			_html +='<h4><a href="preview.html">'+item.item_title+'</a></h4>';
			_html +='<a href="/item/show/'+item.item_title+'"><img src="'+item.item_title+'" alt="" /></a>'
			_html +='<div class="price-details">';	  
			_html +='<div class="price-number">';		  
			_html +='<p><span class="rupees">'+item.price+'</span></p>';	       
			_html +='</div><div class="add-cart"><h4><a href="preview.html">More Info</a></h4></div>';				
			_html +='<div class="clear"></div></div>';		    
			_html +='</div>';	

		};
		
		$("#items_list").html(_html);       										
									
							     
							 
									 
				
					 
	}

});

