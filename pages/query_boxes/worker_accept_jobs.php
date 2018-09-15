<?php
session_start();
if(isset($_GET['jobID'])){
    if($_SESSION['userStatus']=='offline'){
        echo "<script>window.location.replace('../worker.php');alert('You are already joined a job');</script>";

        
    }else{

        require_once("../../db_config/config.php");
        $workerID=$_SESSION["userID"];
        $jobID=$_GET['jobID'];
        $_SESSION['jobID']=$jobID;
        $_SESSION['userStatus']='offline';
        $_SESSION['jobStatus']='Pending';

        $queryUpdate="UPDATE worker SET workerStatus='offline' WHERE workerID='$workerID'";
        mysqli_query($conn,$queryUpdate);

        $userquery="INSERT INTO worker_pending VALUES('$jobID','$workerID')";

        echo $userquery;
        if(mysqli_query($conn,$userquery)){
            echo "<script>window.location.replace('../worker.php');alert('You are joined for a job');</script>";
            
        }
        else{
            echo "<script>alert('Oops something went wrong!');</script>";
        } 

    }
    
}



        
         
    ?>