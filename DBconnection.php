<?php

  /**
   * DataBase Connection
   */
  class DBConnection
  {

    public function Connect()
    {
      $host = "localhost";
      $name = "phpcrud";
      $user = "root";
      $password = "";
      
      try{
        $conn = new PDO("mysql:host=$host; dbname=$name", $user, $password);
        return $conn;
      }
      catch(PDOException $e){
        echo $e->getMessage();
      }
    }
  }
 ?>