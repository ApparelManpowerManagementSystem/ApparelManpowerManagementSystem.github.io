<?php
$connection = mysqli_connect("localhost","root","","manpower"); // Establishing Connection with Server

if(isset($_POST['save'])){ // Fetching variables of the form which travels in URL
    $workerID=$_POST['workerID'];
    $workerName= $_POST['workerName'];
	$workerNIC = $_POST['workerNIC'];
    $workerPhone = $_POST['workerPhone'];
    $workerMaxWorkPeriod = $_POST['workerMaxWorkPeriod'];
    $workerEmail = $_POST['workerEmail'];
    $workerStatus= $_POST['workerStatus'];
    
	
$query = "INSERT INTO worker(workerID,workerName,workerNIC,workerPhone,workerMaxWorkPeriod,workerEmail,workerStatus) VALUES ('$workerID','$workerName','$workerNIC','$workerPhone','$workerMaxWorkPeriod','$workerEmail','$workerStatus')";
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
     
<title> Worker Registration</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    
    
    <body>
        
<div class="container">
     <h2>Worker Registration</h2>
<form method="POST" action="worker.php">
    
    <div class="col-xs-6 col-lg-offset-2">
   <div class="form-group">
        
       <label for="workerID">Worker ID:</label>
            <input type="String" class="form-control" id="workerID" placeholder="Enter worker ID" name="workerID">
    </div>
    
    <div class="form-group">
        <label for="workerName">Name:</label>
            <input type="text" class="form-control" id="workerName" placeholder="Enter Worker Name" name="workerName">
    </div>
    
    <div class="form-group">
        <label for="workerNIC">NIC:</label>
            <input type="text" class="form-control" id="workerNIC" placeholder="Enter NIC Number" name="workerNIC">
    </div>
    
     <div class="form-group">
        <label for="workerPhone">Contact Number:</label>
            <input type="tel" class="form-control" id="workerPhone" placeholder="Enter Contact Number" name="workerPhone">
    </div>
     <div class="form-group">
        <label for="workerMaxWorkPeriod">Work Period:</label>
            <input type="text" class="form-control" id="workerMaxWorkPeriod" placeholder="Enter Work Period" name="workerMaxWorkPeriod">
    </div>
    <div class="form-group">
        <label for="workerEmail">Email:</label>
            <input type="email" class="form-control" id="workerEmail" placeholder="Enter Email Address" name="workerEmail">
    </div>
    <div class="form-group">
        <label for="workerStatus">Worker Status:</label>
            <input type="text" class="form-control" id="workerStatus" placeholder="Enter Status" name="workerStatus">
    
	 </div>

       
    
    
       <div class="form-row text-right">
           
        <div class="col-12">
         <button type="button" class="btn btn-danger">Cancel</button>
        <button type="submit" name="save" id="save" class="btn btn-success">Submit</button>
       </div>
    </div>
        
   
 
</form>
   
        </div>
        
    </body>
</html>
