<?php

include('db.php');

if (isset($_POST['saveTask'])) {
  $nombre = $_POST['nombre'];
  $edad = $_POST['edad'];
  $correo = $_POST['correo'];
  $numero = $_POST['numero'];
  $nombreu = $_POST['nombreu'];
  $contraseña = $_POST['contraseña'];
  $direccion = $_POST['direccion'];
  $query = "INSERT INTO tbl_cliente(nombre, edad, correo, numeroT, nombreU, contraseña, direccion) VALUES ('$nombre', '$edad', '$correo', '$numero', '$nombreu', '$contraseña', '$direccion')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Guardado Correctamente';
  $_SESSION['message_type'] = 'success';
  header('Location: index.php');

}

?>