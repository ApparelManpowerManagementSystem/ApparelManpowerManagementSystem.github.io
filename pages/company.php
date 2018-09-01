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

    <div class="container-fluid" style="width:50%">
        <label class="btn btn-danger" style="width:100%;margin-top:60px;text-align:left"><h3>Publish a job</h3></label>
        <div class="modal-body">
            <form action="./query_boxes/company_jobs.php" autocomplete="on" method="post">
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
                    <input type="text" class="form-control" id="jobDate" placeholder="Enter Job Date" name="jobDate">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="jobStatus" placeholder="Enter Job Status" name="jobStatus">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="comID" placeholder="Enter Company ID:" name="comID">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="supID" placeholder="Enter Supplier ID:" name="supID">
                </div>
                <div class="form-group">
                    <input type="number" class="form-control" id="locID" placeholder="Enter Location ID:" name="locID">
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
    </body>
</html>
