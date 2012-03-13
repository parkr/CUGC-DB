document.onreadystatechange = function(){
	if(document.readyState == 'complete'){
		if(document.location.href.search('users/add') >= 0 || document.location.href.search('users/edit') >= 0){
			document.getElementById("UserConfirmPassword").parentNode.className += " required";
		}
	}
}