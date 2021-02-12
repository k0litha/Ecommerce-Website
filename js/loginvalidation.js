function validate() {
    var user = document.getElementById('user').value;
	var pwd = document.getElementById('pwd').value;
 
    if ((user == "") || (pwd == "")){ 
        alert("Username/password should not be empty! ");
		return false;}
	
	
}

   