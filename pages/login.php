<?php

session_start();

/*if(isset($_SESSION['userType'])) {
	header("location: ../index.php");
}*/
if(isset($_POST['submit'])){
    require_once('../db_config/config.php');
    $username=$_POST['name'];
    $password=$_POST['pwd'];
    
    $hashed_password=hash('sha512',$password);
    echo "logged";
    $query="SELECT * FROM users WHERE userID=$username AND userPassword=$hashed_password LIMIT 1";

    $result=mysqli_query($conn,$query);

    if(mysqli_num_rows($result)>0){
        $userlogin = mysqli_fetch_array($userquery,MYSQLI_ASSOC);
        $_SESSION['userType']=$userlogin["userType"];
        $_SESSION['userID']=$userlogin["userID"];
        echo "logged";
        if($userlogin["userType"]==3){
            header("location: worker.php");
        }
        else if($userlogin["userType"]==2){
            header("location: supplier.php");
        }
        else if($userlogin["userType"]==1){
            header("location: company.php");
        }
    }
    else{
        header("location: index.php");
    }

}

?>