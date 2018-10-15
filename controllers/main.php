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
    
    public function render()
    {
      $this->view->render('main/index');
    }

    public function Saludo()
    {
      echo "Metodo Saludo";
    }
  }

?>