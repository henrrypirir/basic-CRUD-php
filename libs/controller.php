<?php
/**
 *
 */
class Controller
{

  function __construct()
  {
    $this->view = new View();
  }

  function loadModel($model)
  {
    $archiveModel = 'models/'. $model .'-model.php';
    if (file_exists($archiveModel)) {
      require $archiveModel;
      $modelName = $model.'Model';
      $this->model = new $modelName();
    }
  }
}

 ?>