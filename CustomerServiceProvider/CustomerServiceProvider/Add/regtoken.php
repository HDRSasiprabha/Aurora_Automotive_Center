<?php 
   $tok_id = $_POST["tok_id"];
   $purpose = $_POST["purpose"];
   $cus_nic = $_POST["cus_nic"];
   $veh_num = $_POST["veh_num"];
   
   //Database Connection here
   $conn = new mysqli('localhost','root','','aurora');
   if($conn->connect_error){
       die("Failed to connect : " .$conn->connect_error);
   }else{
       $stmt = $conn->prepare("Insert into token(tok_id,purpose,cus_nic,veh_num)
        values(?,?,?,?)");
       $stmt->bind_param("ssss" ,$tok_id ,$purpose ,$cus_nic ,$veh_num);
       $stmt->execute();   
       
            echo '<script type="text/javascript"> alert("Data Added Successfully") </script>';
           
        
       $stmt->close();
       $conn->close();
   }
?>