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
        <link rel="stylesheet" href="../css/header.css">
        <link rel="stylesheet" href="../css/font.css">
    </head>
    <body>
        <?php
            require_once('./layout/header.php'); 
        ?> 
        <div class="container-fluid" style="width:40%;margin-top:100px;">
            <div style="width:100%">
                <!--login form-->
                <label class="btn btn-success" style="margin-bottom:2px;width:100%;text-align:left"><h3>How about a promotion</h3></label>
                <form action="#" autocomplete="on" method="POST">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Title" name="nameL" required>
                    </div>

                    <div class="form-group">
                        <textarea type="text" class="form-control" placeholder="Description about yourself" name="pwdL" required style="height:100px"></textarea>
                    </div>

                    <div class="form-group">
                        <input type="submit" class="form-control btn btn-info" style="width:100%" value="Promote" name="workerPromote" required>
                    </div>
                </form>
                <!--end login form-->
            </div>

        </div>
        <div class="container-fluid" style="width:40%">
            <div  style="width:100%">
                <label class="btn btn-danger" style="margin-bottom:5px;width:100%;text-align:left"><h3>Newly Posted Jobs</h3></label>
                
                <?php
                    require_once('../db_config/config.php');
                    require_once('./query_boxes/supplier_jobs.php'); 
                ?>
            </div>

        </div>
    </body>

</html>

