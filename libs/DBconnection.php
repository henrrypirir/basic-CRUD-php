<?php

/**
 *
 */
class DBConnection
{

  public function connect()
  {
    $host = constant('HOST');
    $name = constant('NAME');
    $user = constant('USER');
    $password = constant('PASSWORD');

    try {
      $conn = new PDO("mysql:host=$host; dbname=$name", $user, $password);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      return $conn;
    } catch (PDOException $e) {
      echo $e->getMessage();
    }

  }
}

 ?>