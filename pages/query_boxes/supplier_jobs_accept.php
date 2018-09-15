<?php
    $queryJob="SELECT * FROM supplier_job WHERE jobStatus='offline' LIMIT  4";
    $resultJob=mysqli_query($conn,$queryJob);

    if(mysqli_num_rows($resultJob)>0){
        while($rowJob=mysqli_fetch_assoc($resultJob)){

            $locationID=$rowJob['locationID'];
            $queryLocation="SELECT * FROM location WHERE locID='$locationID'";
            $resultLocation=mysqli_query($conn,$queryLocation);

            $rowLocation=mysqli_fetch_assoc($resultLocation);
            $locationName=$rowLocation['locName'];
            $locationAddress=$rowLocation['locStreet'].", ".$rowLocation['locVillage'].", ".$rowLocation['locCity'];
            
                        
            echo "<div id='jobs' style='border:1px solid lightgrey;border-radius:10px;width:100%;height:100%;border-left:6px solid red;background-color:rgb(239, 240, 242,0.5);margin:0 0 5px 0;padding:4px'>
                <strong>
                    <font style='font-size:15px'>
                        <p>".$rowJob['jobTitle']."</p>
                    </font>
                </strong>
                <p >".$rowJob['jobCount']." pieces needs to do ".$rowJob['jobType'].". Every manpower member has to work at 
                    <strong><a href='#'>".$locationName.", ".$locationAddress.".</a></strong> Job should be complete within ".$rowJob['jobPeriod']." days
                    
                </p>
                <p>Published on <font style='color:green;'>".$rowJob['jobPublished']."</font>
                </p>
                <div style='text-align:right'>
                    <p>(<font style='color:red;'>".$rowJob['jobPeriod']."</font>/".($rowJob['workerCount']+5).") joined
                        <a href='./query_boxes/worker_accept_jobs.php?jobID=".$rowJob['jobID']."'><button id='join_btn' class='btn btn-success' onclick="."show_div('job')".">Accept & Join</button></a>
                    </p>
                </div>
                </div>";
            
            
          
        }
    }
                
?>
