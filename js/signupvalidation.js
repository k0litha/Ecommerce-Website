function validate() {
    var fulnme = document.getElementById('fulnme').value;
	var user = document.getElementById('user').value;
	var pwd = document.getElementById('pwd').value;
	var rpwd = document.getElementById('rpwd').value;
	var eml = document.getElementById('eml').value;
	var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
	var phone = document.getElementById('phone').value;
	var bd = document.getElementById('bd').value;
	var dateformat = /^(0?[1-9]|[12][0-9]|3[01])[\/\-](0?[1-9]|1[012])[\/\-]\d{4}$/;
	var addrs = document.getElementById('addrs').value;
	var crednum = document.getElementById('crednum').value;
	var cvn = document.getElementById('cvn').value;
	var exp = document.getElementById('exp').value;
    var expformat = /^(0[1-9]|1[0-2])\/?([0-9]{4}|[0-9]{2})$/;
	
	
	if (fulnme == ""){ 
        alert("Full name should not be empty! ");
		return false;}
    if (fulnme.length<6){ 
        alert("Full name must contains more than 6 characters! ");
		return false;}
 
    if (user == ""){ 
        alert("Username should not be empty! ");
		return false;}
    if (user.length<5){ 
        alert("Username must contains more than 5 characters! ");
		return false;}
		
	if (eml == ""){ 
        alert("Email should not be empty! ");
		return false;}
    if (!eml.match(mailformat)){ 
        alert("Entered email is inavalid! ");
		return false;}

    if (pwd == ""){ 
        alert("Password should not be empty! ");
		return false;}
    if (pwd.length<5){ 
        alert("Password must contains more than 5 characters! ");
		return false;}
	if (pwd != rpwd){ 
        alert("Passwords does not match! ");
		return false;}


    if (phone == ""){ 
        alert("Phone number should not be empty! ");
		return false;}
		
	if ((phone.length!=10) || (isNaN(phone))){ 
        alert("Entered phone number is invalid!");
		return false;}	
 
	
    if (!bd.match(dateformat)){ 
        alert("Entered date is inavalid! ");
		return false;}
		
		
    if (addrs == ""){ 
        alert("Address should not be empty! ");
		return false;}
    if (addrs.length<10){ 
        alert("Address must contains more than 10 characters! ");
		return false;}
		
	if (crednum == ""){ 
        alert("Credit card number should not be empty! ");
		return false;}

    if ((crednum.length!=16) || (isNaN(crednum))){ 
        alert("Credit card number is invalid! ");
		return false;}	
	
	if (cvn == ""){ 
        alert("CVN should not be empty! ");
		return false;}
    if ((cvn.length!=3) || (isNaN(cvn))){ 
        alert("CVN is invalid! ");
		return false;}
	
	if (!exp.match(expformat)){ 
        alert("Entered EXP date is inavalid! ");
		return false;}
	
 
}