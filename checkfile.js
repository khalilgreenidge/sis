function check(){
	var btn = document.getElementById("uploadBtn");
	var file = document.getElementById("uploadFile").value = btn.value;
	var msg = document.getElementById("message");
	
	
	if(file != ""){
	
		if( file.slice(-3) == "doc" || file.slice(-4) == "docx" || file.slice(-3) == "xls" || file.slice(-3) == "ppt" ){
			msg.innerHTML	= "";
			msg.style.backgroundColor = "#ffffff";
			return true;
			
		}
		else{
			msg.style.backgroundColor = "#a94442";
			msg.innerHTML	= "Your file must be a .doc, .docx, .xls or .ppt.";
			return false;
		}
	
	}
	else{
		return true;
	}
	
}

function checka1(){
	var btn = document.getElementById("uploadBtn");
	var file = document.getElementById("uploadFile").value = btn.value;
	var msg = document.getElementById("message");
	
	
	if(file != ""){
	
		if( file.slice(-3) == "doc" || file.slice(-4) == "docx" || file.slice(-3) == "xls" || file.slice(-3) == "ppt" ){
			msg.innerHTML	= "";
			msg.style.backgroundColor = "#ffffff";
			return true;
			
		}
		else{
			msg.style.backgroundColor = "#a94442";
			msg.innerHTML	= "Your file must be a .doc, .docx, .xls or .ppt.";
			return false;
		}
	
	}
	else{
		return true;
	}
	
}
