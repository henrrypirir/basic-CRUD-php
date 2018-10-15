<?php
/**
 *
 */
class NuevoModel extends Model
{

  function __construct()
  {
    parent::__construct();
  }

  public function insert($first_name, $last_name, $age, $address, $gender, $birthday, $nacionality, $carne)
  {
    try{
      $query = $this->conn->prepare("INSERT INTO alumno (nombres, apellidos, edad, direccion, genero, fecha_nacimiento, nacionalidad, carne) VALUES(:first_name, :last_name, :age, :address, :gender, :birthday, :nacionality, :carne)");
      $query->bindparam(":first_name" , $first_name);
      $query->bindparam(":last_name" , $last_name);
      $query->bindparam(":age" , $age);
      $query->bindparam(":address" , $address);
      $query->bindparam(":gender" , $gender);
      $query->bindparam(":birthday" , $birthday);
      $query->bindparam(":nacionality" , $nacionality);
      $query->bindparam(":carne" , $carne);
      $query->execute();
      return true;
    }
    catch(PDOException $e){
      echo $e->getMessage();
      return false;
    }
  }
}

 ?>