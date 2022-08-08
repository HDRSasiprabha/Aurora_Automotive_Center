<?php
    $db = mysqli_connect("localhost","root","","aurora");
    
        if(!$db){
            echo "error database connection error".mysqli_error($db);
        }
?>