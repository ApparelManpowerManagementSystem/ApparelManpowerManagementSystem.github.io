<?php
	session_start();
	require_once '../../db_config/config.php';
	$workerID=$_SESSION['userID'];
	$queryDelete="DELETE FROM worker_pending WHERE workerID='$workerID'";
	
	$queryUpdate="UPDATE worker SET workerStatus='online' WHERE workerID='$workerID'";
	$_SESSION['userStatus']='online';
	if(mysqli_query($conn,$queryDelete)){
		mysqli_query($conn,$queryUpdate);
		echo "<script>window.location.replace('../worker.php');alert('You leaved form the job');hide_div('job')</script>";
	}else{
		echo "window.location.replace('../worker.php');;alert('Try again!!!');</script>";
	}

?>