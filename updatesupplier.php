<?php
$connection = mysqli_connect("localhost","root","","newmanpower"); // Establishing Connection with Server

if(isset($_POST['save'])){ // Fetching variables of the form which travels in URL
   
    $supID = $_POST['supID'];
	$supName = $_POST['supName'];
    $supPhone = $_POST['supPhone'];
    $supAddress = $_POST['supAddress'];
    $supEmail = $_POST['supEmail'];
    
	
$query = "UPDATE supplier SET supName='$supName',supPhone='$supPhone',supAddress='$supAddress',supEmail='$supEmail' WHERE supID='$supID'";
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
     
<title> Supplier</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   
    </head>
    
    
    <body>
        
<div class="container">
     <h2>Update Supplier Details</h2>
<form method="POST" action="updatesupplier.php">
    
    <div class="col-xs-6 col-lg-offset-2">
    
    <div class="form-group">
        <label for="supID">Supplier ID:</label>
            <input type="text" class="form-control" id="supID" placeholder="Enter Supplier ID" name="supID">
    </div>
    
    <div class="form-group">
        <label for="supName">Supplier Name:</label>
            <input type="text" class="form-control" id="supName" placeholder="Enter Supplier Name" name="supName">
    </div>
    
     <div class="form-group">
        <label for="supPhone">Supplier Phone:</label>
            <input type="text" class="form-control" id="supPhone" placeholder="Enter Supplier Phone" name="supPhone">
    </div>
     <div class="form-group">
        <label for="supAddress">Supplier Address:</label>
            <input type="text" class="form-control" id="supAddress" placeholder="Enter Supplier Address" name="supAddress">
    </div>
    <div class="form-group">
        <label for="supEmail">Supplier Email:</label>
            <input type="text" class="form-control" id="supEmail" placeholder="Enter Supplier Email" name="supEmail">
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
