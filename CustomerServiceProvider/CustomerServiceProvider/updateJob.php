<?php
include "connection.php";
if(count($_POST)>0) {
mysqli_query($connection,"UPDATE job set  color='" . $_POST['color'] . "',
job_type='" . $_POST['job_type'] . "', reg_date='" . $_POST['reg_date'] . "' ,job_status='" . $_POST['job_status'] . "',
mec_id='" . $_POST['mec_id'] . "',
vehi_num='" . $_POST['vehi_num'] . "',cus_nic='" . $_POST['cus_nic'] . "' WHERE job_id='" . $_GET['job_id'] . "'");
$message = "Record Modified Successfully";
}
$result = mysqli_query($connection,"SELECT * FROM job WHERE job_id='" . $_GET['job_id'] . "'");
$row= mysqli_fetch_array($result);
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
                            <h2 class="page-title">Update Job</h2>
                        </div>
                    </div>

                    <div class="col-lg-12">
                            <div class="card">
                               
                                <div class="card-body">
                                    
                                <form action = "" method = "POST" class="needs-validation" novalidate accept-charset="utf-8">
                                    <div class="row g-2">
                                            <div class="mb-3 col-md-6">
                                                <label for="email" class="form-label">Job ID</label>
                                                <input type="text" class="form-control" name="job_id" value="<?php echo $row['job_id']; ?>" disabled required>
                                                
                                                <div class="valid-feedback">Looks good!</div>
                                                <div class="invalid-feedback">Please enter correct Token ID.</div>
                                            </div>
                                        </div>
                                        <div class="row g-2">
                                            <div class="mb-3 col-md-6">
                                                <label for="email" class="form-label">Color</label>
                                                <input type="text" class="form-control" name="color" value="<?php echo $row['color']; ?>" required>
                                                
                                                <div class="valid-feedback">Looks good!</div>
                                                <div class="invalid-feedback">Please enter correct Token ID.</div>
                                            </div>
                                        </div>
                                        
                                        <div class="row g-2">
                                            <div class="mb-3 col-md-6">
                                                <label for="email" class="form-label">Job Type</label>
                                                <input type="text" class="form-control" name="job_type" value="<?php echo $row['job_type']; ?>" required>
                                                <!-- <select name="" class="form-select" name="job_type" value=">
                                                    <option value="repair">Repair</option>
                                                    <option value="sell">Sell</option>
                                                    <option value="ecv">ECV</option>
                                                    <option value="qrs">QRS</option>
                                                </select> -->
                                            </div>
                                        </div>
                                        <div class="row g-2">
                                            <div class="mb-3 col-md-6">
                                                <label for="email" class="form-label">Job Status</label>
                                                <input type="text" class="form-control" name="job_status" value="<?php echo $row['job_status']; ?>" required>
                                                
                                                <div class="valid-feedback">Looks good!</div>
                                                <div class="invalid-feedback">Please enter correct Token ID.</div>
                                            </div>
                                        </div>
                                        <div class="row g-2">
                                            <div class="mb-3 col-md-6">
                                                <label for="email" class="form-label">Registration Date</label>
                                                <input type="text" class="form-control" name="reg_date" value="<?php echo $row['reg_date']; ?>" required>
                                                
                                                <div class="valid-feedback">Looks good!</div>
                                                <div class="invalid-feedback">Please enter correct Token ID.</div>
                                            </div>
                                        </div>
                                        <div class="row g-2">
                                            <div class="mb-3 col-md-6">
                                                <label for="email" class="form-label">Mechanic ID</label>
                                                <input type="text" class="form-control" name="mec_id" value="<?php echo $row['mec_id']; ?>" required>
                                                
                                                <div class="valid-feedback">Looks good!</div>
                                                <div class="invalid-feedback">Please enter correct Token ID.</div>
                                            </div>
                                        </div>
                                        <div class="row g-2">
                                            <div class="mb-3 col-md-6">
                                                <label for="email" class="form-label">Vehicle Number</label>
                                                <input type="text" class="form-control" name="vehi_num" value="<?php echo $row['vehi_num']; ?>" required>
                                                
                                                <div class="valid-feedback">Looks good!</div>
                                                <div class="invalid-feedback">Please enter Vehicle Number</div>
                                            </div>
                                        </div>
                                        <div class="row g-2">
                                            <div class="mb-3 col-md-6">
                                                <label for="email" class="form-label">Customer NIC</label>
                                                <input type="text" class="form-control" name="cus_nic" value="<?php echo $row['cus_nic']; ?>" required>
                                                
                                                <div class="valid-feedback">Looks good!</div>
                                                <div class="invalid-feedback">Please enter Customer NIC</div>
                                            </div>
                                        </div>
                                        
                                      
                                        <button type="submit" name="update" class="btn btn-primary">Update</button>
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
<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,'aurora');

if(isset($_POST['update']))
{
    

    $query = "UPDATE `job` SET color='$_POST[color]',job_type='$_POST[job_type]',job_status='$_POST[job_status]',reg_date='$_POST[reg_date]',
    mec_id='$_POST[mec_id]',vehi_num='$_POST[vehi_num]',cus_nic='$_POST[cus_nic]' WHERE job_id='" . $_GET['job_id'] . "'";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        echo '<script type="text/javascript"> alert("Data Updated") </script>';
    }
    else
    {
        echo '<script type="text/javascript"> alert("Data Not Updated") </script>';
    }
}
?>
