<?php include 'snippets/header.php'; ?>
<?php include "functions.php"; ?>

  <h1>Listado de Alumnos registrados.</h1>
  <table>
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
      <tbody id="list-students"></tbody>
  </table>

  <a href="add.php" class="btn">Agregar</a>

<?php include 'snippets/footer.php'; ?>