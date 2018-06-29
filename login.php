<?php

session_start();

if(isset($_SESSION['userType'])) {
	header("location: ../index.php");
}
if(isset($_POST['submit'])){//check submit button is clicked
    require_once('db_config/config.php');//get databse connection
    //get name and password data
    $username=$_POST['name'];
    $password=$_POST['pwd'];
    
    //hash the password to match with database password
    $hashed_password=hash('sha512',$password);
    
    //sql query
    $query="SELECT * FROM users WHERE userID=$username AND userPassword=$hashed_password LIMIT 1";
    
    //exucte sql query
    $result=mysqli_query($conn,$query);
    //check whther it returns results
    if(mysqli_num_rows($result)>0){
        $userlogin = mysqli_fetch_array($userquery,MYSQLI_ASSOC);
        $_SESSION['userType']=$userlogin["userType"];
        $_SESSION['userID']=$userlogin["userID"];
        if($userlogin["userType"]==1){
            header("location: error.php");
        }
    }
    else{
        header("location: error.php");
    }

}


mysqli_close($conn);
?>