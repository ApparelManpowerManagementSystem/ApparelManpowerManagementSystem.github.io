<?php

//fetch.php

$connect = new PDO('mysql:host=localhost;dbname=newmanpower', 'root', '');

$query = "
SELECT * FROM rating_worker ORDER BY id DESC
";
$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
$output = '';
foreach($result as $row)
{
 $rating = count_rating($row['id'], $connect);
 $color = '';
 $output .= '
 <h3 class="text-primary">'.$row['worker_name'].'</h3>
 <ul class="list-inline" data-rating="'.$rating.'" title="Average Rating - '.$rating.'">
 ';
 
 for($count=1; $count<=5; $count++)
 {
  if($count <= $rating)
  {
   $color = 'color:#ffcc00;';
  }
  else
  {
   $color = 'color:#ccc;';
  }
  $output .= '<li title="'.$count.'" id="'.$row['id'].'-'.$count.'" data-index="'.$count.'"  data-worker_id="'.$row['id'].'" data-rating="'.$rating.'" class="rating" style="cursor:pointer; '.$color.' font-size:16px;">&#9733;</li>';
 }
 $output .= '
 </ul>
 <p>'.$row["address"].'</p>
 <label style="text-danger">'.$row["comment"].'</label>
 <hr />
 ';
}
echo $output;

function count_rating($worker_id, $connect)
{
 $output = 0;
 $query = "SELECT AVG(rating) as rating FROM ratings WHERE worker_id = '".$worker_id."'";
 $statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 $total_row = $statement->rowCount();
 if($total_row > 0)
 {
  foreach($result as $row)
  {
   $output = round($row["rating"]);
  }
 }
 return $output;
}


?>
