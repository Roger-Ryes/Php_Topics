# CREAR BD#
CREATE DATABASE notas_master ;

# USAR DB#
USE notas_master;   

# TABLA USUARIOS #
CREATE TABLE usuarios (
id      int(255) auto_increment not null,
nombre  varchar(100) not null,
apellidos varchar(200) not null,
email     varchar(255) not null,
password  varchar(255) not null,
fecha     date not null,
CONSTRAINT pk_usuarios PRIMARY KEY (id),
CONSTRAINT uq_email UNIQUE(email)
)ENGINE = InnoDb;
    # ENGINE = InnoDb; indicando la forma de almacenar los datos en mySQL, es decir #
    #  indico que haya relaciones en cada uno de nuestras tablas #
    # InnoDb -> permite soporte de transacciones #
    # MyISAM -> Tener una mayor velocidad al recuperar datos #
    
# TABLA NOTAS#
CREATE TABLE notas(
id          int(255) auto_increment not null,
usuario_id  int(255) not null,
titulo      varchar(255) not null,
descripcion MEDIUMTEXT,
fecha       date not null,
CONSTRAINT pk_notas PRIMARY KEY (id),
CONSTRAINT fr_notas FOREIGN KEY(usuario_id) REFERENCES usuarios(id)
)ENGINE=InnoDB;
