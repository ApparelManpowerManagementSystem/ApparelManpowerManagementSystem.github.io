<?php
$connection = mysqli_connect("localhost","root","","newmanpower"); // Establishing Connection with Server

if(isset($_POST['save'])){ // Fetching variables of the form which travels in URL
    $jobID=$_POST['jobID'];
    $jobTitle= $_POST['jobTitle'];
	$jobType = $_POST['jobType'];
    $jobCount = $_POST['jobCount'];
    $workerCount=$_POST['workerCount'];
    $jobPeriod = $_POST['jobPeriod'];
    $jobStatus = $_POST['jobStatus'];
    $jobStart = $_POST['jobStart'];
    $jobEnd = $_POST['jobEnd'];
    $jobProgress = $_POST['jobProgress'];
    $supID = $_POST['supID'];
    $locationID = $_POST['locationID'];
	
$query = "INSERT INTO supplier_job(jobID,jobTitle,jobType,jobCount,workerCount,jobPeriod,jobStatus,jobStart,jobEnd,jobProgress,supID,locationID) VALUES ('$jobID','$jobTitle','$jobType','$jobCount','$workerCount','$jobPeriod','$jobStatus','$jobStart','$jobEnd','$jobProgress','$supID','$locationID')";
if(mysqli_query($connection,$query))
{
 echo "Data Inserted successfully...!!";
}
else{
 echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
}
}
mysqli_close($connection); // Closing Connection with Server
?>

<!DOCTYPE html>
<html>
 <head>  
     
<title> Jobs Registration</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   
    </head>
    
    
    <body>
        
<div class="container">
     <h2>Supplier Jobs Registration</h2>
<form method="POST" action="insertsupplierjob.php">
    
    <div class="col-xs-6 col-lg-offset-2">
   <div class="form-group">
        
        <label for="jobID">Job ID:</label>
            <input type="number" class="form-control" id="jobID" placeholder="Enter Job ID" name="jobID">
    </div> 
    
    <div class="form-group">
        <label for="jobTitle">Job Title:</label>
            <input type="text" class="form-control" id="jobTitle" placeholder="Enter Job Title" name="jobTitle">
    </div>
    
    <div class="form-group">
        <label for="jobType">Job Type:</label>
            <input type="text" class="form-control" id="jobType" placeholder="Enter Job type" name="jobType">
    </div>
    
     <div class="form-group">
        <label for="jobCount">Job Count:</label>
            <input type="number" class="form-control" id="jobCount" placeholder="Enter Job Count" name="jobCount">
    </div>
     <div class="form-group">
        <label for="workerCount">Worker Count:</label>
            <input type="number" class="form-control" id="workerCount" placeholder="Enter Worker Count" name="workerCount">
    </div>
    <div class="form-group">
        <label for="jobPeriod">Job Period:</label>
            <input type="text" class="form-control" id="jobPeriod" placeholder="Enter Job Period" name="jobPeriod">
    </div>
    <div class="form-group">
        <label for="jobStatus">Job Status:</label>
            <input type="text" class="form-control" id="jobStatus" placeholder="Enter Job Status" name="jobStatus">
    </div>
    <div class="form-group">
        <label for="jobStart">Job Start:</label>
            <input type="text" class="form-control" id="jobStart" placeholder="Enter Job Start" name="jobStart">
    </div>
         <div class="form-group">
        <label for="jobEnd">Job End:</label>
            <input type="text" class="form-control" id="jobEnd" placeholder="Enter Job End" name="jobEnd">
    </div>
        <div class="form-group">
        <label for="jobProgress">Job Progress:</label>
            <input type="text" class="form-control" id="jobProgress" placeholder="Enter Job Progress" name="jobProgress">
    </div>
    
    <div class="form-group">
        <label for="supID">Supplier ID:</label>
            <input type="text" class="form-control" id="supID" placeholder="Enter Supplier ID:" name="supID">
    </div>
    <div class="form-group">
        <label for="locationID">Location ID:</label>
            <input type="number" class="form-control" id="locationID" placeholder="Enter Location ID:" name="locationID">
    </div>
       
    
    
       <div class="form-row text-right">
           
        <div class="col-12">
         <button type="button" class="btn btn-danger">Cancel</button>
        <button type="submit" name="save" id="save" class="btn btn-success">Submit</button>
       </div>
    </div>
 </div>
        
   
 
</form>
   
        </div>
        
    </body>
</html>
