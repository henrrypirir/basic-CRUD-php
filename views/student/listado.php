<?php include 'views/header.php'; ?>
    <h1>Listado de alumos</h1>
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
      <tbody>
        <?php
        if ($this->query->rowCount() > 0): ?>
        <?php foreach ($this->query  as $student): ?>
          <tr>
            <td><?php echo $student["nombres"] ?></td>
            <td><?php echo $student["apellidos"] ?></td>
            <td><?php echo $student["edad"] ?></td>
            <td><?php echo $student["direccion"] ?></td>
            <td><?php echo $student["genero"] ?></td>
            <td><?php echo $student["fecha_nacimiento"] ?></td>
            <td><?php echo $student["nacionalidad"] ?></td>
            <td><?php echo $student["carne"] ?></td>
            <td><a href="<?php echo constant("URL"); ?>student/profile/<?php echo $student["id"]; ?>">Editar</a></th>
            <td><a href="<?php echo constant("URL"); ?>student/delete/<?php echo $student['id']; ?>" class="delete">Eliminar</a></td>
            </tr>
          <?php endforeach; ?>
        <?php else: ?>
          <tr>
            <td colspan="10">
              <h2>No existe ningun usuario aun registrado.</h2>
            </td>
          </tr>
        <?php endif; ?>
      </tbody>
    </table>

<?php include 'views/footer.php'; ?>