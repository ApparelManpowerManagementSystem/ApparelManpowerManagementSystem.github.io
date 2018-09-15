<?php
    if(isset($_POST['addComJob'])){ 
    session_start();
    require_once('../../db_config/config.php');
    $jobTitle= $_POST['jobTitle'];
    $jobType = $_POST['jobType'];
    $jobAmount = $_POST['jobAmount'];
    $jobPeriod = $_POST['jobPeriod'];
    $jobPrice = $_POST['jobPrice'];
    $jobDate = $_POST['jobDate'];
    $jobStatus = 'offline';
    $comID = $_SESSION['userID'];
    $supID = 'S2147483647';

    $query = "INSERT INTO company_job (jobTitle,jobType,jobAmount,jobPeriod,jobPrice,jobDate,jobStatus,comID,supID) VALUES ('$jobTitle','$jobType','$jobAmount','$jobPeriod','$jobPrice','$jobDate','$jobStatus','$comID','$supID')";
    if(mysqli_query($conn,$query)){
        echo "<script>window.location.replace('../company.php');alert('Company Job Published Success!!!');</script>";
    }
    else{
        echo "<script>window.location.replace('../company.php');alert('Login Success!!!');</script>";
    }
    
}

?>