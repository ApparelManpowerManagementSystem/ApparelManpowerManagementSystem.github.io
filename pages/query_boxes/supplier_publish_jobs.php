<?php

	if(isset($_POST['publishJob'])){
		require_once '../../db_config/config.php';
		print_r($_POST);
		$jobID=$_POST['jobID'];
		$jobTitle=$_POST['jobTitle'];
		$jobType=$_POST['jobType'];
		$jobAmount=$_POST['jobAmount'];
		$workerCount=$_POST['workerCount'];
		$jobPeriod=$_POST['jobPeriod'];
		$jobPublished=$_POST['jobPublishedD'];
		$supID=$_POST['suppID'];
		$locID=$_POST['locID'];
		$comID=$_POST['compID'];

		$query="INSERT INTO supplier_job (`jobTitle`,`jobType`,`jobCount`,`workerCount`,`jobPeriod`,`jobStatus`,`jobPublished`,`supID`,`locationID`,`comID`) VALUES ('$jobTitle','$jobType','$jobAmount','$workerCount','$jobPeriod','offline','$jobPublished','$supID','$locID','$comID')";

		if(mysqli_query($conn,$query)){
			$queryUpdate="UPDATE company_job SET jobStatus='online' WHERE jobID=$jobID";
			mysqli_query($conn,$queryUpdate);

			echo "<script>window.location.replace('../supplier.php');alert('Job Published Success!!!');</script>";
		}else{
			echo "alert('Try Again!!!');</script>";
		}



	}
	
?>