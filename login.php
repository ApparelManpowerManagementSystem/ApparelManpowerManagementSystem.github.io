<?php
session_start();

if(isset($_POST['submitWL'])){//check submit button is clicked
    require_once('db_config/config.php');//get databse connection
    //get name and password data
    $username=$_POST['nameWL'];
    $password=$_POST['pwdWL'];
    
    //hash the password to match with database password
    $hashed_password=hash('sha512',$password);
    
    //sql query
    $query="SELECT * FROM worker_personal WHERE workerPhone=$username AND workerPassword=$hashed_password OR workerEmail=$username AND workerPassword=$hashed_password LIMIT 1";
    
    //exucte sql query
    $result=mysqli_query($conn,$query);
    //check whther it returns results
    if(mysqli_num_rows($result)>0){
        header("location: worker.php");
    }
    else{
        header("location: error.php");
    }

}

if(isset($_POST['submitSL'])){
    require_once('db_config/config.php');
    $username=$_POST['nameSL'];
    $password=$_POST['pwdSL'];

    $hashed_password=hash('sha512',$password);
    
    $query="SELECT * FROM supplier_personal WHERE supPhone=$username AND supPassword=$password OR supEmail=$username AND supPassword=$password LIMIT 1";

    $result=mysqli_query($conn,$query);

    if(mysqli_num_rows($result)>0){
        header("location: supplier.php");
    }
    else{
        header("location: error.php");
    }
}

if(isset($_POST['submitCL'])){
    require_once('db_config/config.php');
    $username=$_POST['nameCL'];
    $password=$_POST['pwdCL'];

    $hashed_password=hash('sha512',$password);
    
    $query="SELECT * FROM company_personal WHERE comEmail=$username AND comPassword=$password";

    $result=mysqli_query($conn,$query);

    if(mysqli_num_rows($result)>0){
        header("location: company.php");
    }
    else{
        header("location: error.php");
    }
}


mysqli_close($conn);
?>