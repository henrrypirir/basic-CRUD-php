<?php

/**
 *
 */
class Main extends Controller
{
  function __construct()
  {
    parent::__construct();
  }

  public function initDefault()
  {
    $this->loadModel('student');
    $this->view->query = $this->model->getStudents();
    $this->view->render('main/index');
    return true;
  }
}


 ?>