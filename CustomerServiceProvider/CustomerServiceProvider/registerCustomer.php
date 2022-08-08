
<?php

$con = mysqli_connect("localhost","root","","aurora");

//select database
//perform sqk operations
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $cus_nic = mysqli_real_escape_string($con,$_POST['cus_nic']);
    $fname = mysqli_real_escape_string($con,$_POST['fname']);
    $lname = mysqli_real_escape_string($con,$_POST['lname']);
    $no = mysqli_real_escape_string($con,$_POST['no']);
    $road = mysqli_real_escape_string($con,$_POST['road']);
    $city = mysqli_real_escape_string($con,$_POST['city']);
    $phone = mysqli_real_escape_string($con,$_POST['phone']);
    $email = mysqli_real_escape_string($con,$_POST['email']);
$sqlq = "INSERT INTO `customer`(`cus_nic`, `fname`, `lname`, `no`, `road`, `city`, `phone`, `email`, `password`,`active`) 
VALUES ('$cus_nic' ,'$fname ','$lname' ,'$no', '$road' ,'$city' ,'$phone' ,'$email','1234','active');";
if(mysqli_query($con, $sqlq)){
    echo "<script type='text/javascript'>alert('Customer registered successfully!');</script>";
} else{
    echo "<script type='text/javascript'>alert('Error! Please check again. ');</script>";
}
//close connection
mysqli_close($con);
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
    <title>Manager | Aurora Automotive Center</title>
    <link href="assets/vendor/fontawesome/css/fontawesome.min.css" rel="stylesheet">
    <link href="assets/vendor/fontawesome/css/solid.min.css" rel="stylesheet">
    <link href="assets/vendor/fontawesome/css/brands.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/master.css" rel="stylesheet">
    <link href="assets/vendor/flagiconcss/css/flag-icon.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
    <nav id="sidebar" class="active"  style="background-color: #030654;">

        <div>
        <img src="assets\img\logotrans.png" alt="logo" class="app-logo">
            </div>
            <ul class="list-unstyled components text-secondary">
                <li>
                    <a href="dashboard.php" class="fac"><i class="fas fa-home" style="color:white"></i> <span style="color:white">Dashboard</span></a>
                </li>
                <li>
                    <a href="appointments.php"><i class="fas fa-user-friends" style="color:white"></i><span style="color:white"> Appointments</span></a>
                </li>
                <li>
                    <a href="customer.php"><i class="fas fa-car" style="color:white"></i> <span style="color:white">Customers</span></a>
                </li>
                <li>
                    <a href="token.php"><i class="fas fa-table" style="color:white"></i><span style="color:white"> Tokens</span></a>
                </li>
                <li>
                    <a href="job.php"><i class="fas fa-table" style="color:white"></i><span style="color:white"> Jobs</span></a>
                </li>
            </ul>
        </nav>

        <div id="body" class="active">
            <!-- navbar navigation component -->
            <nav class="navbar navbar-expand-lg navbar-white" style="background-color: #030654;">
                <button type="button" id="sidebarCollapse" class="btn btn-light">
                    <i class="fas fa-bars"></i><span></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="nav navbar-nav ms-auto">
                    
                        <li class="nav-item dropdown">
                            <div class="nav-dropdown">
                                <a href="#" id="nav2" class="nav-item nav-link dropdown-toggle text-secondary" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fas fa-user" style="color:white"></i> <span style="color:white">Customer Service Provider</span> <i style="font-size: .8em;" class="fas fa-caret-down"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end nav-link-menu">
                                    <ul class="nav-list">
                                        <li><a href="" class="dropdown-item"><i class="fas fa-address-card"></i> Profile</a></li>
                                        <li><a href="" class="dropdown-item"><i class="fas fa-envelope"></i> Messages</a></li>
                                        <li><a href="" class="dropdown-item"><i class="fas fa-cog"></i> Settings</a></li>
                                        <div class="dropdown-divider"></div>
                                        <li><a href="logout.php" class="dropdown-item"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- end of navbar navigation -->

           <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 page-header" style="display:flex;">
                            <h2 class="page-title">Register New Customer</h2>
                        </div>
                    </div>
                    <div class="col-lg-12">
                            <div class="card">
                                
                                <div class="card-body">
                                    
                                    
                                    <form  action="" name="register_customer"  method="POST">
                                        <div class="row g-2">
                                            <div class="mb-3 col-md-6">
                                                <label  class="form-label">Customer NIC Number</label>
                                                <input type="text" class="form-control" name="cus_nic"  required>
                                                
                                                <div class="valid-feedback">Looks good!</div>
                                                <div class="invalid-feedback">Please enter correct NIC Number</div>
                                            </div>                                            
                                        </div>
                                        
                                        <div class="row g-2">
                                            <div class="mb-3 col-md-6">
                                                <label  class="form-label">Fisrt Name</label>
                                                <input type="text" class="form-control" name="fname"  required>

                                                <div class="valid-feedback">Looks good!</div>
                                                <div class="invalid-feedback">Please enter First Name</div>                                                
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label  class="form-label">Last Name</label>
                                                <input type="text" class="form-control" name="lname"  required>
                                                
                                                <div class="valid-feedback">Looks good!</div>
                                                <div class="invalid-feedback">Please enter Last Name</div>
                                            </div>
                                        </div>

                                        <div class="row g-2">
                                            <lable>Address</lable>                                        
                                            
                                            </br>
                                        <div class="mb-3 col-md-2">
                                                <label for="zip" class="form-label">No</label>
                                                <input type="text" class="form-control" name="no"  required>

                                                <div class="valid-feedback">Looks good!</div>
                                                <div class="invalid-feedback">Please enter a number.</div>
                                            </div>
                                            <div class="mb-3 col-md-4">
                                                <label for="state" class="form-label">Road</label>
                                                <input type="text" class="form-control" name="road" required>

                                                <div class="valid-feedback">Looks good!</div>
                                                <div class="invalid-feedback">Please enter a road.</div>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="city" class="form-label">City</label>
                                                <input type="text" class="form-control" name="city"  required>

                                                <div class="valid-feedback">Looks good!</div>
                                                <div class="invalid-feedback">Please enter your City.</div>
                                            </div>
                                        </div>  

                                        <div class="row g-2">
                                            <div class="mb-3 col-md-6">
                                                <label for="email" class="form-label">Phone Number</label>
                                                <input type="text" class="form-control" name="phone"  required>
                                                
                                                <div class="valid-feedback">Looks good!</div>
                                                <div class="invalid-feedback">Please enter correct Phone Number</div>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="email" class="form-label">Email</label>
                                                <input type="text" class="form-control" name="email"  required>

                                                <div class="valid-feedback">Looks good!</div>
                                                <div class="invalid-feedback">Please enter correct Email address</div>
                                           
                                            </div>                                            
                                        </div>
                                        <input type="submit" class="btn btn-primary" value = "Register"/>
                                        <a href="registerCustomer.php"><button type="button" class="btn btn-danger">Cancel</button>
                                    </form>
                                </div>
                            
                        </div>

                </div>
            </div>
        </div>
    </div>
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/chartsjs/Chart.min.js"></script>
    <script src="assets/js/dashboard-charts.js"></script>
    <script src="assets/js/script.js"></script>
    <script src="assets/js/form-validator.js"></script>
</body>

</html>
