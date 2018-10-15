<?php include 'views/header.php'; ?>

  <div class="message">
    <div class="container">
      <?php echo $this->message; ?>
    </div>
  </div>
  <h1 class="title">Agregar usuario nuevo.</h1>
  <form class="web-form" method="post" action="<?php echo constant('URL'); ?>nuevo/add">
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

<?php include 'views/footer.php'; ?>