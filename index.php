<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/index.css">
  </head>
  <?php include "connectionDB.php"; ?>
  <body>

    <table class="table table-bordered table-responsive" >
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Edad</th>
            <th>Dirección</th>
            <th>Genero</th>
            <th>Fecha de nacimiento</th>
            <th>Nacionalidad</th>
            <th>Carné</th>
            <th colspan="2" align="center">Opciones</th>
        </tr>
          <?php
          $query = $conn->query("SELECT * FROM alumno");
          $query->execute();
          foreach ($query as $student) {
            ?>
            <tr>
              <th><?php echo $student[1] ?></th>
              <th><?php echo $student[2] ?></th>
              <th><?php echo $student[3] ?></th>
              <th><?php echo $student[4] ?></th>
              <th><?php echo $student[5] ?></th>
              <th><?php echo $student[6] ?></th>
              <th><?php echo $student[7] ?></th>
              <th><?php echo $student[8] ?></th>
              <th><a href="edit.php?id=<?php echo $student[0] ?>">Editar</a></th>
              <th>Eliminar</th>
            </tr>
            <?php
          }
          ?>
    </table>

    <a href="add.php">Agregar</a>
  </body>
</html>