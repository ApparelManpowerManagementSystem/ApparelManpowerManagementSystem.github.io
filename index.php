<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Manpower Solutions</title>
        <link rel="shortcut icon" href="Assests/logo.png" />
        <link rel="stylesheet"  href="./css/home.css">
        <link rel="stylesheet"  href="./css/font.css">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <!--navigation bar-->
        <nav class="navbar navbar-inverse navbar-fixed-top" style="border-radius:0;padding:15px;margin:0">
              <div class="container-fluid">
               
                <ul class="nav navbar-nav">
                  <li><a data-target="#aboutus_modal" data-toggle="modal" href="#"><label style="font-size: 150%;padding:5px;border-radius: 5px;border: 1px solid lightgrey">Manpower Solutions</label></a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    
                  <li style="padding:5px;margin-right: 5px;border-radius: 5px;border: 1px solid lightgrey"><a data-target="#signup_modal" data-toggle="modal" href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                  <li style="padding:5px;border-radius: 5px;border: 1px solid lightgrey"><a data-target="#signin_modal" data-toggle="modal" href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                </ul>
              </div>
            </nav>
        <!--end navigation bar--> 
        
        <!--banner image-->
        <div id="banner_image" class="container-fluid">

            <p><font>We have over <strong>10,000</strong> job offers</font></p>
        </div>
        <!--end banner image-->
        
        <div class="row" style="width:100%">
            <div class="col-md-2">
            </div>
            
            <div class="col-md-6">
                <!--supplier job list-->
                <div id="supplier_jobs" class="container-fluid">
                    <label style="background-color:rgb(61, 63, 66);" id="supplier_job_lbl" class="btn btn-success"><h2>Newly posted jobs</h2></label>
                    <?php
                        require_once('./db_config/config.php');
                        require_once('./pages/query_boxes/supplier_jobs_for_visitors.php');
                    ?>
                </div>
                <!--end supplier job list-->
            </div>
            
            <div class="col-md-4">
                <!--lable top rated members-->
                <div class="row">
                <label class="btn btn-info"  style="background-color:rgb(61, 63, 66);margin:10px 0 5px 0;width:100%;border:none"><h2>Top rated Manpower members</h2></label>  
                </div>
                <!--end lable top rated members-->
                
                <!--worker rating list-->
                <div class="row">
                        <?php
                            require_once('./db_config/config.php');
                            require_once('./pages/query_boxes/worker_rating.php');
                        ?>
                </div>
                <!--end worker rating list-->
                
            </div>
        </div>


    
        <!--About us modal-->
        <div>
           <div class="modal fade" id="aboutus_modal" role="dialog">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><font style="font-family:arial">&times;</font></button>
                        <h4 class="modal-title">About Us</h4><br>
                    </div>
                    <div class="modal-body">
                        <p style="text-align:center;width:100%;padding:20px;border-radius:5px;border:1px solid red">Kuwein Manpower is dedicated to enriching people's lives with meaningful employment and development opportunities, as we have done for more than 20 years.</p>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end about us modal-->

        
        <!--sign in modal-->
        <div>
           <div class="modal fade" id="signin_modal" role="dialog">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><font style="font-family:arial">&times;</font></button>
                        <h4 class="modal-title">SignIn</h4>
                    </div>
                    <div class="modal-body">
                        <!--login form-->
                        <form action="./pages/login.php" autocomplete="on" method="POST">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Enter your mobile number" name="nameL" required>
                            </div>

                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Enter your password" name="pwdL" required>
                            </div>

                            <div class="form-group">
                                <input type="submit" class="form-control btn btn-primary" style="width:100%" value="Sign In" name="submitLogin" required>
                            </div>
                        </form>
                        <!--end login form-->
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end sign in modal-->
        
        <!--sign up modal-->
        <div>
            <div class="modal fade" id="signup_modal" role="dialog">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><font style="font-family:arial">&times;</font></button>
                        <h4 class="modal-title">signup</h4>
                    </div>
                    <div class="modal-body">
                        <!--register form-->
                        <form action="./pages/register.php" autocomplete="on" method="post" enctype='multipart/form-data'>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Enter your name" name="name" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Enter mobile phone number" name="mobile" required>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Enter email" name="email" required>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Type a password" name="pwd1" required>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Confirm password" name="pwd2" required>
                            </div>
                            <div class="form-group">
                                <select name="role" id="role" class="form-control">
                                    <option value="3">As a Worker</option>
                                    <option value="1">As a Company</option>
                                </select>
                            </div>
                             <div class="form-group">
                                <label style="width: 34%;display: inline-block;" type="password" class="form-control" >Upload your image</label> 
                                <input style="width:65%;display: inline-block;" type='file' name='file' required>
                                
                            </div>
                            
                            <div class="form-group" >
                                <input type="submit" class="form-control btn btn-success" value="SignUp" name="submitRegister" required>
                            </div>
                        </form>
                        <!--end register form-->
                    </div>
                  </div>
                </div>
              </div>
        </div>
        <!--end sign up modal-->
                
        <!--footer--> 
        <footer class="text-center">
          <a class="up-arrow" href="./index.php" data-toggle="tooltip" title="TO TOP">
            <span class="glyphicon glyphicon-chevron-up"></span>
          </a><br><br>
          <p>Copyright By <a href="#" data-toggle="tooltip">UCSC</a>. All Rights Reserved</p> 
        </footer>
        <!--end footer-->

    </body>
</html>