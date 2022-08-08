<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
     
      
      $nic = mysqli_real_escape_string($db,$_POST['nic']);
      $password= mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "select emp_nic from employee where emp_nic = '$nic' and password = '$password' and position='mechanic'";  
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    //   $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      if($count == 1) {
        //  session_register("cus_nic");
         $_SESSION['login_user'] = $nic;
         
         header("location: dashboard.php");
      }else {
         echo "<script type='text/javascript'>alert('Login Failed. Check username and password ');</script>";
      }
   }
?>
<!doctype html>
<!-- 
* Bootstrap Simple Admin Template
* Version: 2.1
* Author: Alexis Luna
* Website: https://github.com/alexis-luna/bootstrap-simple-admin-template
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login | Bootstrap Simple Admin Template</title>
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/auth.css" rel="stylesheet">
</head>

<body class="bg-dark ">

    <div class="wrapper">
        
        <div class="auth-content">
            <div class="card">
                <div class="card-body text-center">
                    <div class="mb-4">
                        <img class="brand" src="assets/img/logo.jpeg" alt="bootstraper logo">
                    </div>
                    <h6 class="mb-4 text-muted">Login to your account</h6>
                    <form action = ""  method = "POST">
                        <div class="mb-3 text-start">
                            <label for="eid" class="form-label">Employee NIC</label>
                            <input type="text" class="form-control" name="nic" placeholder="Enter Employee NIC" required>
                        </div>
                        <div class="mb-3 text-start">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                        </div>
                        <div class="mb-3 text-start">
                            <div class="form-check">
                              <input class="form-check-input" name="remember" type="checkbox" value="" id="check1">
                              <label class="form-check-label" for="check1">
                                Remember me on this device
                              </label>
                            </div>
                        </div>
                        <input type =  "submit" class='btn btn-primary float-right' value = "Login" />  
                    </form>
                    <p class="mb-2 text-muted">Forgot password? <a href="forgot-password.html">Reset</a></p>
                   
                </div>
            </div>
            
        </div>

    </div>
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>