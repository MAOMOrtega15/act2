<?php
include("db.php");
$nombre = '';
$edad= '';
$correo='';
$numero='';
$nombreu='';
$contraseña='';
$direccion='';

if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM tbl_cliente WHERE id=$id";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $nombre = $row['nombre'];
    $edad = $row['edad'];
    $correo = $row['correo'];
    $numero = $row['numeroT'];
    $nombreu = $row['nombreU'];
    $contraseña = $row['contraseña'];
    $direccion = $row['direccion'];
  }
}

if (isset($_POST['update'])) {
  $id = $_GET['id'];
  $nombre= $_POST['nombre'];
  $edad = $_POST['edad'];
  $correo = $_POST['correo'];
  $numero = $_POST['numero'];
  $nombreu = $_POST['nombreu'];
  $contraseña = $_POST['contraseña'];
  $direccion = $_POST['direccion'];

  $query = "UPDATE tbl_cliente set nombre = '$nombre', edad = '$edad', correo = '$correo', numeroT = '$numero', nombreU = '$nombreu', contraseña = '$contraseña', direccion = '$direccion' WHERE id=$id";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Actualizado con Exito';
  $_SESSION['message_type'] = 'warning';
  header('Location: index.php');
}

?>
<?php include('includes/header.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST">
        <div class="form-group">
          <input name="nombre" type="text" class="form-control" value="<?php echo $nombre; ?>" placeholder="nombre">
        </div>
        <div class="form-group">
        <input name="edad" type="text "class="form-control" value="<?php echo $edad;?>"placeholder="edad">
        </div>
        <div class="form-group">
        <input name="correo" type="text"class="form-control" value="<?php echo $correo;?>"placeholder="correo">
        </div>
        <div class="form-group">
        <input name="numero" type="text"class="form-control" value="<?php echo $numero;?>"placeholder="numero telefono">
        </div>
        <div class="form-group">
        <input name="nombreu" type="text"class="form-control" value="<?php echo $nombreu;?>"placeholder="usuario">
        </div>
        <div class="form-group">
        <input name="contraseña" type="text"class="form-control" value="<?php echo $contraseña;?>"placeholder="contraseña">
        </div>
        <div class="form-group">
        <input name="direccion" type="text"class="form-control" value="<?php echo $direccion;?>"placeholder="direccion">
        </div>
        <button class="btn-success" name="update">
         Guardar
</button>
      </form>
      </div>
    </div>
  </div>
</div>
<?php include('includes/footer.php'); ?>