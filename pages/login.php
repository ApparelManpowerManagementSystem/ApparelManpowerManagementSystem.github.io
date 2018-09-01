<?php

if(isset($_POST['submitLogin'])){
    require_once('../db_config/config.php');
    
    $username=$_POST['nameL'];
    $password=$_POST['pwdL'];
    
    $hashed_password=hash('sha512',$password);
    
    $query="SELECT * FROM users WHERE userID='$username' AND userPassword='$hashed_password' LIMIT 1";
    
    $result=mysqli_query($conn,$query);
    
    if(mysqli_num_rows($result)>0){
        $userlogin = mysqli_fetch_assoc($result);
               
        if($userlogin["userType"]==3){
            header("location: ./worker.php");
        }
        else if($userlogin["userType"]==2){
            header("location: ./supplier.php");
        }
        else if($userlogin["userType"]==1){
            header("location: ./company.php");
        }
    }
    else{
       
        header("location: ../index.php");
    }

}

?>