<?php
    $servername="localhost";
    $username="root";
    $password="";
    $databasename="manpower";

//create connection
$conn=new mysqli($servername,$username,$password,$databasename);

//check connection
if(mysqli_connect_error()){
    die("connection failed: ".mysqli_connect_error());
}
echo "connected successfully!!!";   

?>