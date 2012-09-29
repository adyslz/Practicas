function validaForm(){
	 var flag=0;
	 var flag2=0;
	
	//checkbox
	for (i = 0; lcheck = checks[i]; i++) {
        if (lcheck.checked) {
            flag2=1;
        }
    }  
    
   if(flag2!=1){
   	document.getElementById("error_intereses").style.display = "block";
    	flag=0;
    }
   else{
    	document.getElementById("error_intereses").style.display = "none";
    	flag++;
    }
    	
	//contraseña
	if(document.my-form.pass.value =='' || !/\w{6,8}/.test(document.my-form.pass.value)){
		document.getElementById("error_pass").style.display="block";
		flag=0;
	}
	else{
		document.getElementById("error_pass").style.display="none";
		flag++;
	}
    	
   //nombre
	if(document.my-form.nombre.value.length =='' || !/([a-zA-Z]\w*)/.test(document.my-form.nombre.value)){
		document.getElementById("error_nombre").style.display = "inherit";
		flag=0;
	}
	else{
		document.getElementById("error_nombre").style.display = "none";
		flag++;
	}
	
	//direccion
   if(document.my-form.direccion.value.length ==''){
		document.getElementById("error_dir").style.display = "inherit";
		flag=0;
	}
	else{
		document.getElementById("error_dir").style.display = "none";
		flag++;
	}
	
	//telefono
	if(document.my-form.telefono.value.length =='' || !(?[0-9]{8,10}$/.test(document.my-form.telefono.value) ){
		document.getElementById("error_tel").style.display = "inherit";
		flag=0;
	}
	else{
		document.getElementById("error_tel").style.display = "none";
		flag++;
	}
	
	//fecha nac
	if(document.my-form.fecnac.value.length ==''){
		document.getElementById("error_fecnac").style.display = "inherit";
		flag=0;
	}
	else{
		document.getElementById("error_fecnac").style.display = "none";
		flag++;
	}
	
	//sexo
	if(document.my-form.fem.checked || document.my-form.mas.checked){
		document.getElementById("error_sexo").style.display = "inherit";
		flag=0;
	}
	else{
		document.getElementById("error_sexo").style.display = "none";
		flag++;
	}
	
	if(flag==7){
	document.registro.submit();
	}
	
}	