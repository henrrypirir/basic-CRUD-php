<?php

include 'controllers/errores.php';
/**
 *
 */
class App
{

  function __construct()
  {
    $slug = isset($_GET['slug']) ? $_GET['slug']: null;
    $slug = rtrim($slug, '/');
    $slug = explode('/', $slug);

    if(empty($slug[0])){
      $archivoController = 'controllers/main.php';
      require $archivoController;
      $controller = new Main();
      return false;
    }

    $archivoController = 'controllers/'. $slug[0] .'.php';
    if (file_exists($archivoController)) {
      require $archivoController;
      $controller = new $slug[0];

      if(isset($slug[1])){
        $controller->{$slug[1]}();
      }
    }else{
      $controller = new Errores();
    }
  }
}


?>