<?php
$connection = mysqli_connect("localhost","root","","newmanpower"); // Establishing Connection with Server

if(isset($_POST['save'])){ // Fetching variables of the form which travels in URL
   // $jobID=$_POST['jobID'];
    $jobTitle= $_POST['jobTitle'];
	$jobType = $_POST['jobType'];
    $jobAmount = $_POST['jobAmount'];
    $jobPeriod = $_POST['jobPeriod'];
    $jobPrice = $_POST['jobPrice'];
    $jobDate = $_POST['jobDate'];
    $jobStatus = $_POST['jobStatus'];
    $comID = $_POST['comID'];
    $supID = $_POST['supID'];
	
$query = "INSERT INTO company_job(jobTitle,jobType,jobAmount,jobPeriod,jobPrice,jobDate,jobStatus,comID,supID) VALUES ('$jobTitle','$jobType','$jobAmount','$jobPeriod','$jobPrice','$jobDate','$jobStatus','$comID','$supID')";
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
     <h2>Company Jobs Registration</h2>
<form method="POST" action="companyjobs.php">
    
    <div class="col-xs-6 col-lg-offset-2">
   <div class="form-group">
        
       <!-- <label for="jobID">Job ID:</label>
            <input type="number" class="form-control" id="jobID" placeholder="Enter Job ID" name="jobID">
    </div> -->
    
    <div class="form-group">
        <label for="jobTitle">Job Title:</label>
            <input type="text" class="form-control" id="jobTitle" placeholder="Enter Job Title" name="jobTitle">
    </div>
    
    <div class="form-group">
        <label for="jobType">Job Type:</label>
            <input type="text" class="form-control" id="jobType" placeholder="Enter Job type" name="jobType">
    </div>
    
     <div class="form-group">
        <label for="jobAmount">Job Amount:</label>
            <input type="text" class="form-control" id="jobAmount" placeholder="Enter Job Amount" name="jobAmount">
    </div>
     <div class="form-group">
        <label for="jobPeriod">Job Period:</label>
            <input type="text" class="form-control" id="jobPeriod" placeholder="Enter Job Period" name="jobPeriod">
    </div>
    <div class="form-group">
        <label for="jobPrice">Job Price:</label>
            <input type="text" class="form-control" id="jobPrice" placeholder="Enter Job Price" name="jobPrice">
    </div>
    <div class="form-group">
        <label for="jobDate">Job Date:</label>
            <input type="text" class="form-control" id="jobDate" placeholder="Enter Job Date" name="jobDate">
    </div>
    <div class="form-group">
        <label for="jobStatus">Job Status:</label>
            <input type="text" class="form-control" id="jobStatus" placeholder="Enter Job Status" name="jobStatus">
    </div>
    <div class="form-group">
        <label for="comID">Company ID:</label>
            <input type="text" class="form-control" id="comID" placeholder="Enter Company ID:" name="comID">
    </div>
    <div class="form-group">
        <label for="supID">Supplier ID:</label>
            <input type="text" class="form-control" id="supID" placeholder="Enter Supplier ID:" name="supID">
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
