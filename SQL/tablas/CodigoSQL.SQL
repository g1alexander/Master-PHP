//modificar nombre de la tabla

ALTER TABLE usuarios RENAME usuarios_modi;

//modificar nombre de una columna

ALTER TABLE usuarios CHANGE apellido apellidos varchar(80) null;

//modificar tabla sin cambiar el nombre de la misma

ALTER TABLE usuarios MODIFY apellido char(40) not null;

//añadir columna

ALTER TABLE usuarios ADD edad int(5) null;

//poner un campo unico a una columna ej "email", no se puede repetir

ALTER TABLE usuarios ADD CONSTRAINT up_email UNIQUE(email); 

//eliminar una columna

ALTER TABLE usuarios DROP edad;





CREATE TABLE usuarios(
id int(11) auto_increment not null,
nombre varchar(100) not null,
apellido varchar (100) not null,
email varchar (200) not null,
contraseña varchar (100) not null,
fecha date not null,
CONSTRAINT pk_usuarios PRIMARY KEY (id),
CONSTRAINT uq_email UNIQUE (email)
)ENGINE= InnoDB; 

CREATE TABLE categorias(
id int (11) auto_increment not null,
nombre varchar(100) not null,
CONSTRAINT pk_categorias PRIMARY KEY (id)
)ENGINE= InnoDB;

CREATE TABLE entradas(
id int (11) auto_increment not null,
usuario_id int (255) not null,
categoria_id int (255) not null,
titulo varchar (100) not null,
descripcion mediumtext, 
fecha date not null,
CONSTRAINT pk_entradas PRIMARY KEY (id),
CONSTRAINT fk_entrada_usuario FOREIGN KEY (usuario_id) REFERENCES usuarios(id),
CONSTRAINT fk_entrada_categoria FOREIGN KEY (categoria_id) REFERENCES categorias(id)
)ENGINE= InnoDB;
