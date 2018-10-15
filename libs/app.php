<?php

include './controllers/error.php';
/**
 *
 */
class App
{

  function __construct()
  {
    $slug = $_GET['slug'];
    $slug = rtrim($slug, '/');
    $slug = explode('/', $slug);

    $archivoController = './controllers/'. $slug[0] .'.php';
    if (file_exists($archivoController)) {
      require $archivoController;
      $controller = new $slug[0];

      if(isset($slug[1])){
        $controller->{$slug[1]}();
      }
    }else{
      $controller = new Error();
    }
  }
}


?>