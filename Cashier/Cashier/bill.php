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
                    <a href="bill.php"><i class="fas fa-user-friends"></i> Bill</a>
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
                            <h2 class="page-title">Recent Bills</h2>
                            <a href="createBill.php" style="margin-left:80%;" type="button" class="btn btn-primary mb-2">Create New</a>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-12">
                            <div class="card">
                                <div class="card-header">Recent Bill Details</div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                    <?php

$con = mysqli_connect("localhost","root","","aurora");

//select database


//perform sqk operations
$sql = "SELECT * FROM bill";
$result = mysqli_query($con,$sql);

//print result

echo "<table width=100% align=center>";
echo "<tr >";
echo "<th>Bill ID</th>";
echo "<th>Total</th>";
echo "<th>Date</th>";
echo "<th>Discount</th>";
echo "<th>Extra Charge</th>";
echo "<th>Quotation ID</th>";
// echo "<th>Token ID</th>";
echo "</tr>";

while($row = mysqli_fetch_array($result))
{
	echo "<tr >";
	echo "<td>$row[0] </td>";
	echo "<td>$row[1] </td>";
    echo "<td>$row[4] </td>";
	echo "<td>$row[2] </td>";
    echo "<td>$row[3] </td>";
    echo "<td>$row[6] </td>";
    echo "<td>$row[7] </td>";
	echo "</tr>";
}

echo "</table>";
//close connection
mysqli_close($con);

?>
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
