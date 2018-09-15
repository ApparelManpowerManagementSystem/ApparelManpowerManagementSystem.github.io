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
        <script src="https://maps.googleapis.com/maps/api/js?callback=myMap"></script>
        <link rel="stylesheet" href="../css/header.css">
        <link rel="stylesheet" href="../css/font.css">
        <link rel="stylesheet" href="../css/worker.css">

        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCnznnrqQkIUgqNQ11CzeWUjDuUuLIIKlc&callback=myMap"></script>
    </head>
    <body>
        <?php
            require_once('./layout/header.php'); 
        ?> 
        
        <!--side navigation panel-->
        <div id="mySidenav" class="sidenav" onclick="closeNav()"><br>
            <a href="#" ></a>
            <a href="#user_profile_modal">Profile</a>
            <a data-target="#leave_modal" data-toggle="modal" href="#">Leave</a>
            <a href="#">Contacts</a>
        </div>
        <!--end side navigation panel-->


        <div  class="container-fluid" style="width:40%;margin-top:70px;">
            

        </div>
        
        <div class="col-md-2" style="width:20%">
            <div class="btn btn-primary" style="height:700px;width:100%;padding: 5px;background-color: rgb(61, 63, 66)">
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
            
            <div id="job" style="display:none;height: 100%;margin-bottom:10px">

                <?php
                    
                    require_once('../db_config/config.php');
                    require_once('./query_boxes/worker_status.php');

                ?>

                <label class="btn btn-primary" style="text-align:left;background-color:rgb(61, 63, 66);width: 100%;margin-bottom: 5px"><h3> Ongoing Job</h3></label>
                <div class="btn btn-default" style="line-height: 35px; width: 100%;height: 100%;text-align:left">
                    <label class="btn btn-default" style="width: 20%;text-align: left">Job ID</label> &nbsp<label><?php echo $_SESSION['jobID'] ?></label><br>
                    <label class="btn btn-default" style="width: 20%;text-align: left">Job Status </label> &nbsp<label class="btn btn-danger"><?php echo $_SESSION['jobStatus'] ?></label><br>
                    <label class="btn btn-default" style="width: 20%;text-align: left">Member Name &nbsp</label> &nbsp<label><?php echo $_SESSION['userName'] ?></label><br>
                    <label class="btn btn-default" style="width: 20%;text-align: left">Job Location </label>&nbsp<label> <?php echo $_SESSION['locName'] ?></label><br>
                    <label class="btn btn-default" style="width: 20%;text-align: left">Job Amount </label>&nbsp<label><?php echo $_SESSION['jobAmount'] ?> Pieces</label><br>
                    <label class="btn btn-default" style="width: 20%;text-align: left">Payment: </label>&nbsp<label>Negotiable</label><br>
                    <label class="btn btn-default" style="width: 20%;text-align: left">Job Duration: </label>&nbsp<label> <?php echo $_SESSION['jobDays'] ?> Days</label><br>
                    <div style="text-align: right">
                        <button class="btn btn-danger" data-target='#leave_warning_modal' data-toggle='modal'>Leave Job</button>
                    </div>

                </div>
                
            </div>
            
            
            <div id='hell' style="width:100%;display:block">
                <label class="btn btn-primary" style="background-color:rgb(61, 63, 66);margin-bottom:5px;width:100%;text-align:left"><h3>Newly Posted Jobs</h3></label>
                <?php
                    require_once('../db_config/config.php');
                    require_once('./query_boxes/supplier_jobs_accept.php'); 
                ?>
            </div>
            

        </div>
        <div class="col-md-4" style="width:30%">
            <div  style="width:100%">
                <label class="btn btn-primary" style="background-color:rgb(61, 63, 66);margin-bottom:5px;width:100%;text-align:left"><h3>Working Locations</h3></label>
                <?php
                    require_once('../db_config/config.php');
                    require_once('./query_boxes/locations_view.php'); 
                ?>
            </div>

            <div  style="width:100%">
                <label class="btn btn-primary" style="background-color:rgb(61, 63, 66);margin-bottom:5px;width:100%;text-align:left"><h3>Paid Jobs</h3></label>
                     <?php
                    require_once('../db_config/config.php');
                    require_once('./query_boxes/worker_paid_jobs.php'); 
                ?>
            </div>

        </div>

        <!--worker leave modal-->
        <div>
            
           <div class="modal fade" id="leave_modal" role="dialog">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                        <h2>Request a leave</h2>
                    </div>
                    <div class="modal-body">
                       <!--worker leave form-->
                        <form action="#" autocomplete="on" method="POST">
                            <div class="form-group">
                                <input value="<?php echo $_SESSION['userID']?>" type="text" class="form-control" name="workerID" required disabled>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="reason" required>
                            </div>
                            <div style="display: none" class="form-group">
                                <input  type="text" class="form-control" name="date" value="<?php echo date("y-m-d")?>" required>
                            </div>

                            <div class="form-group">
                                <input type="submit" class="form-control btn btn-primary" style="width:100%" value="Request" name="submitUpdate" required>
                            </div>

                        </form>
                        <!--end worker leave form-->
                        
                        
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <!--worker leave modal-->
        
        
         <!--User profile modal-->
        <div>
            
           <div class="modal fade" id="user_profile_modal" role="dialog">
                <div class="modal-dialog">
                  <div class="modal-content">
                    
                    <div class="modal-body">
                       
                        <!--Update user details form-->
                        <form action="#" autocomplete="on" method="POST">
                            <div class="form-group">
                                <input value="<?php echo $_SESSION['userID']?>" type="text" class="form-control" name="idUpdate" required disabled>
                            </div>
                            <div class="form-group">
                                <input value="<?php echo $_SESSION['userName']?>" type="text" class="form-control" name="nameUpdate" required>
                            </div>

                            <div class="form-group">
                                <input value="<?php echo $_SESSION['userMobile']?>" type="text" class="form-control" name="mobileUpdate" required>
                            </div>
                            <div class="form-group">
                                <input value="<?php echo $_SESSION['userNIC']?>" type="text" class="form-control" name="nicUpdate" required>
                            </div>
                            <div class="form-group">
                                <input value="<?php echo $_SESSION['userEmail']?>" type="text" class="form-control" name="emailUpdate" required>
                            </div>
                            
                            <div class="form-group">
                                <input type="submit" class="form-control btn btn-info" style="width:100%" value="Update" name="submitUpdate" required>
                            </div>
                        </form>
                        <!--Update user details form-->
                        
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end user profile modal-->
        

        <!--location details modal-->
        <div>
            
           <div class="modal fade" id="location_details_modal" role="dialog">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                        

                    </div>
                    
                    <div class="modal-body">
                        <div id="map" style="width:100%;height:400px;background:yellow">
                            
                        </div>

                        <script>
                            function myMap() {
                            var mapOptions = {
                                center: new google.maps.LatLng(51.5, -0.12),
                                zoom: 10,
                                mapTypeId: google.maps.MapTypeId.HYBRID
                            }
                            var map = new google.maps.Map(document.getElementById("map"), mapOptions);
                            }
                            </script>

                            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCnznnrqQkIUgqNQ11CzeWUjDuUuLIIKlc&callback=myMap"></script>          
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <!--location details modal-->


        <!--worker leave warning modal-->
        <div>
            
           <div class="modal fade" id="leave_warning_modal" role="dialog">
                <div class="modal-dialog">
                  <div class="modal-content" style="text-align: center">
                    <div class="modal-header">
                        <label class="btn btn-danger" style="width: 100%"><h2>Warning!!!</h2></label>

                    </div>
                    
                    <div class="modal-body" >
                        <p style="font-size: 110%">If you leave the job you cannot join for a another job for next 2 days. And if you leave 2 jobs consecativly you will be black listed.</p>

                        <div style="text-align: right">
                        
                        <a href="./query_boxes/worker_leave_job.php"><button class="btn btn-danger" onclick="hide_div('job')">Leave</button></a>
                        <button data-dismiss='modal' class="btn btn-primary">Cancel</button>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end worker leave warning modal-->
        
        
        
    </body>

</html>

