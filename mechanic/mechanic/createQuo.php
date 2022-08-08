<?php

$con = mysqli_connect("localhost","root","","aurora");

//select database
//perform sqk operations
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $customer_nic = mysqli_real_escape_string($con,$_POST['customer_nic']);
    $veh_num = mysqli_real_escape_string($con,$_POST['veh_num']);
   
   
$sqlq = "INSERT INTO `quotation`( `status`, `mec_id`, `customer_nic`, `veh_num`, `job_id`) 
VALUES ('new','98567456v',' $customer_nic',' $veh_num','" . $_GET['job_id'] . "');";
if(mysqli_query($con, $sqlq)){
    echo "<script type='text/javascript'>alert('Quotation created successfully!');</script>";
} else{
    echo "<script type='text/javascript'>alert('Error! Please check again. ');</script>";
}

}
$result = mysqli_query($con,"SELECT * FROM job WHERE job_id='" . $_GET['job_id'] . "'");
$row= mysqli_fetch_array($result);
mysqli_close($con);
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
    <title>Cashier | Aurora Automotive Center</title>
    <title>Create Printable PDF invoice using PHP MySQL</title>
		
		
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
                                    <i class="fas fa-user"></i> <span>Cashier</span> <i style="font-size: .8em;" class="fas fa-caret-down"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end nav-link-menu">
                                    <ul class="nav-list">
                                        <li><a href="" class="dropdown-item"><i class="fas fa-address-card"></i> Profile</a></li>
                                        <li><a href="" class="dropdown-item"><i class="fas fa-envelope"></i> Messages</a></li>
                                        <li><a href="" class="dropdown-item"><i class="fas fa-cog"></i> Settings</a></li>
                                        <div class="dropdown-divider"></div>
                                        <li><a href="index.php" class="dropdown-item"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- end of navbar navigation -->

            <div class = 'container pt-5'>
            <form method='post' action=''>
				<div class='row'>
					
						<h3 class='text-success'>Fill here to create a quotation</h3>
					
					<div class='col-md-4'>
					<div class='form-group'>
					<label for="email" class="form-label">Job ID</label>
                     <input type="text" class="form-control" name="job_id" value="<?php echo $row['job_id']; ?>" disabled required>
					 </div>
						<div class='form-group'>
							<label>Customer NIC</label>
							<input type='text' name='customer_nic'  class='form-control' required>
						</div>
						<!-- <div class='form-group'>
							<label>Token ID</label>
							<input type='text' name='tid' class='form-control'>
						</div></br> -->
						<div class='form-group'>
							<label>Vehicle Number</label>
							<input type='text' name='veh_num'  class='form-control' required>
						</div>
						</br>
						<input type='submit' name='submit' value='Enter' class='btn btn-success float-right' >
						<a href="dashboard.php"><input type='button' value='Cancel' class='btn btn-danger float-right'></a>
                        <a href="addParts.php"><input type='button' value='Next' class='btn btn-success float-right'></a>
						
				</div>
				</form>
				
		</div>

		
            
        
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/chartsjs/Chart.min.js"></script>
    <script src="assets/js/dashboard-charts.js"></script>
    <script src="assets/js/script.js"></script>
    <script src="assets/js/form-validator.js"></script>
</body>

</html>
