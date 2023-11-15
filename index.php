<?php include("db.php"); ?>

<?php include('includes/header.php'); ?>

<main class="container p-4">
  <div class="row">
    <div class="col-md-4">
      <!-- MENSAGES -->

      <?php if (isset($_SESSION['message'])) { ?>
      <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
        <?= $_SESSION['message']?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php session_unset(); } ?>

      <!-- ADD TASK FORM -->
      <div class="card card-body">
        <form action="saveTask.php" method="POST">

          <div class="form-group">
            <input type="text" name="nombre" class="form-control" placeholder="nombre" autofocus>
          </div>
          <div class="form-group">
            <input type="text" name="edad"  class="form-control" placeholder="edad" autofocus>
          </div>
          <div class="form-group">
            <input type="text" name="correo" class="form-control" placeholder="correo Electronico" autofocus>
          </div>
          <div class="form-group">
            <input type="text" name="numero" class="form-control" placeholder="num Telefono" autofocus>
          </div>
          <div class="form-group">
            <input type="text" name="nombreu" class="form-control" placeholder="nombre usuario" autofocus>
           </div>
          <div class="form-group">
            <input type="text" name="contraseña" class="form-control" placeholder="contraseña" autofocus>
          </div>
          <div class="form-group">
            <input type="text" name="direccion" class="form-control" placeholder="direccion" autofocus>
          </div>

          <input type="submit" name="saveTask" class="btn btn-success btn-block" value="Guardar">
        </form>
      </div>
    </div>
    <div class="col-md-8">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Nombre(s)</th>
            <th>Edad</th>
            <th>Correo</th>
            <th>Numero T.</th>
            <th>Nombre usuario</th>
            <th>Contraseña</th>
            <th>Direccion</th>
            <th>Fecha</th>
            <th>Accion</th>
          </tr>
        </thead>
        <tbody>

          <?php
          $query = "SELECT * FROM tbl_cliente";
          $result_tasks = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>
            <td><?php echo $row['nombre']; ?></td>
            <td><?php echo $row['edad']; ?></td>
            <td><?php echo $row['correo']; ?></td>
            <td><?php echo $row['numeroT']; ?></td>
            <td><?php echo $row['nombreU']; ?></td>
            <td><?php echo $row['contraseña']; ?></td>
            <td><?php echo $row['direccion']; ?></td>
            <td><?php echo $row['created_at']; ?></td>
            <td>
              <a href="edit.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
                <i class="fas fa-marker"></i>
              </a>
              <a href="deleteTask.php?id=<?php echo $row['id']?>" class="btn btn-danger">
                <i class="far fa-trash-alt"></i>
              </a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</main>

<?php include('includes/footer.php'); ?>