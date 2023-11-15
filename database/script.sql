
CREATE TABLE tbl_cliente(
  id INT(11) PRIMARY KEY AUTO_INCREMENT,
  title VARCHAR(255) NOT NULL,
  description TEXT,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

DESCRIBE tbl_cliente;

CREATE TABLE tbl_cliente(
  id INT(11) PRIMARY KEY AUTO_INCREMENT,
  nombre VARCHAR(255) NOT NULL,
  edad int(10),
  correo VARCHAR(255),
  numeroT VARCHAR(12),
  nombreU VARCHAR(255),
  contraseña VARCHAR(15),
  direccion VARCHAR(255),
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

DESCRIBE tbl_cliente;