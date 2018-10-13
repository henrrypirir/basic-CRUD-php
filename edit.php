<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="./css/noramlize.css">
    <link rel="stylesheet" href="./css/index.css">
  </head>

  <?php include "functions.php"; ?>
  <?php $student = new Student(); ?>

  <?php
    if(isset($_POST['btn-update'])){
      $id = $_GET['id'];
      $first_name = $_POST['first_name'];
      $last_name = $_POST['last_name'];
      $age = $_POST['age'];
      $address = $_POST['address'];
      $gender = $_POST['gender'];
      $birthday = $_POST['birthday'];
      $nacionality = $_POST['nacionality'];
      $carne = $_POST['carne'];

      $student->update($id, $first_name, $last_name, $age, $address, $gender, $birthday, $nacionality, $carne);
    }
   ?>

  <body>
    <div class="container">
      <?php

      $id = $_GET['id'];
      $query = $student->getStudent($id);
      ?>
      <?php if ($query): ?>
        <h1 class="title">Perfil de <?php echo $query["nombres"] . " " . $query["apellidos"];?></h1>
        <form class="web-form" method="post">
          <div class="form-field">
            <label for="first_name">Nombres:</label>
            <input type="text" name="first_name" class="form-control" required maxlength="30" value="<?php echo $query["nombres"];?>">
          </div>
          <div class="form-field">
            <label for="last_name">Apellidos:</label>
            <input type="text" name="last_name" class="form-control" required maxlength="50" value="<?php echo $query["apellidos"];?>">
          </div>
          <div class="form-field">
            <label for="age">Edad:</label>
            <input type="number" name="age" class="form-control" required maxlength="2" value="<?php echo $query["edad"];?>">
          </div>
          <div class="form-field">
            <label for="address">Direccion:</label>
            <input type="text" name="address" class="form-control" required value="<?php echo $query["direccion"];?>">
          </div>
          <div class="form-field">
            <label for="gender" required>Genero:</label>
            <select name="gender">
              <?php if ($query["genero"] == "Masculino"): ?>
                <option value="Masculino" selected>Masculino</option>
              <?php else: ?>
                <option value="Masculino">Masculino</option>
              <?php endif; ?>
              <?php if ($query["genero"] == "Femenino"): ?>
                <option value="Femenino" selected>Femenino</option>
              <?php else: ?>
                <option value="Femenino">Femenino</option>
              <?php endif; ?>
            </select>
          </div>
          <div class="form-field">
            <label for="birthday">Fecha nacimiento:</label>
            <input type="date" name="birthday" class="form-control" required maxlength="10" value="<?php echo $query["fecha_nacimiento"];?>">
          </div>
          <div class="form-field">
            <label for="nacionality">Nacionalidad: </label>
            <input type="text" name="nacionality" class="form-control" required maxlength="13" value="<?php echo $query["nacionalidad"];?>">
          </div>
          <div class="form-field">
            <label for="carne">Carne:</label>
            <input type="text" name="carne" class="form-control" required maxlength="10" value="<?php echo $query["carne"];?>">
          </div>
          <button type="submit" class="btn btn-primary" name="btn-update">Guardar</button>
        </form>
      <?php else: ?>
        <h1 class="title">No se ha encontrado ningun alumno con el identificador <?php echo $id; ?>, verifique el id del usuario que desea editar</h1>
      <?php endif; ?>
   </div>
  </body>
</html>