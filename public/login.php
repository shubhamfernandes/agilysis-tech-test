<?php
include('server.php');
session_start();
$errors = array(); 

if (isset($_POST['login_user'])) {
  $email =  $_POST['email'];
  $password = $_POST['password'];

  if (empty($email)) {
    array_push($errors, "Email is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }

  if (count($errors) == 0) 
  {
    $password = md5($password);
    $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $results = mysqli_query($mysqli, $query);
    if (mysqli_num_rows($results) == 1) {
      /*$_SESSION['email'] = $email;*/
      $_SESSION['success'] = "You are now logged in";
      $_SESSION['login'] = true;
      header('location: home/index.php');
    }else {
      array_push($errors, "Wrong username/password combination");
      $_SESSION["error"] = $errors;
      header('location: index.php');
    }
  }
  else {
    $_SESSION["error"] = $errors;
    header('location: index.php');
  }
}

?>