<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/index.css">
  </head>

  <?php include "functions.php"; ?>
  <?php $student = new Student(); ?>

  <body>
    <div class="container">
      <h1>Listado de Alumnos registrados.</h1>
      <table class="table table-bordered table-responsive" >
          <thead>
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
          </thead>
            <?php
            $query = $student->getStudent("");
            ?>
            <?php if ($query->rowCount() > 0): ?>
              <?php foreach ($query as $student): ?>
                <tr>
                  <td><?php echo $student["nombres"] ?></td>
                  <td><?php echo $student["apellidos"] ?></td>
                  <td><?php echo $student["edad"] ?></td>
                  <td><?php echo $student["direccion"] ?></td>
                  <td><?php echo $student["genero"] ?></td>
                  <td><?php echo $student["fecha_nacimiento"] ?></td>
                  <td><?php echo $student["nacionalidad"] ?></td>
                  <td><?php echo $student["carne"] ?></td>
                  <td><a href="edit.php?id=<?php echo $student[0] ?>">Editar</a></th>
                  <td>Eliminar</td>
                </tr>
              <?php endforeach; ?>
            <?php else: ?>
              <tbody>
                <tr>
                  <td colspan="10">
                    <h2>No existe ningun usuario aun registrado.</h2>
                  </td>
                </tr>
              </tbody>
            <?php endif; ?>
      </table>

      <a href="add.php" class="btn">Agregar</a>
    </div>
  </body>
</html>