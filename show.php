<?php
  include './functions.php';

  $query = $student->getStudent("");
  if ($query->rowCount() > 0): ?>
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
        <td><a href="edit.php?id=<?php echo $student["id"] ?>">Editar</a></th>
        <td><span class="delete" id="<?php echo $student["id"]; ?>">Eliminar</span></td>
      </tr>
    <?php endforeach; ?>
  <?php else: ?>
    <tr>
      <td colspan="10">
        <h2>No existe ningun usuario aun registrado.</h2>
      </td>
    </tr>
  <?php endif; ?>