<?php

include "connection.php";

if (isset($_GET['tok_id'])){
    $tok_id=$_GET['tok_id'];
    $delete=mysqli_query($connection,"DELETE FROM `token` WHERE `tok_id`='$tok_id'");
    if(mysqli_query($connection,"DELETE FROM `token` WHERE `tok_id`='$tok_id'")){
        echo "<script type='text/javascript'>alert('Token deleted successfully!');</script>";
    } else{
        echo "<script type='text/javascript'>alert('Error! Please check again. ');</script>";
    }
}

$select="select * from token";
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
            <br>
            <h2 class="page-title2" align = "center">Create Token</h2>
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 page-header" style="display:flex;">                         
                            <a href="createToken.php" style="margin-left:46%;" type="button" class="btn btn-success mb-2" >Create Token</a>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-12">
                            <div class="card">
                                <div class="card-header">Tokens</div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Token ID</th>
                                                    <th>Purpose</th>
                                                    
                                                    <th>Customer NIC</th>
                                                    <th>Vehicle Number</th>
                                                    <th>Actions</th>
                                                </tr>
                                                <?php
                                                        $num=mysqli_num_rows($query);
                                                        if ($num>0){
                                                            while($result=mysqli_fetch_assoc($query)){
                                                                echo "
                                                                    <tr>
                                                                        <td>".$result['tok_id']."</td>
                                                                        <td>".$result['purpose']."</td> 
                                                                       
                                                                        <td>".$result['cus_nic']."</td> 
                                                                        <td>".$result['veh_num']."</td>
                                                                       

                                                                        <td>
                                                                            <a href='updateToken.php?tok_id=".$result['tok_id']."'
                                                                            class='btn btn-primary btn-sm'>Edit</a>
                                                                            
                                                                            <a href='token.php?tok_id=".$result['tok_id']."'
                                                                            class='btn btn-danger btn-sm btn-row-remove'>Delete</a>
                                                                        </td>
                                                                    </tr>                     
                                                                
                                                                ";
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
