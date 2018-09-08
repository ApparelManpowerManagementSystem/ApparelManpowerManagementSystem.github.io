<?php
$connection = mysqli_connect("localhost","root","","newmanpower"); // Establishing Connection with Server

if(isset($_POST['save'])){ // Fetching variables of the form which travels in URL
   
    $userID = $_POST['userID'];
	$userPassword = $_POST['userPassword'];
    $userType = $_POST['userType'];
    
	
$query = "INSERT INTO users(userID,userPassword,userType) VALUES ('$userID','$userPassword','$userType')";
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
     
<title> User Details</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   
    </head>
    
    
    <body>
        
<div class="container">
     <h2>User Details</h2>
<form method="POST" action="insertuser.php">
    
    <div class="col-xs-6 col-lg-offset-2">
    
    <div class="form-group">
        <label for="userID">User ID:</label>
            <input type="text" class="form-control" id="userID" placeholder="Enter User ID" name="userID">
    </div>
    
    <div class="form-group">
        <label for="userPassword">User Password:</label>
            <input type="text" class="form-control" id="userPassword" placeholder="Enter User Password" name="userPassword">
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
