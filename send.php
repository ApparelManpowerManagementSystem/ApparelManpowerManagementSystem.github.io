<html>
<head>
<title>send mail </title>
<link rel="stylesheet" href="css/bootstrap.min.css">
    </head>
    <body>
    <div class="container">
    <h1 class="text-center">sending mails</h1>
    <h2 class="text-center">part 1</h2>
     <?php if(isset($_POST['sendmail'])){if(mail($_POST['email'],$_POST['subject'],$_POST['message'])){
        echo "Mail send";
        }else{
        echo "Failed";
        }
        }
        
        ?>
        <div class="row">
        <div class="col-md-9 col-md-offset-2">
            <form role="form" method="post" enctype="multipart/form-data">
               <div class="row">
                <div class="col-sm-9 form-group">
                    <label for="email">To Email:</label>
                    <input type="email" class="form-control" id="email" name="email" maxlength="50">
                   </div>
                </div>
                 <div class="row">
                <div class="col-sm-9 form-group">
                    <label for="subject">Subject:</label>
                    <input type="text" class="form-control" id="subject" name="subject" maxlength="50">
                   </div>
                </div>
                <div class="row">
                <div class="col-sm-9 form-group">
                    <label for="message">Message:</label>
                    <textarea class="form-control" type="textarea" id="message" name="message" placeholder="message here" maxlength="6000" row="5"></textarea>
                   </div>
                </div>
                <div class="row">
                <div class="col-sm-9 form-group">
                    <button type="submit" name="sendmail" class="btn btn-lg btn-success btn-block">Send</button>
                    </div>
                </div>
                
            </form></div>
        </div>
        </div></body>
</html>