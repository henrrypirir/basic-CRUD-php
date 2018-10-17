<?php

/**
 *
 */
class Student extends Controller
{

  function __construct()
  {
    parent::__construct();
  }

  public function render($viewName=null)
  {
    if(isset($viewName)){
      $this->view->render($viewName);
    }else {
      $this->view->render('student/index');
    }
  }

  public function listado()
  {
    $this->view->query = $this->model->getStudents();
    $this->render('student/listado');
  }

  public function nuevo()
  {
    $this->render('student/nuevo');
  }


  public function add()
  {
    // $mensaje = "";
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
        // $message = "El alumno se ingreso correctamente";
        $location = constant("URL");
        header("Location: " . $location);
        exit;
      }
    }
  }

  public function profile($param)
  {
    $idStudent = $param[0];
    $this->view->query = $this->model->getStudents($idStudent);
    $this->view->queryId = $idStudent;
    $this->render('student/edit');
  }

  public function edit($param)
  {
      $id = $param[0];
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
      isset($carne) && !empty($carne) &&
      isset($id) && !empty($id)){
        if ($this->model->update($id, $first_name, $last_name, $age, $address, $gender, $birthday, $nacionality, $carne)) {
          // $message = "El alumno se ingreso correctamente";
          $location = constant("URL");
          header("Location: " . $location);
          exit;
        }
      }
  }

  public function delete($param)
  {
    $id = $param[0];
    if (isset($id) && !empty($id)){
      if ($this->model->delete($id)) {
        $location = constant("URL");
        header("Location: " . $location);
        exit;
      }
    }
  }
}

 ?>