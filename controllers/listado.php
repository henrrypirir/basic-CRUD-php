<?php

  /**
   *
   */
  class Listado extends Controller
  {

    function __construct()
    {
      parent::__construct();
      $this->view->query = [];
    }

    public function render()
    {
      $this->view->query = $this->model->getStudent("");
      $this->view->render('listado/index');
    }
  }

?>