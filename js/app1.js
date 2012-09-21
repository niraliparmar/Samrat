$(document).ready(function(e){
						  
	$("#adduser #registerButton").click(function(){
		var firstname = $("#adduser #firstname").val();
		var lastname = $("#adduser #lastname").val();
		var address = $("#adduser #address").val();
		var contact_no = $("#adduser #contact_no").val();
		var datastring = 'firstname=' + firstname + '$lastname=' + lastname + '$address=' + address +  '$contact_no=' + contact_no;
		console.log(firstname);
		
		$.ajax({
		  type: "POST",
		  url: "add_user.php",
		  data: dataString,
		  success: function(){
		  		data = $.parseJSON(data);
				console.log(data);
		   }
		});					
	});
});