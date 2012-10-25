<?php
	require_once("bd.inc");
	$conexion = new mysqli($host,$user,$pass,$bd);

	if($conexion -> connect_error){
		die('Error de conexion'.$conexion -> errno." : ".$conexion -> error);
	}
	
	$consulta = "CREATE TABLE usuario(id_usuario int primary key auto_increment,
			nick varchar(20),password varchar(15), email varchar(150))engine=innodb character set=utf8 collate=utf8_spanish_ci";

	$conexion -> query($consulta) or 
		die ("Problema con la creacion de la tabla".$conexion -> errno." : ".$conexion -> error);
	
	$consulta2 = "CREATE TABLE evento(id_evento int primary key auto_increment,
			nombre varchar(40) not null,descripcion varchar(600) not null, precio money not null,
			capacidad varchar(15) not null, categoria varchar(20) not null, fecha date not null
			)engine=innodb character set=utf8 collate=utf8_spanish_ci";

	$conexion -> query($consulta2) or 
		die ("Problema con la creacion de la tabla".$conexion -> errno." : ".$conexion -> error);

	$conexion -> close();

	echo "Creando tablas en la base de datos";
?>