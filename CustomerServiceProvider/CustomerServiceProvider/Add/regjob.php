<?php 
   $job_id = $_POST["job_id"];
   $color = $_POST["color"];
   $job_type = $_POST["job_type"];
   $job_status = $_POST["job_status"];
   $reg_date = $_POST["reg_date"];
   $mec_id = $_POST["mec_id"];
   $vehi_num = $_POST["vehi_num"];
   $cus_nic = $_POST["cus_nic"];
   
   //Database Connection here
   $conn = new mysqli('localhost','root','','aurora');
   if($conn->connect_error){
       die("Failed to connect : " .$conn->connect_error);
   }else{
       $stmt = $conn->prepare("Insert into job(job_id,color,job_type,job_status,reg_date,mec_id,vehi_num,cus_nic)
        values(?,?,?,?,?,?,?,?)");
       $stmt->bind_param("ssssssss" ,$job_id ,$color ,$job_type ,$job_status, $reg_date, $mec_id, $vehi_num, $cus_nic);
       $stmt->execute();   
       
            echo '<script type="text/javascript"> alert("Data Added Successfully") </script>';
           
        
       $stmt->close();
       $conn->close();
   }
?>