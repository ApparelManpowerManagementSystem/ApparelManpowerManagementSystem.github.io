<?php
    session_start();
    $_SESSION['jobID']=0;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Kuweni Manpower Solutions</title>
        <link rel="shortcut icon" href="Assests/logo.png" />
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="../js/header.js"></script>
        <script type="text/javascript" src="../js/worker.js"></script>
        <link rel="stylesheet" href="../css/header.css">
        <link rel="stylesheet" href="../css/font.css">
        <link rel="stylesheet" href="../css/worker.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <?php
            require_once('./layout/header.php'); 
        ?> 
        <!--side navigation panel-->
        <div id="mySidenav" class="sidenav" onclick="closeNav()"><br>
            <a href="#" ></a>
            <a data-target="#user_profile_modal" data-toggle="modal" href="#">Profile</a>
            <a href="#">Ongoing Jobs</a>
            <a href="#">Workers</a>
            <a href="#">Companies</a>
            <a href="#">Locations</a>
            <a href="#">Rejected Company Jobs</a>

        </div>
        <!--end side navigation panel-->
        
        <div class="container-fluid" style="width:40%;margin-top:70px;">
            

        </div>
        
        <div class="col-md-2" style="width:20%">
            <div class="btn btn-primary" style="height:600px;width:100%;padding: 5px;background-color: rgb(61, 63, 66)">
                <label class="btn btn-primary" style="width: 100%;text-align: left">Navigation Menu</label>
                <div>
                    <img style="width: 100%;height:240px" src="../Assests/worker/avatar.png">
                </div>
                <div>
                    <label data-target="#user_profile_modal" data-toggle="modal" class="btn btn-primary" style="width: 100%;text-align: left;margin: 5px 0 2px 0">Profile</label>
                </div>
                <div>
                    <label data-target="#publish_company_job_modal" data-toggle="modal" class="btn btn-primary" style="width: 100%;text-align: left;margin: 0 0 2px 0">Locations</label>
                </div>
                <div>
                    <label class="btn btn-primary" style="width: 100%;text-align: left;margin: 0 0 2px 0">Companies</label>
                </div>
                <div>
                    <label class="btn btn-primary" style="width: 100%;text-align: left;margin: 0 0 2px 0">Workers</label>
                </div>
                 <div>
                    <label class="btn btn-primary" style="width: 100%;text-align: left;margin: 0 0 2px 0">Rejected Company Jobs</label>
                </div>
            </div>
        </div>
        
        <div class="col-md-6" style="width:50%">
            
            <div id='hell' style="width:100%;display:block">
                <label class="btn btn-primary" style="background-color:rgb(61, 63, 66);margin-bottom:5px;width:100%;text-align:left"><h3>Newly Posted Jobs</h3></label>
                <?php
                    require_once('../db_config/config.php');
                    require_once('./query_boxes/company_job_accept.php');
                ?>
            </div>

            <div>
                <label class="btn btn-primary" style="background-color:rgb(61, 63, 66);margin-bottom:5px;width:100%;text-align:left"><h3>Ongoing Jobs</h3></label>
                <?php
                    require_once('../db_config/config.php');
                    require_once('./query_boxes/supplier_ongoing_jobs_view.php');
                ?>
            </div>
            

        </div>
        <div class="col-md-4" style="width:30%">
            <label class="btn btn-primary" style="background-color:rgb(61, 63, 66);margin-bottom:5px;width:100%;text-align:left"><h3>Top Workers</h3></label>
                <?php
                    require_once('../db_config/config.php');
                    require_once('./query_boxes/supplier_worker_ratings.php');
                ?>

        </div>

        <!--send job request modal-->
        <div>
            
           <div class="modal fade" id="send_job_request_modal" role="dialog">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                        <h3>Send Job Request</h3>

                    </div>
                    
                    <div class="modal-body">
                        <!--send job request form-->
                        <form action="#" autocomplete="on" method="POST">
                            <div class="form-group">
                                <input type="text" class="form-control" name="jobID" placeholder='Enter Job ID' required>
                            </div>
                            <div class="form-group">
                                <textarea type="text" class="form-control" name="message" placeholder='message' required></textarea>
                            </div>
                        
                            <div class="form-group">
                                <input type="submit" class="form-control btn btn-primary" style="width:100%" value="Send" name="sendJobRequest" required>
                            </div>
                        </form>
                        <!--Update user details form-->
                        
                    </div>
                </div>
            </div>
        </div>
        <!--end send job request modal-->
        
        
        
    </body>
</html>