<?php
$connection = mysqli_connect("localhost","root","","newmanpower"); // Establishing Connection with Server

if(isset($_POST['save'])){ // Fetching variables of the form which travels in URL
   
    $comID = $_POST['comID'];
	$comName = $_POST['comName'];
    $comPhone = $_POST['comPhone'];
    $comAddress = $_POST['comAddress'];
    $comEmail = $_POST['comEmail'];
    
	
$query = "UPDATE company SET comName='$comName',comPhone='$comPhone',comAddress='$comAddress',comEmail='$comEmail' WHERE comID='$comID'";
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
     
<title> Company </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   
    </head>
    
    
    <body>
        
<div class="container">
     <h2>Update Company Details</h2>
<form method="POST" action="updatecompany.php">
    
    <div class="col-xs-6 col-lg-offset-2">
    
    <div class="form-group">
        <label for="comID">Company ID:</label>
            <input type="text" class="form-control" id="comID" placeholder="Enter Company ID" name="comID">
    </div>
    
    <div class="form-group">
        <label for="comName">Company Name:</label>
            <input type="text" class="form-control" id="comName" placeholder="Enter Company Name" name="comName">
    </div>
    
     <div class="form-group">
        <label for="comPhone">Company Phone:</label>
            <input type="text" class="form-control" id="comPhone" placeholder="Enter Company Phone" name="comPhone">
    </div>
     <div class="form-group">
        <label for="comAddress">Company Address:</label>
            <input type="text" class="form-control" id="comAddress" placeholder="Enter Company Address" name="comAddress">
    </div>
    <div class="form-group">
        <label for="comEmail">Company Email:</label>
            <input type="text" class="form-control" id="comEmail" placeholder="Enter Company Email" name="comEmail">
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
