<?php
$connection = mysqli_connect("localhost","root","","newmanpower"); // Establishing Connection with Server

if(isset($_POST["notificationID"])){ // Fetching variables of the form which travels in URL
   
    $notificationID = mysqli_real_escape_string($connection, $_POST['notificationID']);
	$notification = mysqli_real_escape_string($connection, $_POST['notification']);
    $userType = mysqli_real_escape_string($connection,$_POST['userType']);
    
	
$query = "INSERT INTO notification(notificationID,notification,userType) VALUES ('$notificationID','$notification','$userType')";

    mysqli_query($connection,$query);
}
?>