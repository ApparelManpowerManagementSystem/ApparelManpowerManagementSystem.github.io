<?php

//fetch.php

$connect = new PDO('mysql:host=localhost;dbname=newmanpower', 'root', '');

if(isset($_POST["index"], $_POST["worker_id"]))
{
 $query = "
 INSERT INTO ratings(worker_id, rating) 
 VALUES (:worker_id, :rating)
 ";
 $statement = $connect->prepare($query);
 $statement->execute(
  array(
   ':worker_id'  => $_POST["worker_id"],
   ':rating'   => $_POST["index"]
  )
 );
 $result = $statement->fetchAll();
 if(isset($result))
 {
  echo 'done';
 }
}


?>
