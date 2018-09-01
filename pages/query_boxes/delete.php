<?php 

require_once('../../db_config/config.php');

if(isset($_GET['delete_company_job'])){
	$comJobID=$_GET['comJobID'];
	$deleq="DELETE FROM company_jobs WHERE comJobID=$comJobID";
	$delq=mysqli_query($connection, $deleq);
	header("location: ../company.php");
} elseif (isset($_GET['delete_supplier_job'])) {
	$obID=$_GET['jobID'];
	$deleq="DELETE FROM supplier_jobs WHERE jobID=$jobID";
	$delq=mysqli_query($connection, $deleq);
	header("location: ../company.php");
}elseif(isset($_GET[''])){
	
}elseif(isset($_GET[''])){
	
}elseif(isset($_GET[''])){
	
}elseif(isset($_GET[''])){

}
elseif(isset($_GET[''])){
	
}