function valida(){
	if(document.formulario.usuario.value.length==0||document.formulario.correo.value.length==0||document.formulario.pass.value.length==0||document.formulario.confpass.value.length==0){
		document.getElementById("divVacio").style.display = "block";
		//document.getElementById('IdDiv').innerHTML = 'Hola, soy yo';
	}
	else
		document.getElementById("IdDiv").style.display = "none";
/*	else{
		document.getElementById("IdDiv").style.display = "none";
	}
	if(document.formulario.correo.value.length==0){
		document.getElementById("IdDiv").style.display = "block";
	}
	else{
		document.getElementById("IdDiv").style.display = "block";
	}
	if(document.formulario.pass.value.length==0){
		document.getElementById("IdDiv").style.display = "inline";
	}
	else{
		document.getElementById("IdDiv").style.display = "inline";
	}
	if(document.formulario.confpass.value.length==0){
		document.getElementById("IdDiv").style.display = "block";
	}
	else{
		document.getElementById("IdDiv").style.display = "none";
	}
	*/
}

function limpia(){
	document.getElementById("IdDiv").style.display = "none";
}