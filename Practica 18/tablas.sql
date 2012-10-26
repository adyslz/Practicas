
CREATE TABLE usuario(
	id_usuario int primary key auto_increment,
	nick varchar(20) not null,
	password varchar(15) not null,
	email varchar(150) not null,
	tipo_usuario (15) not null
)engine=innodb character set=utf8 collate=utf8_spanish_ci";

CREATE TABLE evento(
	id_evento int primary key auto_increment,
	nombre varchar(40) not null,
	descripcion varchar(600) not null,
	precio money not null,
	capacidad varchar(15) not null,
	categoria varchar(20) not null,
	fecha date not null,
	estado varchar(15) not null
)engine=innodb character set=utf8 collate=utf8_spanish_ci;
