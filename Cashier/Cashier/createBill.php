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
					
						<h3 class='text-success'>Invoice Details</h3>
					
					<div class='col-md-4'>
						
						<div class='form-group'>
							<label>Quotation ID</label>
							<input type='text' name='qid'  class='form-control' required>
						</div>
						<!-- <div class='form-group'>
							<label>Token ID</label>
							<input type='text' name='tid' class='form-control'>
						</div></br> -->
						<div class='form-group'>
							<label>Service Charge</label>
							<input type='text' name='extra_charge'  class='form-control' required>
						</div>
						<div class='form-group'>
							<label>Customer NIC</label>
							<input type='text' name='nic' class='form-control' required>
						</div>
						
					</div>
					<div class='col-md-4'>
					
						<div class='form-group'>
							<label>Discount Amount</label>
							<input type='text' name='discount' class='form-control' required>
						</div>
						<div class='form-group'>
							<label>Date</label>
							<input type='date' name='date' class='form-control' required>
						</div></br>
						<div class='form-group'>
						<input type='submit' name='submit' value='Enter' class='btn btn-success float-right'>
						<a href="createBill.php"><input type='button' value='Cancel' class='btn btn-danger float-right'></a>
						</div>
					</div>
				</div>
				<div class='row'>
					<div class='col-md-12'>
</br>
						<h5 class='text-success'>Bill Details</h5>
						</br>
						<?php

$con = mysqli_connect("localhost","root","","aurora");

//select database


//perform sqk operations
if($_SERVER["REQUEST_METHOD"] == "POST") {
$qid = mysqli_real_escape_string($con,$_POST['qid']);
// $tid = mysqli_real_escape_string($con,$_POST['tid']);
$dis = mysqli_real_escape_string($con,$_POST['discount']);
$charge = mysqli_real_escape_string($con,$_POST['extra_charge']);
$date=mysqli_real_escape_string($con,$_POST['date']);
$sql = "SELECT part_quotation.pid, part.name, part.price, part_quotation.quantity,part.price*part_quotation.quantity as Total FROM part_quotation, part 
where part_quotation.qid = '$qid' and part_quotation.pid = part.part_id; ";
$sql1 = "SELECT sum(part.price * part_quotation.quantity) as net_tot FROM part_quotation, part 
where part_quotation.qid = '$qid' and part_quotation.pid = part.part_id ";

$result = mysqli_query($con,$sql);
$result1 = mysqli_query($con,$sql1);

//print result

echo "<table width=100% align=center>";
echo "<th>Part ID</th>";
echo "<th>Part Name</th>";
echo "<th>Unit Price</th>";
echo "<th>Quantity</th>";
echo "<th>Total</th>";
echo "</tr>";

while($row = mysqli_fetch_array($result))
{
	echo "<td>$row[0] </td>";
	echo "<td>$row[1] </td>";
	echo "<td>$row[2] </td>";
	echo "<td>$row[3] </td>";
	echo "<td>$row[4] </td>";
    ;
	echo "</tr>";
}

echo "</table>";
echo "</br>";
echo "</br>";

while($row = mysqli_fetch_array($result1))
{
	echo "<table width=27% align=right>";
	echo "<td>Net Total </td>";
	echo "<td >$row[0] </td>";
	echo "</table>";
	echo "</br>";
    echo "</br>";
	echo "<table width=27% align=right>";
	echo "<td>Discount </td>";
	echo "<td >-$dis</td>";
	echo "</table>";
	echo "</br>";
    echo "</br>";
	echo "<table width=27% align=right>";
	echo "<td>Ser. Charge</td>";
	echo "<td >$charge</td>";
	echo "</table>";
	echo "</br>";
    echo "</br>";
	$gtot=$row[0]-$dis+$charge;
	echo "<table width=27% align=right>";
	echo "<th>Grand Total</th>";
	echo "<th >$gtot</th>";
	echo "</table>";
	echo"<a href='generatepdf.php'><input type='button' value='Print' class='btn btn-primary float-right'></a>";
}


$sqlq = "INSERT INTO `bill`( `total`, `discount`, `extra_charge`, `date`, `cash_id`, `qid`) 
VALUES ('$gtot','$dis','$charge','$date','98456324v','$qid')";
if(mysqli_query($con, $sqlq)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}
//close connection
mysqli_close($con);
}
?>
						
					</div>
				</div>
			</form>
		</div>
		<script>
			$(document).ready(function(){
				$("#date").datepicker({
					dateFormat:"dd-mm-yy"
				});
				
				$("#btn-add-row").click(function(){
					var row="<tr> <td><input type='text' required name='part_id[]' class='form-control'></td><td><input type='text' required name='name[]' class='form-control'></td> <td><input type='text' required name='price[]' class='form-control price'></td> <td><input type='text' required name='qty[]' class='form-control qty'></td> <td><input type='text' required name='total[]' class='form-control total'></td> <td><input type='button' value='x' class='btn btn-danger btn-sm btn-row-remove'> </td> </tr>";
					$("#product_tbody").append(row);
				});
				
				$("body").on("click",".btn-row-remove",function(){
					if(confirm("Are You Sure?")){
						$(this).closest("tr").remove();
						grand_total();
					}
				});
            </script>
            
        
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/chartsjs/Chart.min.js"></script>
    <script src="assets/js/dashboard-charts.js"></script>
    <script src="assets/js/script.js"></script>
    <script src="assets/js/form-validator.js"></script>
</body>

</html>
