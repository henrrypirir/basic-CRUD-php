<?php
/**
 *
 */
class Model
{

  function __construct()
  {
    $db = new DBConnection();
    $this->conn = $db->connect();
  }
}

 ?>