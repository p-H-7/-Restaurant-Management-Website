			
			function validate_signup(){
			var name = document.getElementById('fname');
			var email = document.getElementById('email');
			var pass1 = document.getElementById('passwd');
			var pass2 = document.getElementById('passwd1');
			var address = document.getElementsByClassName("address");
			var mobile = document.getElementById('phone');
			var pincode= document.regi.pincode.value;
			var ph = /^[7-9]+[0-9]/;
			
			if(pincode.length<6){
		   alert("Pincode must be at least 6 characters long");  
		   return false;
		   } 
			
			if(name.value == ""){
				alert("please enter name");
				name.focus();
				return false;
			}
			if(id.value == ""){
				alert("please enter id");
				id.focus();
				return false;
			}
			if(pass1.value == "" || pass1.value.length < 5){
				alert("password must contain 6 or more characters");
				pass1.focus();
				return false;
			}
			if(pass1.value != pass2.value){
				alert("password does not match please enter correctly");
				pass2.focus();
				return false;
			}
			if(!mobile.value.match(ph) || mobile.value.length != 10){
				alert("Invalid phone number");
				mobile.focus();
				return false;
			}
			
			
			if(address[0].value == ""){
				alert("please enter address");
				address[0].focus();
				return false;
			}
			
			mail = email.value;
			   var atpos = mail.indexOf("@");
  			  var dotpos = mail.lastIndexOf(".");
			  if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
       				 alert("please enter a valid e-mail address");
       				 email.focus();
        				return false;
   			}	
   			if(mobile.value== ""){
   				alert("Enter valid");
   				mobile.onfocus();
   				return false;
   			}
			
			return true;
			}

	
	
	
