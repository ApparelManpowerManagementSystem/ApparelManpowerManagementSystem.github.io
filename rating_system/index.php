<?php
//index.php
?>
<!DOCTYPE html>
<html>
 <head>
  <title>PHP Star Rating System by using Ajax JQuery</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>
 <body>
  <div class="container" style="width:800px;">
   <h2 align="center">Rating system</h2>
   <br />
   <span id="worker_list"></span>
   <br />
   <br />
  </div>
 </body>
</html>

<script>
$(document).ready(function(){
 
 load_worker_data();
 
 function load_worker_data()
 {
  $.ajax({
   url:"fetch.php",
   method:"POST",
   success:function(data)
   {
    $('#worker_list').html(data);
   }
  });
 }
 
 $(document).on('mouseenter', '.rating', function(){
  var index = $(this).data("index");
  var worker_id = $(this).data('worker_id');
  remove_background(worker_id);
  for(var count = 1; count<=index; count++)
  {
   $('#'+worker_id+'-'+count).css('color', '#ffcc00');
  }
 });
 
 function remove_background(worker_id)
 {
  for(var count = 1; count <= 5; count++)
  {
   $('#'+worker_id+'-'+count).css('color', '#ccc');
  }
 }
 
 $(document).on('mouseleave', '.rating', function(){
  var index = $(this).data("index");
  var worker_id = $(this).data('worker_id');
  var rating = $(this).data("rating");
  remove_background(worker_id);
  //alert(rating);
  for(var count = 1; count<=rating; count++)
  {
   $('#'+worker_id+'-'+count).css('color', '#ffcc00');
  }
 });
 
 $(document).on('click', '.rating', function(){
  var index = $(this).data("index");
  var worker_id = $(this).data('worker_id');
  $.ajax({
   url:"insert_rating.php",
   method:"POST",
   data:{index:index, worker_id:worker_id},
   success:function(data)
   {
    if(data == 'done')
    {
     load_worker_data();
     alert("You have rate "+index +" out of 5");
    }
    else
    {
     alert("There is some problem in System");
    }
   }
  });
  
 });

});
</script>
