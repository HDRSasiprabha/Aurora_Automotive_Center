<?php

$con = mysqli_connect("localhost","root","","aurora");

//select database
//perform sqk operations
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $date_issued =mysqli_real_escape_string($con,$_POST['date_issued']);
    $purpose =mysqli_real_escape_string($con,$_POST['purpose']);
    $cus_nic = mysqli_real_escape_string($con,$_POST['cus_nic']);
    $veh_num = mysqli_real_escape_string($con,$_POST['veh_num']);
$sqlq = "INSERT INTO `token`(`purpose`, `date_issued`, `csp_nic`, `cus_nic`, `veh_num`) 
VALUES ('$purpose','$date_issued','93560956v','$cus_nic','$veh_num');";
if(mysqli_query($con, $sqlq)){
    echo "<script type='text/javascript'>alert('Token registered successfully!');</script>";
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
    <title>Customer Service Provider | Aurora Automotive Center</title>
    <link href="assets/vendor/fontawesome/css/fontawesome.min.css" rel="stylesheet">
    <link href="assets/vendor/fontawesome/css/solid.min.css" rel="stylesheet">
    <link href="assets/vendor/fontawesome/css/brands.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/master.css" rel="stylesheet">
    <link href="assets/vendor/flagiconcss/css/flag-icon.min.css" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
    <nav id="sidebar" class="active"  style="background-color: #030654;">
        <div  >
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
                        <div class="col-md-12 page-header">
                            <h2 class="page-title">Create Token</h2>
                        </div>
                    </div>

                    <div class="col-lg-12">
                            <div class="card">
                               
                                <div class="card-body">
                                    
                                <form action = "" method = "POST" class="needs-validation" novalidate accept-charset="utf-8">
                                        <div class="row g-2">
                                            <div class="mb-3 col-md-6">
                                                <label for="email" class="form-label">Date</label>
                                                <input type="date" class="form-control" name="date_issued" required>
                                                
                                                <div class="valid-feedback">Looks good!</div>
                                                <div class="invalid-feedback">Please enter correct Token ID.</div>
                                            </div>
                                        </div>
                                        <div class="row g-2">
                                            <div class="mb-3 col-md-6">
                                                <label for="email" class="form-label">Purpose</label>
                                                <select name="purpose" type="string" class="form-select">
                                                    <option value="">Repair</option>
                                                    <option value="">Sell</option>
                                                    <option value="">ECV</option>
                                                    <option value="">QRS</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row g-2">
                                            <div class="mb-3 col-md-6">
                                                <label for="email" class="form-label">Customer NIC</label>
                                                <input type="string" class="form-control" name="cus_nic" required>
                                                
                                                <div class="valid-feedback">Looks good!</div>
                                                <div class="invalid-feedback">Please enter Customer NIC</div>
                                            </div>
                                        </div>
                                        <div class="row g-2">
                                            <div class="mb-3 col-md-6">
                                                <label for="email" class="form-label">Vehicle Number</label>
                                                <input type="text" class="form-control" name="veh_num"  required>
                                                
                                                <div class="valid-feedback">Looks good!</div>
                                                <div class="invalid-feedback">Please enter Vehicle Number</div>
                                            </div>
                                        </div>
                                        
                                        
                                      
                                        <button type="submit" name="submit" class="btn btn-primary">Create</button>
                                        <button type="button" class="btn btn-primary">Cancel</button>
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
