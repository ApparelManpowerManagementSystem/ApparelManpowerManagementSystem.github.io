<?php

require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML('
    <!DOCTYPE html>
<html>
<head>
<style>
* 
.body {
  width: 5000px;
  height: 1280px;
}
    {
    box-sizing: border-box;
}

label {
    padding: 12px 12px 12px ;
    display: inline-block;
    
    
}

.header {
    background-color: #FFFFFF;
    padding: 4px;
    text-align: left;
    color: #000000;
}   
.footer{
    background-color: #FFFFFF;
    height:80px;
    padding: 15px;
    text-align: right;
    
    
    }    

    
    

.center {
    margin: auto;
    width: 40%;
    border: 1px solid #000000;
    padding : 50px;
    padding-left: 30px;
    padding-right: 90px;
}
.center2 {
    margin: auto;
    width: 50%;
    padding : 1px;
}

.container {
    
    background-color: #FFFFFF;
    padding: 10px;
    color: black;
    padding-left: 20px
}
/*.container2{
        padding:15px;
    }*/
    
.col-25 {
    float: left;
    width: 25%;
    margin-top: 5px;
    color: black;
    text-align: left;
}
.col-250 {
    float: left;
    width: 5%;
    
    color: black;
    text-align: left;
}
.col-75 {
    float: left;
    width: 75%;
    margin-top: 5px;
    color: black;
}

    
/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
    
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
    .col-25, .col-75, input[type=submit] {
        width: 100%;
        margin-top: 0;
    }
}
</style>
</head>
<body class="body">

<div class="center">

<h1><center>A & B Company</center></h1>
<h5><center>Phone[+94762586455]</center></h5>    



<form  action="" method="post">
  <!--div class="container2"></div-->
    
    <div style="padding:12px">
    <div class="row">
      <div class="col-25">
	  <label><b><h2>Invoice</h2></b></label>
       
	  </div>
	  
        
  </div>
        <div class="container">
        <div>
            <div class="row">
             <div class="col-250">
                <label>Date</label> 
                 
            </div>
        </div>
        </div>
        <div>
            <div class="row">
             <div class="col-250">
                <label>Invoice# </label> 
                </div>   
           </div>
        </div>
        
         <div>
            <div class="row">
             <div class="col-250">
                <label>Name</label> 
                </div>   
                    </div>
            </div>

        <div>
            <div class="row">
             <div class="col-250">
                <label>CustomerId</label> 
                </div>   
            </div>
        </div>
  
    </div>
  <div class="footer">
    
</div> 
    </div> 
</form>
 

</div>



    
');
$mpdf->Output();
?>