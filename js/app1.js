$(document).ready(function(e){
						   
	$('#registerButton').click(function(){
		var form = $('#formElem1').serialize();
		console.log(form);
		
		
		$.ajax({
		  type: "POST",
		  url: "add_user.php",
		  data: form,
		  success: function(data){
		  		data = $.parseJSON(data);
				console.log(data);
		   }
		});					
	});
});