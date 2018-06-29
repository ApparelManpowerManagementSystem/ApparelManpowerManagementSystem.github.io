<?php
    session_start();
    //worker registration data inserting
    if(isset($_POST['submitWR'])){//check whether submit button clicked
        require_once("db_config/config.php");
        //collect form data
        $name=$_POST['name'];
        $mobile=$_POST['mobile'];
        $email=$_POST['email'];
        $password1=$_POST['pwd1'];
        $password2=$_POST['pwd2'];
        $usertype=$_POST['role'];
        //hash password using sha512 method
        $hashed_password=hash('sha512',$password1);
        if($usertype==3){
           //create worker id by adding his mobile number to the tale of "W"
        $id="W".(int)$mobile;
        //insert data in to worker_personal table
        $query="INSERT INTO worker_personal (`workerID`,`workerName`,`workerPhone`,`workerEmail`,`workerPassword`) VALUES ('$id','$name','$mobile','$email','$hashed_password')";
        //excute query
        $result=mysqli_query($conn,$query);
        //check whether query exucuted correctly 
        if($result){
            //alert message
            echo "<script>alert('You are now registerd. Please use login')</script>";
            header("location: index.php");
        }
        else{
            echo "<script>alert('Registration Failed.')</script>";
        } 
        }
        
        
        
        
    }
mysqli_close($conn);
?>