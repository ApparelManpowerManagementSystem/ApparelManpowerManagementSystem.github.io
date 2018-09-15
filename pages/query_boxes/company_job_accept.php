<?php
    $queryJob="SELECT * FROM company_job WHERE jobStatus='offline' LIMIT 10";
    $resultJob=mysqli_query($conn,$queryJob);

    if(mysqli_num_rows($resultJob)>0){
        while($rowJob=mysqli_fetch_assoc($resultJob)){
            $date=date("y-m-d");
            echo "<div style='line-height:14px;border:1px solid lightgrey;border-radius:10px;width:100%;height:100%;border-left:6px solid green;background-color:rgb(239, 240, 242,0.5);margin:0 0 5px 0;padding:4px'>
                <strong>
                    <font style='font-size:15px'>
                        <p>Job Number ".$rowJob['jobID']." | ".$rowJob['jobTitle']."</p><hr>
                    </font>
                </strong>
                <p >Amount: ".$rowJob['jobAmount']." pieces</p>
                
                <p>Maximum Job Duration: ".$rowJob['jobPeriod']." days</p>
                <p>Price: <font style='color:red'>Rs. ".$rowJob['jobPrice']."/=</font></p>
                <p>Published on <font style='color:green;'>".$rowJob['jobDate']."</font>
                </p>

                <p>
                    <div style='text-align:right'>
                        <button  class='btn btn-success' data-target='#".$rowJob['jobID']."' data-toggle='modal'>Accept & Publish</button>
                        <button  class='btn btn-danger' data-target='#reject_warning_modal' data-toggle='modal'>Reject</button>
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
                                <form action='./query_boxes/supplier_publish_jobs.php' autocomplete='on' method='post'>
                                    <div style='display:none' class='form-group'>
                                        <lable>Job Title<lable>
                                        <input value='".$rowJob['jobID']."' type='text' class='form-control' name='jobID' required>
                                    </div>
                                    <div class='form-group'>
                                        <lable>Job Title<lable>
                                        <input value='".$rowJob['jobTitle']."' type='text' class='form-control' name='jobTitle' required>
                                    </div>
                                    <div class='form-group'>
                                        <lable>Job Type<lable>
                                        <input value='".$rowJob['jobType']."' type='text' class='form-control' name='jobType' required readonly>
                                    </div>
                                    <div class='form-group'>
                                        <lable>Job Quantity<lable>
                                        <input value='".$rowJob['jobAmount']."' type='text' class='form-control' name='jobAmount' required>
                                    </div>
                                    <div class='form-group'>
                                        <lable>Job Duration<lable>
                                        <input value='".$rowJob['jobPeriod']."' type='text' class='form-control' name='jobPeriod' required>
                                    </div>
                                    <div class='form-group'>
                                        <lable>Enter Worker Count<lable>
                                        <input type='text' class='form-control' name='workerCount' required>
                                    </div>
                                    <div class='form-group'>
                                        <lable>Enter Location ID<lable>
                                        <input type='text' class='form-control' name='locID' required>
                                    </div>
                                    <div style='display:none' class='form-group'>
                                        <lable>Company ID<lable>
                                        <input value='".$rowJob['comID']."' type='text' class='form-control' name='compID' required readonly>
                                    </div>
                                    <div style='display:none' class='form-group'>
                                        <input value='".$rowJob['supID']."' type='text' class='form-control' name='suppID' required readonly>
                                    </div>
                                    <div style='display:none' class='form-group'>
                                        <lable>Job Publishing Date<lable>
                                        <input value='$date' type='text' class='form-control' name='jobPublishedD' required>
                                    </div>


                                    <div class='form-group'>
                                        <input type='submit' class='form-control btn btn-success' style='width:100%'' value='Publish Job' name='publishJob' required>
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
