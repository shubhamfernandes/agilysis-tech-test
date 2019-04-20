<?php 
include('server.php');

session_start();

$errors = array(); 


// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $firstname = $_POST['firstname'];
  $surname =  $_POST['surname'];
  $email =  $_POST['email'];
  $password_1 =  $_POST['password_1'];
  $password_2 =  $_POST['password_2'];

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($firstname)) { array_push($errors, "First Name is required"); }
  if (empty($surname)) { array_push($errors, "Surname is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if (strlen($password_1)<6) { array_push($errors, "Password must be at least six characters in length"); }
  if ($password_1 != $password_2) {
   array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same  email
  $user_check_query = "SELECT * FROM users WHERE  email='$email' LIMIT 1";
  $result = mysqli_query($mysqli, $user_check_query);
  $user = mysqli_fetch_array($result);
  
  if ($user) { // if user exists
    if ($user['email'] === $email) 
    {
      array_push($errors, "Email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
   $password = md5($password_1);//encrypt the password before saving in the database

   $query = "INSERT INTO users (first_name,sur_name, email, password) VALUES('$firstname','$surname', '$email', '$password')";
   mysqli_query($mysqli, $query);
   // $_SESSION['email'] = $email;
   $_SESSION['login'] = true;
   $_SESSION['success'] = "You are now logged in";
   header('location: home/index.php');
  }
  else {
    $_SESSION["error"] = $errors;
   header('location: register_user.php');
  }
  // print_r($errors);
}


 ?>