 var errors = [];
	function report() {
				var name=document.forms["formElem3"]["username"].value;
				var month=document.forms["formElem3"]["month"].value;
				var win=window.open('monthly_report.php?n='+name+'& m='+month+'','mywin',
	'left=20,top=20,width=600,height=500,toolbar=1,resizable=0');
	window.close();
			return false;
	}
		 
	function validateForm(){
		var firstname=document.forms["formElem1"]["firstname"].value;
		if (firstname==null || firstname==""){
			errors[errors.length] = "First Name must be filled out.";
		}
		var lastname=document.forms["formElem1"]["firstname"].value;
		if (lastname==null || lastname==""){
			errors[errors.length] = "Last Name must be filled out.";
		}
		var address=document.forms["formElem1"]["firstname"].value;
		if (address==null || address==""){
 			errors[errors.length] = "Address must be filled out.";
  		}
  		var contact_no=document.forms["formElem1"]["firstname"].value;
		if (contact_no==null || contact_no==""){
 			errors[errors.length] = "Contact Number must be filled out.";
  		}
		if (errors.length > 0) {
			reportErrors(errors);
		  	return false;
 		}
 		return true;
	}

	function reportErrors(errors){
		var msg = "Please Enter Valide Data...\n";
		for (var i = 0; i<errors.length; i++) {
			var numError = i + 1;
		  	msg += "\n" + numError + ". " + errors[i];
		}
		alert(msg);
	}