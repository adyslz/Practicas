contador=0;
function agregaNodos(){
	contador++;
	var divNvo = document.createElement("div");
	divNvo.id = "div"+contador; 
  	div_telefono.appendChild(divNvo); 
 
	var tel =document.createElement("input");	
	tel.type = "tel";
	tel.id = "tel"+contador;
	tel.name = "tel"+contador;
	tel.class = "tels";
	tel.style.marginLeft="87px";
	divNvo.appendChild(tel);
	
	var borrar = document.createElement("input"); 
  	borrar.type = "button"; 
  	borrar.value = "eliminar"; 
  	borrar.name = "div"+contador; 
  	borrar.onclick = function () {fnborrar(this.name)} 
  	divNvo.appendChild(borrar); 
}
function fnborrar(obj) {
  	div_telefono.removeChild(document.getElementById(obj)); 
}
