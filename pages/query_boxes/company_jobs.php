<?php
$connection = mysqli_connect("localhost", "root", "", "manpower"); // Establishing Connection with Server
//$db = mysqli_select_db("manpower", $connection); // Selecting Database from Server
if(isset($_POST['addComJob'])){ // Fetching variables of the form which travels in URL
    $jobTitle= $_POST['jobTitle'];
	$jobType = $_POST['jobType'];
    $jobAmount = $_POST['jobAmount'];
    $jobPeriod = $_POST['jobPeriod'];
    $jobPrice = $_POST['jobPrice'];
    $jobDate = $_POST['jobDate'];
    $jobStatus = $_POST['jobStatus'];
    $comID = $_POST['comID'];
    $supID = $_POST['supID'];
    $locID = $_POST['locID'];
	
    $query = "INSERT INTO company_job (jobTitle,jobType,jobAmount,jobPeriod,jobPrice,jobDate,jobStatus,comID,supID,locID) VALUES ('$jobTitle','$jobType','$jobAmount','$jobPeriod','$jobPrice','$jobDate','$jobStatus','$comID','$supID','$locID')";
    if(mysqli_query($connection,$query)){
        echo "Data Inserted successfully...!!";
    }
    else{
        echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
    }
    }
?>