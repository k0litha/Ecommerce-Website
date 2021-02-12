function validate() {
    var name = document.getElementById('name').value;
	var add = document.getElementById('add').value;
 
    if (name == ""){ 
        alert("Recievers name should not be empty! ");
		return false;}
    if (name.length<5){ 
        alert("Recievers name must contains more than 5 characters! ");
		return false;}
	
    if (add == ""){ 
        alert("Recievers address should not be empty! ");
		return false;}
    if (add.length<10){ 
        alert("Recievers address must contains more than 5 characters! ");
		return false;}
	
}

   