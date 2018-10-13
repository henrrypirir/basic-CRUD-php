<?php
  include 'DBConnection.php';

  Class Student extends DBConnection{

    private $conn;

    public function __construct() {
      $db = new DBConnection();
      $this->conn = $db->Connect();
    }

    // Metodos
    public function create($first_name, $last_name, $age, $address, $gender, $birthday, $nacionality, $carne)
    {
        if(isset($first_name) && !empty($first_name) &&
        isset($last_name) && !empty($last_name) &&
        isset($age) && !empty($age) &&
        isset($address) && !empty($address) &&
        isset($gender) && !empty($gender) &&
        isset($birthday) && !empty($birthday) &&
        isset($nacionality) && !empty($nacionality) &&
        isset($carne) && !empty($carne)){
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
          }
          catch(PDOException $e){
            echo $e->getMessage();;
          }
        }
    }


    public function update($id, $first_name, $last_name, $age, $address, $gender, $birthday, $nacionality, $carne)
    {
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
          $query = $this->conn->prepare("UPDATE alumno SET nombres=:first_name, apellidos=:last_name, edad=:age, direccion=:address, genero=:gender, fecha_nacimiento=:birthday, nacionalidad=:nacionality, carne=:carne WHERE id=:id");
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