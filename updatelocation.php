<?php
$connection = mysqli_connect("localhost","root","","newmanpower"); // Establishing Connection with Server

if(isset($_POST['save'])){ // Fetching variables of the form which travels in URL
   
    $locID = $_POST['locID'];
	$locName = $_POST['locName'];
    $locStreet = $_POST['locStreet'];
    $locVillage = $_POST['locVillage'];
    $locCity = $_POST['locCity'];
    
	
$query = "UPDATE location SET locName='$locName',locStreet='$locStreet',locVillage='$locVillage',locCity='$locCity' WHERE locID=$locID";
if(mysqli_query($connection,$query))
{
 echo "Data Updated successfully...!!";
}
else{
 echo "<p> Update Failed <br/> Some Fields are Blank....!!</p>";
}
}
mysqli_close($connection); // Closing Connection with Server
?>

<!DOCTYPE html>
<html>
 <head>  
     
<title> Location Details</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   
    </head>
    
    
    <body>
        
<div class="container">
     <h2>Update Location Details</h2>
<form method="POST" action="updatelocation.php">
    
    <div class="col-xs-6 col-lg-offset-2">
    
    <div class="form-group">
        <label for="locID">Location ID:</label>
            <input type="text" class="form-control" id="locID" placeholder="Enter Location ID" name="locID">
    </div>
    
    <div class="form-group">
        <label for="locName">Location Name:</label>
            <input type="text" class="form-control" id="locName" placeholder="Enter Location Name" name="locName">
    </div>
    
     <div class="form-group">
        <label for="locStreet">Location Street:</label>
            <input type="text" class="form-control" id="locStreet" placeholder="Enter Location Street" name="locStreet">
    </div>
     <div class="form-group">
        <label for="locVillage">Location Village:</label>
            <input type="text" class="form-control" id="locVillage" placeholder="Enter Location Village" name="locVillage">
    </div>
    <div class="form-group">
        <label for="locCity">Location City:</label>
            <input type="text" class="form-control" id="locCity" placeholder="Enter Location City" name="locCity">
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
