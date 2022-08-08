<?php

$connection=mysqli_connect('localhost','root','','aurora');

if (isset($_GET['job_id'])){
    $job_id=$_GET['job_id'];
    $delete=mysqli_query($connection,"DELETE FROM `job` WHERE `job_id`='$job_id'");
    if(mysqli_query($connection,"DELETE FROM `job` WHERE `job_id`='$job_id'")){
        echo "<script type='text/javascript'>alert('Job deleted successfully!');</script>";
    } else{
        echo "<script type='text/javascript'>alert('Error! Please check again. ');</script>";
    }
}

$select="select * from quotation";
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
    <title>Mechanic | Aurora Automotive Center</title>
    <link href="assets/vendor/fontawesome/css/fontawesome.min.css" rel="stylesheet">
    <link href="assets/vendor/fontawesome/css/solid.min.css" rel="stylesheet">
    <link href="assets/vendor/fontawesome/css/brands.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/master.css" rel="stylesheet">
    <link href="assets/vendor/flagiconcss/css/flag-icon.min.css" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
    <nav id="sidebar" class="active" style="background-color: #030654;">
        <div  >
                <img src="assets\img\logotrans.png" alt="logo" class="app-logo">
            </div>
            <ul class="list-unstyled components text-secondary">
                <li>
                    <a href="dashboard.php"><i class="fas fa-home"></i> Dashboard</a>
                </li>
                <li>
                    <a href="jobs.php"><i class="fas fa-user-friends"></i> Jobs</a>
                </li>
                <li>
                    <a href="quotation.php"><i class="fas fa-user-friends"></i> Quotation</a>
                </li>
                
                <li>
                    <a href="http://127.0.0.1:5000/"><i class="fas fa-user-friends"></i> Damage Detection</a>
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
                                    <i class="fas fa-user"></i> <span>Mechanic</span> <i style="font-size: .8em;" class="fas fa-caret-down"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end nav-link-menu">
                                    <ul class="nav-list">
                                        <li><a href="" class="dropdown-item"><i class="fas fa-address-card"></i> Profile</a></li>
                                        <li><a href="" class="dropdown-item"><i class="fas fa-envelope"></i> Messages</a></li>
                                        <li><a href="" class="dropdown-item"><i class="fas fa-cog"></i> Settings</a></li>
                                        <div class="dropdown-divider"></div>
                                        <li><a href="login.php" class="dropdown-item"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
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
                        <div class="col-md-12 page-header"  style="display:flex;">
                            <h2 class="page-title">Recently created quotations</h2>
                            <!-- <a href="createBill.php" style="margin-left:80%;" type="button" class="btn btn-primary mb-2">Create New</a> -->
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-12">
                            <div class="card">
                                <div class="card-header">Recent Quotation Details</div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                    <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Quotation ID</th>
                                                    <th>Status</th>
                                                    <th>Customer NIC</th>
                                                    <th>Vehicle Number</th>
                                                    <th>Job ID</th>
                                                 
                                                </tr>
                                                <?php
                                                        $num=mysqli_num_rows($query);
                                                        if ($num>0){
                                                            while($result=mysqli_fetch_assoc($query)){
                                                                echo "
                                                                    <tr>
                                                                        <td>".$result['qid']."</td>
                                                                        <td>".$result['status']."</td> 
                                                                        <td>".$result['customer_nic']."</td> 
                                                                        <td>".$result['veh_num']."</td> 
                                                                        <td>".$result['job_id']."</td>
                                                                       
                                                                    </tr>                     
                                                                
                                                                ";
                                                            }
                                                        }

                                                    ?>
                                            </thead>
                                            <tbody>
                                                
                                            </tbody>
                                        </table>
                                        <!-- <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Bill ID</th>
                                                    <th>Total</th>
                                                    <th>Date</th>
                                                    <th>Quotation ID</th>
                                                    <th>Token ID</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>20000</td>
                                                    <td>2022/01/02</td>
                                                    <td>203</td>
                                                    <td>34</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>20000</td>
                                                    <td>2022/01/02</td>
                                                    <td>203</td>
                                                    <td>34</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>20000</td>
                                                    <td>2022/01/02</td>
                                                    <td>203</td>
                                                    <td>34</td>
                                                </tr>
                                            </tbody>
                                        </table>-->
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
