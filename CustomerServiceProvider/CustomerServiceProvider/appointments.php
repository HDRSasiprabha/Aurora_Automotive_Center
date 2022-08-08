<?php

include "connection.php";

// if (isset($_GET['part_id'])){
//     $part_id=$_GET['part_id'];
//     $delete=mysqli_query($connection,"DELETE FROM `inventory` WHERE `part_id`='$part_id'");
// }

$select="select * from appointment";
$query=mysqli_query($connection,$select);

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

            <br>
            <h2 class="page-title2" align = "center">View Appointments</h2>
            <div class="content">
                <div class="container">
                    <div class="row">
                        <!-- <div class="col-md-12 page-header" style="display:flex;">
                         
                            <a href="registerInventory.php" style="margin-left:46%;" type="button" class="btn btn-success mb-2">Add New</a>
                        </div> -->
                    </div>
                    <div class="col-md-12 col-lg-12">
                            <div class="card">
                                <div class="card-header">Appointments</div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                        <thead>
                                                <tr>
                                                    <th>Appointment ID</th>
                                                    <th>Appointment Type</th>
                                                    <th>Reserved Date</th>
                                                    <th>Reserved Time</th>
                                                    <th>Current Location</th>     
                                                    <th>Description</th>     
                                                    <th>Vehicle Number</th>                                                    
                                                    <th>Customer NIC</th>     
                                                </tr>
                                                <?php
                                                        $num=mysqli_num_rows($query);
                                                        if ($num>0){
                                                            while($result=mysqli_fetch_assoc($query)){
                                                                echo "
                                                                    <tr>
                                                                        <td>".$result['aid']."</td>
                                                                        <td>".$result['type']."</td> 
                                                                        <td>".$result['r_date']."</td>
                                                                        <td>".$result['r_time']."</td>
                                                                        <td>".$result['c_loc']."</td>
                                                                        <td>".$result['description']."</td> 
                                                                        <td>".$result['veh_id']."</td>
                                                                        <td>".$result['cid']."</td>                                                                     
                                                                    </tr>";                
                                                                
                                                                
                                                            }
                                                        }

                                                ?>
                                            </thead>

                                            <tbody>
                                                                                             
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
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
</body>

</html>

                                   
                                        <!-- <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Appointment ID</th>
                                                    <th>Appointment Type</th>
                                                    <th>Reserved Date</th>
                                                    <th>Reserved Time</th>
                                                    <th>Current Location</th>
                                                    <th>Description</th>
                                                    <th>Vehicle Number</th>
                                                    <th>Customer NIC</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>ECV</td>
                                                    <td>2022/01/02</td>
                                                    <td></td>
                                                    <td>Colombo 07</td>
                                                    <td></td>
                                                    <td>CAD-8987</td>
                                                    <td>98567456v</td>
                                                </tr>
                                                <tr>
                                                <th scope="row">2</th>
                                                    <td>QRS</td>
                                                    <td>2022/01/02</td>
                                                    <td>8.00 am</td>
                                                    <td>Colombo 07</td>
                                                    <td>for Tyres Replacement</td>
                                                    <td>CAD-8987</td>
                                                    <td>98567456v</td>
                                                </tr>
                                                <tr>
                                                <th scope="row">3</th>
                                                    <td>Repair</td>
                                                    <td>2022/01/02</td>
                                                    <td>10.00 am</td>
                                                    <td>Colombo 07</td>
                                                    <td>for wheel balance and rotation service</td>
                                                    <td>CAD-8987</td>
                                                    <td>98567456v</td>
                                                </tr>
                                            </tbody>
                                        </table> -->
                                    
