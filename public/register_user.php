<?php
session_start();
?>
<html lang="en">
   <head>
   <   <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>MyWebApp - Register</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <link rel="stylesheet" href="css/register.css" />
   </head>
   <body>
      <div class="sidenav">
            <div class="reg-main-text">
               <h2>Application<br> Registration Page</h2>
               <p>Register to access your dashboard.</p>
            </div>
         </div>
         <div class="main">
            <div class="col-md-6 col-sm-12">
               <div class="reg-form">
                  <form method="post" action="register.php">
                     <?php include('errors.php'); ?>
                     <div class="form-group">
                        <label for="firstname">First name</label>
                        <input type="text" id="firstname" name="firstname" class="form-control" placeholder="First name">
                     </div>
                     <div class="form-group">
                        <label for="surname">Surname</label>
                        <input type="text" id="surname" name="surname" class="form-control" placeholder="Surname">
                     </div>
                     <div class="form-group">
                        <label for="emailAddress">Email Address</label>
                        <input type="text" id="emailAddress" name="email" class="form-control" placeholder="Email Address">
                     </div>
                     <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password_1" class="form-control" placeholder="Password" autocomplete="off">
                     </div>
                     <div class="form-group">
                        <label for="confirmPassword">Confirm Password</label>
                        <input type="password" id="confirmPassword" name="password_2" class="form-control" placeholder="Confirm Password" autocomplete="off">
                     </div>
                     <a href="index.php" class="btn btn-secondary">Cancel</a>
                     <button type="submit" class="btn btn-black" name="reg_user">Register</button>
                  </form>
               </div>
            </div>
         </div>
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      <script src="js/register.js"></script>
   </body>
</html>

<?php
    unset($_SESSION["error"]);
?>