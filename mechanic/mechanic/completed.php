<?php

$connection=mysqli_connect('localhost','root','','aurora');
if (isset( $_GET['task'])){
    // $job_id=$_GET['job_id'];
    $task=$_GET['task'];
    $delete=mysqli_query($connection,"UPDATE `job_tasks` SET `task_status`='completed' WHERE task='$task' ");
    if(mysqli_query($connection,"UPDATE `job_tasks` SET `task_status`='completed' WHERE  task='$task'")){
        echo "<script type='text/javascript'>alert('Task Completed added successfully.');</script>";
    } else{
        echo "<script type='text/javascript'>alert('Error! Please check again. ');</script>";
    }
    
}

$select="select * from job_tasks where job_id='" . $_GET['job_id'] . "'";
$query=mysqli_query($connection,$select);

?>

