<?php 
   $cus_nic = $_GET["cus_nic"];
   $fname = $_GET["fname"];
   $lname = $_GET["lname"];
   $no = $_GET["no"];
   $road = $_GET["road"];
   $city = $_GET["city"];
   $phone = $_GET["phone"];
   $email = $_GET["email"];
   
   //Database Connection here
   $conn = new mysqli('localhost','root','','aurora');
   if($conn->connect_error){
       die("Failed to connect : " .$conn->connect_error);
   }else{
       $stmt = $conn->prepare("Insert into customer(cus_nic, fname, lname, no, road, city, phone, email)
        values(?,?,?,?,?,?,?,?)");
       $stmt->bind_param("ssssssss" ,$cus_nic ,$fname ,$lname ,$no, $road ,$city ,$phone ,$email);
       $stmt->execute();   
       
            echo '<script type="text/javascript"> alert("Customer Registered Successfully") </script>';
        
        
       $stmt->close();
       $conn->close();
   }
?>