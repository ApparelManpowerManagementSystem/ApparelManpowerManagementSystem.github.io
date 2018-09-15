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
    </head>
    <body>
        <?php
            require_once('./layout/header.php'); 
            
        ?>

        <!--side navigation panel-->
        <div id="mySidenav" class="sidenav" onclick="closeNav()"><br>
            <a href="#" ></a>
            <a data-target="#user_profile_modal" data-toggle="modal" href="#">Profile</a>
            <a data-target="#publish_company_job_modal" data-toggle="modal" href="#">Publish a Job</a>
            <a href="#">Contacts</a>
        </div>
        <!--end side navigation panel-->
        
        <div class="container-fluid" style="width:40%;margin-top:70px;">
            

        </div>
        
        <div class="col-md-2" style="width:20%">
            <div class="btn btn-primary" style="height:600px;width:100%;padding: 5px;background-color: rgb(61, 63, 66)">
                <label class="btn btn-primary" style="width: 100%;text-align: left">Navigation Menu</label>
                <div>
                    <img style="width: 100%" src="../Assests/locations/ocean_lanka.jpg">
                </div>
                <div>
                    <label data-target="#user_profile_modal" data-toggle="modal" class="btn btn-primary" style="width: 100%;text-align: left;margin: 5px 0 2px 0">Profile</label>
                </div>
                <div>
                    <label data-target="#publish_company_job_modal" data-toggle="modal" class="btn btn-primary" style="width: 100%;text-align: left;margin: 0 0 2px 0">Publish a Job</label>
                </div>
                <div>
                    <label class="btn btn-primary" style="width: 100%;text-align: left;margin: 0 0 2px 0">Navigation Menu</label>
                </div>
                <div>
                    <label class="btn btn-primary" style="width: 100%;text-align: left;margin: 0 0 2px 0">Navigation Menu</label>
                </div>
                    
                    
                    
                    
                </div>
            </div>
        </div>
        
        <div class="col-md-6" style="width:50%">
            
            <div id='hell' style="width:100%;display:block">
                <label class="btn btn-primary" style="background-color:rgb(61, 63, 66);margin-bottom:5px;width:100%;text-align:left"><h3>Published Jobs</h3></label>
                <?php
                    require_once '../db_config/config.php';
                    require_once './query_boxes/company_jobs_published.php';
                ?>
            </div>
            

        </div>
        <div class="col-md-4" style="width:30%">
            <div  style="width:100%">
                <label class="btn btn-primary" style="background-color:rgb(61, 63, 66);margin-bottom:5px;width:100%;text-align:left"><h3>Ongoing Jobs</h3></label>
                
                <?php
                    require_once '../db_config/config.php';
                    require_once './query_boxes/company_ongoing_jobs.php';
                ?>
            </div>
            <div  style="width:100%">
                <label class="btn btn-primary" style="background-color:rgb(61, 63, 66);margin-bottom:5px;width:100%;text-align:left"><h3>Canceled Jobs</h3></label>
                
                <?php
                    
                    require_once '../db_config/config.php';
                    require_once './query_boxes/company_jobs_canceled.php';
                ?>
            </div>

        </div>

        <!--Publish company Job modal-->
        <div>
           <div class="modal fade" id="publish_company_job_modal" role="dialog">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><font style="font-family:arial">&times;</font></button>
                        <h3 class="modal-title">Publish Company Job</h3>
                    </div>
                    <div class="modal-body">
                        <form action="./query_boxes/company_publish_jobs.php" autocomplete="on" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control" id="jobTitle" placeholder="Enter Job Title" name="jobTitle">
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" id="jobType" placeholder="Enter Job type" name="jobType">
                            </div>

                             <div class="form-group">
                                <input type="text" class="form-control" id="jobAmount" placeholder="Enter Job Amount" name="jobAmount">
                            </div>
                             <div class="form-group">
                                <input type="text" class="form-control" id="jobPeriod" placeholder="Enter Job Period" name="jobPeriod">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="jobPrice" placeholder="Enter Job Price" name="jobPrice">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="jobDate" value="<?php echo date('Y-m-d'); ?>" name="jobDate">
                            </div>                        
                           
                            <div class="form-row text-right">
                                <div class="col-12">
                                 <button type="button" class="btn btn-danger" data-dismiss="modal">close</button>
                                <button type="submit" name="addComJob" id="save" class="btn btn-success">create</button>
                               </div>
                            </div>
                      </form>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end about us modal-->
        
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

        
        
        
    
    </body>
</html>
