<?php
    $queryWorker="SELECT * FROM worker ORDER BY workerRank DESC LIMIT 5";
    $resultWorker=mysqli_query($conn,$queryWorker);

    if(mysqli_num_rows($resultWorker)>0){
        while($rowWorker=mysqli_fetch_assoc($resultWorker)){

            $rank=$rowWorker['workerRank'];
            $starArray=[];

            if($rank>7){
                $starArray=['fa fa-star','fa fa-star','fa fa-star','fa fa-star'];
            }else if($rank>5){
                $starArray=['fa fa-star','fa fa-star','fa fa-star','fa fa-star-half-full'];
            }else if($rank>3){
                $starArray=['fa fa-star','fa fa-star','fa fa-star-half-full','fa fa-star-half-full'];
            }else{
                $starArray=['fa fa-star','fa fa-star-half-full','fa fa-star-half-full','fa fa-star-half-full'];
            }


            
            echo "<div class='btn btn-default' style='margin:2px 0 5px 0;padding:10px;width:100%;text-align:left'>
                    <div style='width:10%;display:inline'>
                        <img src='../Assests/worker/W1234.jpg' style='width:20%;padding:0;border:2px solid gold'>
                    </div>
                    <div style='font-size:110%;width:80%;display:inline;float:right;padding:4px;line-height:8%'>
                        <p><strong><i class='fa fa-user' aria-hidden='true'> Mr. ".$rowWorker['workerName']."</i></strong><hr></p>
                        <p>
                           <i class='fa fa-phone' aria-hidden='true'>+94".$rowWorker['workerPhone']."</i>
                           <i class='fa fa-envelope' aria-hidden='true'> ".$rowWorker['workerEmail']."</i>
                        </p>
                        <p>
                            <i class='fa fa-star' style='font-size:200%;color:gold'></i>
                            <i class='".$starArray[0]."' style='font-size:200%;color:gold'></i>
                            <i class='".$starArray[1]."' style='font-size:200%;color:gold'></i>
                            <i class='".$starArray[2]."' style='font-size:200%;color:gold'></i>
                            <i class='".$starArray[3]."' style='font-size:200%;color:gold'></i>
                        </p>
                        <p>
                            <button data-target='#send_job_request_modal' data-toggle='modal' class='btn btn-success'>Send Request</button>
                        </p>
                    </div>
                
                </div>";
        }
    }
                
?>
