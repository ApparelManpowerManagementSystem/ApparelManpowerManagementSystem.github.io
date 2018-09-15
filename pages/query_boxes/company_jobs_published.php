<?php
    $queryJob="SELECT * FROM company_job WHERE jobStatus='offline' LIMIT 10";
    $resultJob=mysqli_query($conn,$queryJob);

    if(mysqli_num_rows($resultJob)>0){
        while($rowJob=mysqli_fetch_assoc($resultJob)){
            $date=date("y-m-d");
            echo "<div style='line-height:14px;border-radius:10px;width:100%;height:100%;border:1px solid lightgrey;border-left:6px solid green;background-color:rgb(239, 240, 242,0.5);margin:0 0 5px 0;padding:4px'>
                <strong>
                    <font style='font-size:15px'>
                        <p>Job Number ".$rowJob['jobID']." | ".$rowJob['jobTitle']."  <lable class='btn btn-danger'>".$rowJob['jobStatus']."</lable></p><hr>
                    </font>
                </strong>
                <p >Amount: ".$rowJob['jobAmount']." pieces</p>
                
                <p>Maximum Job Duration: ".$rowJob['jobPeriod']." days</p>
                <p>Price: <font style='color:red'>Rs. ".$rowJob['jobPrice']."/=</font></p>
                <p>Published on <font style='color:green;'>".$rowJob['jobDate']."</font>
                </p>

                <p>
                    <div style='text-align:right'>
                        <button data-target='#".$rowJob['jobID']."' data-toggle='modal' class='btn btn-success' >Change Job Details</button>
                        
                    </div>
                </p>

                </div>";
            echo "<div>
                    <div class='modal fade' id='".$rowJob['jobID']."' role='dialog'>
                        <div class='modal-dialog'>
                          <div class='modal-content'>
                            <div class='modal-header'>
                               <h3>Publish Job ID ".$rowJob['jobID']."</h3>
                            </div>
                            
                            <div class='modal-body'>
                                <form action='./query_boxes/company_published_jobs_update.php' autocomplete='on' method='post'>
                                    <div style='display:none' class='form-group'>
                                        <lable>Job ID<lable>
                                        <input value='".$rowJob['jobID']."' type='text' class='form-control' name='jobID' required>
                                    </div>
                                    <div class='form-group'>
                                        <lable>Job Title<lable>
                                        <input value='".$rowJob['jobTitle']."' type='text' class='form-control' name='jobTitle' required>
                                    </div>
                                    <div class='form-group'>
                                        <lable>Job Type<lable>
                                        <input value='".$rowJob['jobType']."' type='text' class='form-control' name='jobType' required>
                                    </div>
                                    <div class='form-group'>
                                        <lable>Job Quantity (Pieces)<lable>
                                        <input value='".$rowJob['jobAmount']."' type='text' class='form-control' name='jobAmount' required>
                                    </div>
                                    <div class='form-group'>
                                        <lable>Job Duration<lable>
                                        <input value='".$rowJob['jobPeriod']."' type='text' class='form-control' name='jobPeriod' required>
                                    </div>
                                    <div class='form-group'>
                                        <lable>Job Price (Rs)<lable>
                                        <input value='".$rowJob['jobPrice']."' type='text' class='form-control' name='jobPrice' required>
                                    </div>
                                     
                                    <div class='form-group'>
                                        <input type='submit' class='form-control btn btn-success' style='width:100%'' value='Change Job Details' name='publishedJobUpdate' required>
                                    </div>
                                </form>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>";
        }
    }
                
?>
