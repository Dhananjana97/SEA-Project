var i = ;
document.onload(function(){alert("Hello");});
function addUploadField(){
	var x = createElement("INPUT");
	x.setAttribute("Name", "file" + i);
	x.setAttribute("type", "file");
	x.setAttribute("style", "height:30px;");
	x.setAttribute("font-size", "20px");
	document.getElementById("uploadFiles").appendChild(x);
	i++;
}