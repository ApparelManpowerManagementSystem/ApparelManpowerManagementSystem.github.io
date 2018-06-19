<?php
    session_start();
    //worker registration data inserting
    if(isset($_POST['submitWR'])){//check whether submit button clicked
        require_once("db_config/config.php");
        //collect form data
        $name=$_POST['nameWR'];
        $mobile=$_POST['mobileWR'];
        $email=$_POST['emailWR'];
        $password1=$_POST['pwd1WR'];
        $password2=$_POST['pwd2WR'];
        //check whether new password and it's confrim password is equal
        if($password1==$password2){
            //then hash password using sha512 method
            $hashed_password=hash('sha512',$password1);
            //create worker id by adding his mobile number to the tale of "W"
            $id="W".(int)$mobile;
            //insert data in to worker_personal table
            $query="INSERT INTO worker_personal (`workerID`,`workerName`,`workerPhone`,`workerEmail`,`workerPassword`) VALUES ('$id','$name','$mobile','$email','$hashed_password')";
            //excute query
            $result=mysqli_query($conn,$query);
            //check whether query exucuted correctly 
            if($result){
                //alert message
                echo "<script>alert('You are now registerd as worker. Please use login')</script>";
                header("location: index.php");
            }
            else{
                echo "<script>alert('Registration Failed.')</script>";
            }
        }
        else{
            header("location: index.php");
        }
        
    }
    //supplier registration data inserting
    if(isset($_POST['submitSR'])){//check whether submit button clicked
        require_once("db_config/config.php");
        //collect form data
        $name=$_POST['nameSR'];
        $mobile=$_POST['mobileSR'];
        $email=$_POST['emailSR'];
        $password1=$_POST['pwd1SR'];
        $password2=$_POST['pwd2SR'];
        //check whether new password and it's confrim password is equal
        if($password1==$password2){
            //then hash password using sha512 method
            $hashed_password=hash('sha512',$password1);
            //create worker id by adding his mobile number to the tale of "W"
            $id="S".(int)$mobile;
            //insert data in to worker_personal table
            $query="INSERT INTO supplier_personal (`supID`,`supName`,`supPhone`,`supEmail`,`supPassword`) VALUES ('$id','$name','$mobile','$email','$hashed_password')";
            //excute query
            $result=mysqli_query($conn,$query);
            //check whether query exucuted correctly 
            if($result){
                //alert message
                echo "<script>alert('You are now registerd as a supplier. Please use login')</script>";
                header("location: index.php");
            }
            else{
                echo "<script>alert('Registration Failed.')</script>";
            }
        }
        else{
            header("location: index.php");
        }
        
    }
    //company registration data inserting
    if(isset($_POST['submitCR'])){//check whether submit button clicked
        require_once("db_config/config.php");//create databse connection
        //collect form data
        $name=$_POST['nameCR'];
        $mobile=$_POST['mobileCR'];
        $email=$_POST['emailCR'];
        $password1=$_POST['pwd1CR'];
        $password2=$_POST['pwd2CR'];
        //check whether new password and it's confrim password is equal
        if($password1==$password2){
            //then hash password using sha512 method
            $hashed_password=hash('sha512',$password1);
            //create worker id by adding his mobile number to the tale of "W"
            $id="C".int($mobile);
            //insert data in to worker_personal table
            $query="INSERT INTO company_personal (`comID`,`comName`,`comPhone`,`comEmail`,`comPassword`) VALUES ('$id','$name','$mobile','$email','$hashed_password')";
            //excute query
            $result=mysqli_query($conn,$query);
            //check whether query exucuted correctly 
            if($result){
                //alert message
                echo "<script>alert('You are now registerd as a company. Please use login')</script>";
                header("location: index.php");
            }
            else{
                echo "<script>alert('Registration Failed.')</script>";
            }
        }
        else{
            header("location: index.php");
        }
        
    }
mysqli_close($conn);
?>