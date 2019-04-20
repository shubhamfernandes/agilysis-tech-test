<?php 
 session_start();

  if (!isset($_SESSION['login'])) {
    $errors = array(); 
    array_push($errors, "You must log in first");
    header('location: /agilysis/agilysis-tech-test/public/index.php');
  } 

  
   ?>
<html lang="en">
  <head>
  <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">
    <title>MyWebApp - Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="../css/dashboard.css" rel="stylesheet">  
  </head>
  <body>
      <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
        <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">MyWebApplication</a>
        <ul class="navbar-nav px-3">
          <li class="nav-item text-nowrap">
             
       <a class="nav-link" href="logout.php" >logout</a>

            <!-- <a class="nav-link" href="#">Log out</a> -->
          </li>
        </ul>
      </nav>

      <div class="container-fluid">
        <div class="row">
          <nav class="col-md-2 d-none d-md-block bg-light sidebar">
            <div class="sidebar-sticky">
              <ul class="nav flex-column">
                <li class="nav-item">
                  <a class="nav-link active" href="#">
                    <span data-feather="home"></span>
                    Dashboard <span class="sr-only">(current)</span>
                  </a>
                </li>
              </ul>

              
            </div>
          </nav>

          <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
              <h1 class="h2">Dashboard</h1>
            </div>

            <canvas class="my-4" id="myChart" width="900" height="380"></canvas>

            <h2>Fibonacci Sequence</h2>
            <select onchange="myFunction()" id="id" name="id">
              <option value="11">--Select--</option> 
              <option value="11">0-10</option> 
              <option value="26">0-25</option>
              <option value="51">0-50</option>
              <option value="76">0-75</option>
              </select>
            <div class="table-responsive">
              <table class="table table-striped table-sm">
                <thead>
                  <tr>
                    <th>Ordinal</th>
                    <th>Value</th>
                  </tr>
                </thead>

<script>
function myFunction() {
var id = document.getElementById("id").value;
  var display = document.getElementById("txtHint");

      var xmlhttp = new XMLHttpRequest();
      xmlhttp.open("POST", "fib.php");
      xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
      xmlhttp.send("id=" + id);
      xmlhttp.onreadystatechange = function() {
        if (this.readyState === 4 && this.status === 200) {
          display.innerHTML = this.responseText;
        } else {
          display.innerHTML = "Loading...";
        };
      }

}
</script>     

                <tbody id="txtHint">
                   <?php

                    $fib_url='https://fibonacciservice.azurewebsites.net/api/fibonacci/22';
                    $fib_json= file_get_contents($fib_url);
                    $fib_array= json_decode($fib_json,true);
                      //print_r($fib_array);
                    foreach ($fib_array as $key => $value) { ?>
                    <tr>
                    <td><?php echo $key; ?></td>
                    <td><?php echo $value; ?></td>
                     </tr>
                    <?php } ?> 
                </tbody>
              </table>
            </div>
          </main>
        </div>
      </div>
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
        feather.replace()
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
    <script type="text/javascript"> var my_js_array = <?php echo json_encode($fib_array);?> ; </script>
    <script src="../js/dashboard.js"></script>
  </body>
</html>