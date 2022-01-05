<?php
$servername = "localhost";
$username = "20202B102";
$password = "TAS-eKS4Ru";
$dbname = "20202b102";

$contraseña = sha1(sha1("55555"));

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "


  CREATE TABLE clientes(
  correo varchar(40),
  contraseña varchar(100),
  nombre varchar(50),
  telefono int(10),
  sexo varchar(20),
  direccion1 varchar(200),
  direccion2 varchar(200),
  ciudad varchar(20),
  PRIMARY KEY (correo)
  );

  CREATE TABLE ingredientes(
  codigo int(4) AUTO_INCREMENT,
  nombre varchar(30),
  precio int(5),
  PRIMARY KEY (codigo)
  );

  CREATE TABLE bebidas(
  codigo int(4) AUTO_INCREMENT,
  nombre varchar(30),
  precio int(5),
  PRIMARY KEY (codigo)
  );

  CREATE TABLE pizza(
  codigo int(4) AUTO_INCREMENT,
  nombre varchar(70),
  tamaño varchar(30),
  numporciones int(2),
  tipomasa varchar(30),
  basepizza varchar(30),
  personalizada varchar(2),
  PRIMARY KEY (codigo)
  );

  CREATE TABLE facturas(
  id int(10) AUTO_INCREMENT,
  correoclientes varchar(40),
  fecha varchar(20),
  valor int(6),
  direccion varchar(100),
  PRIMARY KEY (id),
  FOREIGN KEY (correoclientes) REFERENCES clientes(correo)
  );

  CREATE TABLE clientepizza(
  id int(10) AUTO_INCREMENT,
  correoclientes varchar(40),
  codigopizza int(4),
  PRIMARY KEY (id),
  FOREIGN KEY (correoclientes) REFERENCES clientes(correo),
  FOREIGN KEY (codigopizza) REFERENCES pizza(codigo)
  );

  CREATE TABLE pizzaingredientes(
  id int(10) AUTO_INCREMENT,
  codigoingredientes int(4),
  codigopizza int(4),
  PRIMARY KEY (id),
  FOREIGN KEY (codigoingredientes) REFERENCES ingredientes(codigo),
  FOREIGN KEY (codigopizza) REFERENCES pizza(codigo)
  );

  CREATE TABLE facturaspizza(
  id int(10) AUTO_INCREMENT,
  codigofacturas int(10),
  codigopizza int(4), 
  PRIMARY KEY (id),
  FOREIGN KEY (codigofacturas) REFERENCES facturas(id),
  FOREIGN KEY (codigopizza) REFERENCES pizza(codigo) 
  );

  CREATE TABLE combos(
  id int(10) AUTO_INCREMENT,
  codigobebida int(4), 
  codigopizza int(4),
  correocliente varchar(40),
  valor int(6),
  PRIMARY KEY (id),
  FOREIGN KEY (codigobebida) REFERENCES bebidas(codigo),
  FOREIGN KEY (correocliente) REFERENCES clientes(correo),
  FOREIGN KEY (codigopizza) REFERENCES pizza(codigo)
  );





  INSERT INTO clientes (correo, contraseña, nombre, telefono, sexo, direccion1, direccion2, ciudad)
  VALUES ('john@example.com', '". $contraseña."', 'jhon', '3224375120', 'Masculino', 'Cra 20 #3-2','','bucaramanga');

  INSERT INTO ingredientes (nombre, precio)
  VALUES ('Queso motsarella','2000');

  INSERT INTO ingredientes (nombre, precio)
  VALUES ('Queso parmesano','2000');

  INSERT INTO ingredientes (nombre, precio)
  VALUES ('Jamon','2000');

  INSERT INTO ingredientes (nombre, precio)
  VALUES ('Chorizo','2000');

  INSERT INTO ingredientes (nombre, precio)
  VALUES ('Peperoni','2000');

  INSERT INTO ingredientes (nombre, precio)
  VALUES ('Salami','2000');

  INSERT INTO ingredientes (nombre, precio)
  VALUES ('Carne','2000');

  INSERT INTO ingredientes (nombre, precio)
  VALUES ('Piña','2000');

  INSERT INTO bebidas (nombre, precio)
  VALUES ('Gaseosa personal','2000');

  INSERT INTO bebidas (nombre, precio)
  VALUES ('Gaseosa 3L','2000');

  INSERT INTO bebidas (nombre, precio)
  VALUES ('Limonada','2100');

  INSERT INTO bebidas (nombre, precio)
  VALUES ('Jugo Hit personal','2000');

  INSERT INTO bebidas (nombre, precio)
  VALUES ('Jugo hit 1.5 L','2300');

  INSERT INTO pizza (nombre, tamaño, numporciones, tipomasa, basepizza, personalizada)
  VALUES ('Pizza jamon y queso', 'Grande', '8', 'Masa normal', 'Salasa de tomate','no');

  INSERT INTO pizza (nombre, tamaño, numporciones, tipomasa, basepizza, personalizada)
  VALUES ('Pizza mexicana', 'Grande', '8', 'Masa normal', 'Salasa de tomate','no');

  INSERT INTO pizza (nombre, tamaño, numporciones, tipomasa, basepizza, personalizada)
  VALUES ('Pizza Hawaiana', 'Grande', '8', 'Masa normal', 'Salasa de tomate','no');

  INSERT INTO pizza (nombre, tamaño, numporciones, tipomasa, basepizza, personalizada)
  VALUES ('Pizza de pollo y champiñones', 'Grande', '8', 'Masa normal', 'Salasa de tomate','no');

  INSERT INTO pizza (nombre, tamaño, numporciones, tipomasa, basepizza, personalizada)
  VALUES ('Pizza tropical', 'Grande', '8', 'Masa normal', 'Salasa de tomate','no');

  INSERT INTO facturas (correoclientes, fecha, valor)
  VALUES ('john@example.com', '3/05/2000', '20000');

  INSERT INTO clientepizza (correoclientes, codigopizza)
  VALUES ('john@example.com', '2');

  INSERT INTO pizzaingredientes(codigoingredientes, codigopizza)
  VALUES ('3', '1');

  INSERT INTO pizzaingredientes(codigoingredientes, codigopizza)
  VALUES ('1', '1');

  INSERT INTO pizzaingredientes(codigoingredientes, codigopizza)
  VALUES ('1', '2');

  INSERT INTO pizzaingredientes(codigoingredientes, codigopizza)
  VALUES ('4', '2');

  INSERT INTO pizzaingredientes(codigoingredientes, codigopizza)
  VALUES ('7', '2');

  INSERT INTO pizzaingredientes(codigoingredientes, codigopizza)
  VALUES ('1', '3');

  INSERT INTO pizzaingredientes(codigoingredientes, codigopizza)
  VALUES ('3', '3');

  INSERT INTO pizzaingredientes(codigoingredientes, codigopizza)
  VALUES ('8', '3');

  INSERT INTO pizzaingredientes(codigoingredientes, codigopizza)
  VALUES ('2', '4');

  INSERT INTO pizzaingredientes(codigoingredientes, codigopizza)
  VALUES ('5', '4');

  INSERT INTO pizzaingredientes(codigoingredientes, codigopizza)
  VALUES ('6', '5');

  INSERT INTO pizzaingredientes(codigoingredientes, codigopizza)
  VALUES ('8', '2');

  INSERT INTO facturaspizza (codigofacturas,codigopizza)
  VALUES ('1', '2');

  INSERT INTO combos (codigobebida, codigopizza, correocliente, valor)
  VALUES ('1', '2', 'john@example.com', '20000');








  ";

  // use exec() because no results are returned
  $conn->exec($sql);
  echo "New record created successfully";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>











































