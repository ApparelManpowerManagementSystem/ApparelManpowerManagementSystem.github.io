<?php
    
if(isset($_POST['submitRegister'])){
    require_once("../db_config/config.php");

    $name=$_POST['name'];
    $mobile=$_POST['mobile'];
    $email=$_POST['email'];
    $password1=$_POST['pwd1'];
    $password2=$_POST['pwd2'];
    $usertype=$_POST['role'];

    $hashed_password=hash('sha512',$password1);
    if($usertype==3){
        $id="W".(int)$mobile;

        $userquery="INSERT INTO users VALUES('$id','$hashed_password','$usertype')";
        if(mysqli_query($conn,$userquery)){
            $query="INSERT INTO worker_personal (`workerID`,`workerName`,`workerPhone`,`workerEmail`) VALUES ('$id','$name','$mobile','$email')";

            $result=mysqli_query($conn,$query);
            if(mysqli_num_rows($result)>0){
                
                header("location:./worker.php");
                echo '<script>alert("You are now registerd. Please use login")</script>';
            }
            else{
                header("location:../index.php");
            } 
        }           
    }
    else if($usertype==2){
        $id="S".(int)$mobile;

        $userquery="INSERT INTO users VALUES('$id','$hashed_password','$usertype')";
        if(mysqli_query($conn,$userquery)){
            $query="INSERT INTO supplier_personal (`supID`,`supName`,`supPhone`,`supEmail`) VALUES ('$id','$name','$mobile','$email')";

            $result=mysqli_query($conn,$query);
            if($result){
                header("location: ../index.php");
            }
            else{
                header("location: ../index.php");
            } 
        }
    }
    else if($usertype==1){
        $id="C".(int)$mobile;

        $userquery="INSERT INTO users VALUES('$id','$hashed_password','$usertype')";
        if(mysqli_query($conn,$userquery)){
            $query="INSERT INTO company_personal (`comID`,`comName`,`comPhone`,`comEmail`) VALUES ('$id','$name','$mobile','$email')";

            $result=mysqli_query($conn,$query);
            if($result){
                header("location: ../index.php");
            }
            else{
                header("location: ../index.php");
            } 
        }
    }
}
?>