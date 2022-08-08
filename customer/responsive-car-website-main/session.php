<?php
   include('Config.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($db,"select cus_nic from customer where cus_nic = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['cus_nic'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
      die();
   }
?>