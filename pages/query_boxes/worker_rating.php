<?php
    $queryWorker="SELECT * FROM worker ORDER BY workerRank DESC LIMIT 5";
    $resultWorker=mysqli_query($conn,$queryWorker);

    if(mysqli_num_rows($resultWorker)>0){
        while($rowWorker=mysqli_fetch_assoc($resultWorker)){

            $rank=$rowWorker['workerRank'];
            $class='btn btn-default';
            
            if($rank>=7){
                $class='btn btn-info';
            } 
            elseif($rank>=5){
                $class='btn btn-success';
            }
            elseif($rank>=3){
                $class='btn btn-danger';
            }
            
            echo "<div class='".$class."' style='margin:2px 0 5px 0;padding:10px;width:100%;text-align:left'>
                    <div style='width:10%;display:inline'>
                        <img src='./Assests/worker/W12345.jpg' style='width:20%;padding:0;border:2px solid gold'>
                    </div>
                    <div style='width:80%;display:inline;float:right;padding:4px;line-height:8%'>
                        <p><strong>".$rowWorker['workerName']."</strong><hr></p><p>+94 ".$rowWorker['workerPhone'].", ".$rowWorker['workerEmail']."</p>
                    </div>
                </div>";
        }
    }
                
?>
