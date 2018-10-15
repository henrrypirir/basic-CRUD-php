<?php
/**
 *
 */
class ListadoModel extends Model
{

  function __construct()
  {
    parent::__construct();
  }

  public function getStudent($id)
  {
    if ($id) {
      $query = $this->conn->query("SELECT * FROM alumno WHERE id=$id");
      return $query->fetch();
    }else{
      $query = $this->conn->query("SELECT * FROM alumno");
      return $query;
    }
  }
}

 ?>