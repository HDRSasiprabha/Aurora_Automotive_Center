<?php
   include("Config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
     
      
      $cus_nic = mysqli_real_escape_string($db,$_POST['cus_nic']);
      $password= mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "select cus_nic from customer where cus_nic = '$cus_nic' and password = '$password'";  
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    //   $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      if($count == 1) {
        //  session_register("cus_nic");
         $_SESSION['login_user'] = $cus_nic;
         
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
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--=============== FAVICON ===============-->
        <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

        <!--=============== REMIX ICONS ===============-->
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

        <!--=============== SWIPER CSS ===============-->
        <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">

        <!--=============== CSS ===============-->
        <link rel="stylesheet" href="assets/css/styles.css">

        <title>Aurora Automotive Center</title>
</head>

<body class="bg-dark ">
<header class="header" id="header">
            <nav class="nav container">
                <a href="index.php" class="nav__logo">
                    <img src="assets\img\logotrans.png" style="width:28%; height: 80px;">
                 <!-- <i class="ri-steering-fill"></i> -->
                 Aurora Automotive Center
                </a> 
                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="#home" class="nav__link">Home</a>
                        </li>
                        <li class="nav__item">
                         <a href="#about" class="nav__link">About</a>
                        </li>
 
                        <li class="nav__item">
                         <a href="#popular" class="nav__link">Popular</a>
                        </li>
 
                        <li class="nav__item">
                         <a href="#featured" class="nav__link">Features</a>
                        </li>
                        <li >
                            <i class="ri-user-3-fill "></i>
                             <a href="login.php" class="nav__link">Login</a>
                             
                            </li>
                     </ul>
 
                     <div class="nav__close" id="nav-close">
                         <i class="ri-eye-close-fill"></i>
                     </div>
 
                </div>
 
                <!--Togle-->
 
                <div class="nav__toggle" id="nav-toggle">
                     <i class="ri-menu-line"></i>
 
                </div>
                  
 
 
             </nav>
        </header>

    <div class="wrapper">
        
        <div class="auth-content"style="margin-top:5%;">
            <!-- <div class="card" style="height:50px;"> -->
                <div class="card-body text-center">
                    <div class="mb-4">
                        <img class="brand" src="assets\img\logotrans.png">
                    </div>
                    <h6 class="mb-4 text-muted">Login as a customer</h6>
                    <form action = ""  method = "POST">
                        <div class="mb-3 text-start">
                            <label for="eid" class="form-label">NIC</label>
                            <input type="text" name="cus_nic" class="form-control" placeholder="Enter NIC" required>
                        </div>
                        <div class="mb-3 text-start">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Password" required>
                        </div>
                        <div class="mb-3 text-start">
                            <div class="form-check">
                              <input class="form-check-input" name="remember" type="checkbox" value="" id="check1">
                              <label class="form-check-label" for="check1">
                                Remember me on this device
                              </label>
                            </div>
                        </div>
                        <input type =  "submit" id = "btn" value = "Login" />  
                    </form>
                    <p class="mb-2 text-muted">Forgot password? <a href="forgot-password.php">Reset</a></p>
                   
                </div>
            <!-- </div> -->
            
        </div>

    </div>
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>