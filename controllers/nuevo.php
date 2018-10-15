<?php

  /**
   *
   */
  class Nuevo extends Controller
  {

    function __construct()
    {
      parent::__construct();
      $this->view->message = "";
    }

    public function render()
    {
      $this->view->render('nuevo/index');
    }

    public function add()
    {
      $mensaje = "";
      $first_name = $_POST['first_name'];
      $last_name = $_POST['last_name'];
      $age = $_POST['age'];
      $address = $_POST['address'];
      $gender = $_POST['gender'];
      $birthday = $_POST['birthday'];
      $nacionality = $_POST['nacionality'];
      $carne = $_POST['carne'];

      if(isset($first_name) && !empty($first_name) &&
      isset($last_name) && !empty($last_name) &&
      isset($age) && !empty($age) &&
      isset($address) && !empty($address) &&
      isset($gender) && !empty($gender) &&
      isset($birthday) && !empty($birthday) &&
      isset($nacionality) && !empty($nacionality) &&
      isset($carne) && !empty($carne)){
        if ($this->model->insert($first_name, $last_name, $age, $address, $gender, $birthday, $nacionality, $carne)) {
          $message = "El alumno se ingreso correctamente";
        }else{
          $message = "No se pudo crear al nuevo alumno";
        }
        $this->view->message = $message;
        $this->render();
      }
    }
  }

?>