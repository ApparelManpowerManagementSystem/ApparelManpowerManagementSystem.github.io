<?php
$connection = mysqli_connect("localhost","root","","manpower"); // Establishing Connection with Server

if(isset($_POST['save'])){ // Fetching variables of the form which travels in URL
   
    $workerID=$_POST['workerID'];
    $reason= $_POST['reason'];
	$time = $_POST['time'];
    
    
	
$query = "UPDATE worker_leaves SET workerName='$workerName',reason='$reason',time='$time'
WHERE workerID='$workerID'";
if(mysqli_query($connection,$query))
{
 echo "Data Updated successfully...!!";
}
else{
 echo "<p>Update Failed <br/> Some Fields are Blank....!!</p>";
}
}
mysqli_close($connection); // Closing Connection with Server
?>

<!DOCTYPE html>
<html>
 <head>  
     
<title> Worker </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   
    </head>
    
    
    <body>
        
<div class="container">
     <h2>Update Worker Leaves Details</h2>
<form method="POST" action="updateworker.php">
    
    <div class="col-xs-6 col-lg-offset-2">
    
    <div class="form-group">
        
       <label for="workerID">Worker ID:</label>
            <input type="String" class="form-control" id="workerID" placeholder="Enter worker ID" name="workerID">
    </div>
    
    <div class="form-group">
        <label for="reason">Reason:</label>
            <input type="text" class="form-control" id="reason" placeholder="Enter Reason" name="reason">
    </div>
    
    <div class="form-group">
        <label for="time">Time:</label>
            <input type="text" class="form-control" id="time" placeholder="Enter time" name="time">
    </div>

    
       <div class="form-row text-right">
           
        <div class="col-12">
         <button type="button" class="btn btn-danger">Cancel</button>
        <button type="submit" name="save" id="save" class="btn btn-success">Update</button>
       </div>
    </div>
        
   
 
</form>
   
        </div>
        
    </body>
</html>
