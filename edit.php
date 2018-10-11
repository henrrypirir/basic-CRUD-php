<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="./css/noramlize.css">
    <link rel="stylesheet" href="./css/index.css">
  </head>

  <?php include "connectionDB.php"; ?>

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

      if(isset($first_name) && !empty($first_name) &&
      isset($last_name) && !empty($last_name) &&
      isset($age) && !empty($age) &&
      isset($address) && !empty($address) &&
      isset($gender) && !empty($gender) &&
      isset($birthday) && !empty($birthday) &&
      isset($nacionality) && !empty($nacionality) &&
      isset($carne) && !empty($carne) &&
      isset($id) && !empty($id)){
        try{
          $query = $conn->prepare("UPDATE alumno SET nombres=:first_name, apellidos=:last_name, edad=:age, direccion=:address, genero=:gender, fecha_nacimiento=:birthday, nacionalidad=:nacionality, carne=:carne WHERE id=:id");
          $query->bindparam(":id" , $id);
          $query->bindparam(":first_name" , $first_name);
          $query->bindparam(":last_name" , $last_name);
          $query->bindparam(":age" , $age);
          $query->bindparam(":address" , $address);
          $query->bindparam(":gender" , $gender);
          $query->bindparam(":birthday" , $birthday);
          $query->bindparam(":nacionality" , $nacionality);
          $query->bindparam(":carne" , $carne);
          $query->execute();
        }
        catch(PDOException $e){
          echo $e->getMessage();
        }
      }
    }
   ?>

  <body>
    <div class="container">
    <?php
    $id = $_GET['id'];
    $query = $conn->query("SELECT * FROM alumno WHERE id=1");
    $query->execute();
    foreach ($query as $student) {
    ?>
      <form class="web-form" method="post">
        <div class="form-field">
          <label for="first_name">Nombres:</label>
          <input type="text" name="first_name" class="form-control" required maxlength="30" value="<?php echo $student["nombres"];?>">
        </div>
        <div class="form-field">
          <label for="last_name">Apellidos:</label>
          <input type="text" name="last_name" class="form-control" required maxlength="50" value="<?php echo $student["apellidos"];?>">
        </div>
        <div class="form-field">
          <label for="age">Edad:</label>
          <input type="number" name="age" class="form-control" required maxlength="2" value="<?php echo $student["edad"];?>">
        </div>
        <div class="form-field">
          <label for="address">Direccion:</label>
          <input type="text" name="address" class="form-control" required value="<?php echo $student["direccion"];?>">
        </div>
        <div class="form-field">
          <label for="gender" required>Genero:</label>
          <select name="gender">
            <?php if ($student["genero"] == "Masculino"): ?>
              <option value="Masculino" selected>Masculino</option>
            <?php else: ?>
              <option value="Masculino">Masculino</option>
            <?php endif; ?>
            <?php if ($student["genero"] == "Femenino"): ?>
              <option value="Femenino" selected>Femenino</option>
            <?php else: ?>
              <option value="Femenino">Femenino</option>
            <?php endif; ?>
          </select>
        </div>
        <div class="form-field">
          <label for="birthday">Fecha nacimiento:</label>
          <input type="date" name="birthday" class="form-control" required maxlength="10" value="<?php echo $student["fecha_nacimiento"];?>">
        </div>
        <div class="form-field">
          <label for="nacionality">Nacionalidad: </label>
          <input type="text" name="nacionality" class="form-control" required maxlength="13" value="<?php echo $student["nacionalidad"];?>">
        </div>
        <div class="form-field">
          <label for="carne">Carne:</label>
          <input type="text" name="carne" class="form-control" required maxlength="10" value="<?php echo $student["carne"];?>">
        </div>
        <button type="submit" class="btn btn-primary" name="btn-update">Guardar</button>
      </form>
    <?php
    }
     ?>

   </div>
  </body>
</html>