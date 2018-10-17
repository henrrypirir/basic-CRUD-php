<?php include 'views/header.php'; ?>

<?php if ($this->query): ?>
    <h1 class="title">Perfil de <?php echo $this->query["nombres"] . " " . $this->query["apellidos"];?></h1>
    <form class="web-form" method="post" action="<?php echo constant("URL") . "student/edit/" . $this->queryId; ?>">
      <div class="form-field">
        <label for="first_name">Nombres:</label>
        <input type="text" name="first_name" class="form-control" required maxlength="30" value="<?php echo $this->query["nombres"];?>">
      </div>
      <div class="form-field">
        <label for="last_name">Apellidos:</label>
        <input type="text" name="last_name" class="form-control" required maxlength="50" value="<?php echo $this->query["apellidos"];?>">
      </div>
      <div class="form-field">
        <label for="age">Edad:</label>
        <input type="number" name="age" class="form-control" required maxlength="2" value="<?php echo $this->query["edad"];?>">
      </div>
      <div class="form-field">
        <label for="address">Direccion:</label>
        <input type="text" name="address" class="form-control" required value="<?php echo $this->query["direccion"];?>">
      </div>
      <div class="form-field">
        <label for="gender" required>Genero:</label>
        <select name="gender">
          <?php if ($this->query["genero"] == "Masculino"): ?>
            <option value="Masculino" selected>Masculino</option>
          <?php else: ?>
            <option value="Masculino">Masculino</option>
          <?php endif; ?>
          <?php if ($this->query["genero"] == "Femenino"): ?>
            <option value="Femenino" selected>Femenino</option>
          <?php else: ?>
            <option value="Femenino">Femenino</option>
          <?php endif; ?>
        </select>
      </div>
      <div class="form-field">
        <label for="birthday">Fecha nacimiento:</label>
        <input type="date" name="birthday" class="form-control" required maxlength="10" value="<?php echo $this->query["fecha_nacimiento"];?>">
      </div>
      <div class="form-field">
        <label for="nacionality">Nacionalidad: </label>
        <input type="text" name="nacionality" class="form-control" required maxlength="13" value="<?php echo $this->query["nacionalidad"];?>">
      </div>
      <div class="form-field">
        <label for="carne">Carne:</label>
        <input type="text" name="carne" class="form-control" required maxlength="10" value="<?php echo $this->query["carne"];?>">
      </div>
      <button type="submit" class="btn btn-primary" name="btn-update">Guardar</button>
    </form>
  <?php else: ?>
    <h1 class="title">No se ha encontrado ningun alumno con el identificador <?php echo $this->queryId; ?>, verifique el id del usuario que desea editar</h1>
  <?php endif; ?>

<?php include 'views/footer.php'; ?>