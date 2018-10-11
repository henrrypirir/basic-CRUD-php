<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/index.css">
  </head>

  <?php include "connectionDB.php"; ?>

  <?php
    if(isset($_POST['btn-save'])){
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
      isset($carne) && !empty($carne)){
        try{
          $query = $conn->prepare("INSERT INTO alumno (nombres, apellidos, edad, direccion, genero, fecha_nacimiento, nacionalidad, carne) VALUES(:first_name, :last_name, :age, :address, :gender, :birthday, :nacionality, :carne)");
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
          echo $e->getMessage();;
        }
      }
    }
   ?>
  <body>
    <div class="container">
      <h1 class="title">Agregar usuario nuevo.</h1>
      <form class="web-form" method="post">
        <div class="form-field">
          <label for="first_name">Nombres:</label>
          <input type="text" name="first_name" class="form-control" required maxlength="30">
        </div>
        <div class="form-field">
          <label for="last_name">Apellidos:</label>
          <input type="text" name="last_name" class="form-control" required maxlength="50">
        </div>
        <div class="form-field">
          <label for="age">Edad:</label>
          <input type="number" name="age" class="form-control" required maxlength="2">
        </div>
        <div class="form-field">
          <label for="address">Direccion:</label>
          <input type="text" name="address" class="form-control" required>
        </div>
        <div class="form-field">
          <label for="gender" required>Genero:</label>
          <select name="gender">
            <option value="Masculino">Masculino</option>
            <option value="Femenino">Femenino</option>
          </select>
        </div>
        <div class="form-field">
          <label for="birthday">Fecha nacimiento:</label>
          <input type="date" name="birthday" class="form-control" required maxlength="10">
        </div>
        <div class="form-field">
          <label for="nacionality">Nacionalidad: </label>
          <input type="text" name="nacionality" class="form-control" required maxlength="13">
        </div>
        <div class="form-field">
          <label for="carne">Carne:</label>
          <input type="text" name="carne" class="form-control" required maxlength="10">
        </div>
        <button type="submit" class="btn btn-primary" name="btn-save">Agregar Usuario</button>
      </form>
    </div>
  </body>
</html>