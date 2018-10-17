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

    // controller
    $archivoController = 'controllers/'. $slug[0] .'.php';
    if (file_exists($archivoController)) {
      // controller
      require $archivoController;
      $controller = new $slug[0];
      $controller->loadModel($slug[0]);

      // numero elemenots SLUG URL
      $nparam = sizeOf($slug);

      // si hay metodo
      if ($nparam > 1) {
        // si hay parametros
        if ($nparam > 2) {
          $param = [];
          for ($i=2; $i < $nparam; $i++) {
            array_push($param, $slug[$i]);
          }
          $controller->$slug[1]($param);
        }elseif(method_exists($controller, $slug[1])) {
          $controller->$slug[1]();
        }elseif(method_exists($controller,'initDefault')){
          $controller->initDefault();
        }else{
          $controller = new Errores();
        }
      }
    }else{
        $controller = new Errores();
    }
  }
}

 ?>