<?php

include 'controllers/errores.php';
/**
 *
 */
class App
{

  function __construct()
  {
    $slug = isset($_GET['slug']) ? $_GET['slug'] : null;
    $slug = rtrim($slug, '/');
    $slug = explode('/', $slug);

    // home
    if(empty($slug[0])){
      $archivoController = 'controllers/main.php';
      require $archivoController;
      $controller = new Main();
      $controller->initDefault();
      return false;
    }

    // controller > method
    $archivoController = 'controllers/'. $slug[0] .'.php';
    if (file_exists($archivoController)) {
      require $archivoController;
      $controller = new $slug[0];
      $controller->loadModel($slug[0]);

      if (isset($slug[1])) {
        $controller->$slug[1]();
      }elseif(method_exists($controller,'initDefault')){
        $controller->initDefault();
      }else{
        $controller = new Errores();
      }
    }else{
        $controller = new Errores();
    }
  }
}

 ?>