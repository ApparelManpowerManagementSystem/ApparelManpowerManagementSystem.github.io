<?php
$connection = mysqli_connect("localhost","root","","newmanpower"); // Establishing Connection with Server

if(isset($_POST['save'])){ // Fetching variables of the form which travels in URL
   
    $notificationID = $_POST['notificationID'];
	$notification = $_POST['notification'];
    $userType = $_POST['userType'];
    
	
$query = "INSERT INTO notification(notificationID,notification,userType) VALUES ('$notificationID','$notification','$userType')";
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
     
<title> Notification</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   
    </head>
    
    
    <body>
        
<div class="container">
     <h2>Notification Details</h2>
<form method="POST" action="insertnotification.php">
    
    <div class="col-xs-6 col-lg-offset-2">
    
    <div class="form-group">
        <label for="notificationID">Notification ID:</label>
            <input type="text" class="form-control" id="notificationID" placeholder="Enter notification ID" name="notificationID">
    </div>
    
    <div class="form-group">
        <label for="notification">Notification:</label>
            <input type="text" class="form-control" id="notification" placeholder="Enter Notification" name="notification">
    </div>
    
     <div class="form-group">
        <label for="userType"> User Type:</label>
            <input type="text" class="form-control" id="userType" placeholder="Enter User Type" name="userType">
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
