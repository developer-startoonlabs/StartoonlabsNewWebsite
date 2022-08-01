<?php
$servername = "localhost";
$username = "starngqi_careers";
$password = "Careers@123";
$dbname = "starngqi_careers";
$dbh=new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);

$postData = $uploadedFile = $statusMsg = '';
$msgClass = 'errordiv';
if(isset($_POST['submit'])){
    // Get the submitted form data
    $postData = $_POST;
    $email = $_POST['email'];
    $hospital = $_POST['hospital'];
    $title = $_POST['title'];
    $name = $_POST['name'];
    $subject = $_POST['mobile'];
    $message = $_POST['message'];
    
    $stmt = $dbh->prepare("insert into request_demo values('',?,?,?,?,?,?)");
        $stmt->bindParam(1,$email);
        $stmt->bindParam(2,$hospital);
        $stmt->bindParam(3,$title);
        $stmt->bindParam(4,$name);
        $stmt->bindParam(5,$subject);
        $stmt->bindParam(6,$message);
        $stmt->execute();
    
    // Check whether submitted data is not empty
    if(!empty($email) && !empty($name) && !empty($subject) && !empty($message)){
        
        
        
        // Validate email
        if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
            echo 'Please enter your valid email.';
        }else{
            $uploadStatus = 1;
            
            // Upload attachment file
            // if(!empty($_FILES["attachment"]["name"])){
                
            //     // File path config
            //     $targetDir = "../";
            //     $fileName = basename($_FILES["attachment"]["name"]);
            //     $targetFilePath = $targetDir . $fileName;
            //     $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
                
            //     // Allow certain file formats
            //     $allowTypes = array('pdf', 'doc', 'docx', 'jpg', 'png', 'jpeg');
            //     if(in_array($fileType, $allowTypes)){
            //         // Upload file to the server
            //         if(move_uploaded_file($_FILES["attachment"]["tmp_name"], $targetFilePath)){
            //             $uploadedFile = $targetFilePath;
            //         }else{
            //             $uploadStatus = 0;
            //             $statusMsg = "Sorry, there was an error uploading your file.";
            //         }
            //     }else{
            //         $uploadStatus = 0;
            //         $statusMsg = 'Sorry, only PDF, DOC, JPG, JPEG, & PNG files are allowed to upload.';
            //     }
            // }
            
            if($uploadStatus == 1){
                
                // Recipient
                $toEmail = 'developer.startoonlabs@gmail.com';

                // Sender
                $s = $email;
                $from = 's';
                $fromName = 'CodexWorld';
                
                
                // Subject
                $emailSubject = 'Contact Request Submitted by '.$name;
                
                // Message 
                $htmlContent = '<h2>Contact Request Submitted</h2>
                    <p><b>Name:</b> '.$name.'</p>
                    <p><b>Email:</b> '.$email.'</p>
                    <p><b>Mobile:</b> '.$subject.'</p>
                    <p><b>Hospital Name:</b> '.$hospital.'</p>
                    <p><b>Job Title:</b> '.$title.'</p>
                    <p><b>Message:</b><br/>'.$message.'</p>';
                
                // Header for sender info
                $headers = "From: $fromName"." <".$from.">";

                if(!empty($uploadedFile) && file_exists($uploadedFile)){
                    
                    // Boundary 
                    $semi_rand = md5(time()); 
                    $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x"; 
                    
                    // Headers for attachment 
                    $headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\""; 
                    
                    // Multipart boundary 
                    $message = "--{$mime_boundary}\n" . "Content-Type: text/html; charset=\"UTF-8\"\n" .
                    "Content-Transfer-Encoding: 7bit\n\n" . $htmlContent . "\n\n"; 
                    
                    // Preparing attachment
                    if(is_file($uploadedFile)){
                        $message .= "--{$mime_boundary}\n";
                        $fp =    @fopen($uploadedFile,"rb");
                        $data =  @fread($fp,filesize($uploadedFile));
                        @fclose($fp);
                        $data = chunk_split(base64_encode($data));
                        $message .= "Content-Type: application/octet-stream; name=\"".basename($uploadedFile)."\"\n" . 
                        "Content-Description: ".basename($uploadedFile)."\n" .
                        "Content-Disposition: attachment;\n" . " filename=\"".basename($uploadedFile)."\"; size=".filesize($uploadedFile).";\n" . 
                        "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";
                    }
                    
                    $message .= "--{$mime_boundary}--";
                    $returnpath = "-f" . $email;
                    
                    // Send email
                    $mail = mail($toEmail, $emailSubject, $message, $headers, $returnpath);
                    
                    // Delete attachment file from the server
                    @unlink($uploadedFile);
                }else{
                     // Set content-type header for sending HTML email
                    $headers .= "\r\n". "MIME-Version: 1.0";
                    $headers .= "\r\n". "Content-type:text/html;charset=UTF-8";
                    
                    // Send email
                    $mail = mail($toEmail, $emailSubject, $htmlContent, $headers); 
                }
                
                // If mail sent
                if($mail){
                    $statusMsg = 'Your contact request has been submitted successfully !';
                    $msgClass = 'succdiv';
                    
                    $postData = '';
                }else{
                    $statusMsg = 'Your contact request submission failed, please try again.';
                }
            }
        }
    }else{
        $statusMsg = 'Please fill all the fields.';
    }
}
?>
        
        
        <?php include('includes/header.php') ?>

        <style>
        #header-wrap {
        box-shadow: 0px 2px 2px #ccc;
        }
        </style>
        <!--hero section end-->
        <section class="careerDetailsWrapper brochure">
          <div class="container">
            <div class="row">

              <div class="section-title">

                  <h2 class="title"> 
                    Know More About <span>Pheezee</span>
                  </h2>
                  <p><b>Download The Brochure By Filling Your Professional Information</b></p>

                   </div>


                   <div class="BrochureForm">
                     <form method="post" action="brochure.php" enctype="multipart/form-data">
                       <div class="requiredFields">* Required Fields</div>
                         <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Name <sup>*</sup></label>
    <input type="text" class="form-control" name="name" id="exampleFormControlInput1" placeholder="Enter Name">
  </div>



  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Hospital Name <sup>*</sup></label>
    <input type="text" class="form-control" name="hospital" id="exampleFormControlInput1" placeholder="Enter Hospital Name">
  </div>




  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Job Title <sup>*</sup></label>
    <input type="text" class="form-control" name="title" id="exampleFormControlInput1" placeholder="Enter Job Title">
  </div>


  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Email <sup>*</sup></label>
    <input type="email" class="form-control" name="email" id="exampleFormControlInput1" placeholder="Enter Email">
  </div>




  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Phone Number <sup>*</sup></label>
    <input type="text" class="form-control" name="mobile" id="exampleFormControlInput1" placeholder="Enter Phone No.">
  </div>

    <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">How did you hear about us ? <sup>*</sup></label>
    <input type="text" class="form-control" name="message" id="exampleFormControlInput1" placeholder="Enter Message">
  </div>

      <div class="brochureDownload">
          <!--<a class="btn btn-theme" href="#"> <span>Download</span>-->
          <!--                    </a>-->
                              <button class="btn btn-theme btn-sm d-none d-md-inline-block" type="submit" name="submit">Download</button>

</div>





  
                     </form>
                   </div>



                
            </div>
          </div>
        </section>
        
        <div id="modalForBookingPheezee" >
        <div class="modal-dialog" role="document">
            <div class="modal-content"  style="padding: 1rem;border:none; background-color: #ffffff;box-shadow: 0 3px 10px rgb(0 0 0 / 0.2); margin-top: 8rem;">
                <!--<div class="modal-header" style="display: flex;flex-direction: row;justify-content: flex-end;">-->
                    <!--<button type="button" class="close" style="border: none;background-color: transparent;color:#13152E;margin-left:420px" id="close-btn-booking" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" style="padding: 1rem;"><img src="images/bg/cancel.png" height="20px" width="20px"/></span></button>-->
                <button type="button" class="close" style="border: none;background-color: transparent;color:#13152E;margin-left:450px" id="close-btn-booking" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" style="padding: 1rem;"><img src="images/bg/cross.png" height="20px" width="20px"/></span></button>
                <div class="modal-body">
                   <img src="images/bg/Icon.png" style="height:120px;width:100px;margin-left:190px;margin-bottom:10px;"/>
                    <div class="text-center">
                    <h3 class="text-center" style="font-weight: 700;font-family:Segoe Ui; margin: 0;font-size:30px;color: #13152E;margin-bottom:10px">Thanks<b style="color:#097EC2">!</b></h3>
                    <p class="text-center" style="font-size: 21px;font-family:Segoe Ui;font-weight:700; color: #13152E;padding:0;line-height:1.3;">Thank you for downloading the brochure</p>
                </div>
            </div>
        </div>
    </div>
    </div>
    
    <div id="modalForBookingPheezeeError">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="padding: 1rem;border:none; background-color: #ffffff;box-shadow: 0 3px 10px rgb(0 0 0 / 0.2); margin-top: 8rem;">
                <!--<div class="modal-header">-->
                    <button type="button" class="close" style="border: none;background-color: transparent;color:#13152E;margin-left:450px" id="close-btn-booking" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" style="padding: 1rem;"><img src="images/bg/cross.png" height="20px" width="20px"/></span></button>
                    <!--<button type="button" class="close" id="close-btn-booking-error" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" style="padding: 1rem;"><i class="fas fa-times" style="color: #9d9d9d"></i></span></button>-->
                <!--</div>-->
                <div class="modal-body">
                    <img src="images/bg/error.png" style="height:120px;width:140px;margin-left:160px;margin-bottom:10px;"/>
                    <div class="text-center">
                    <h3 class="text-center" style="font-weight: 700;font-family:Segoe Ui; margin: 0;font-size:30px;color: #13152E;margin-bottom:10px">Sorry<b style="color:#097EC2">...!</b></h3>
                    <p class="text-center" style="font-size: 21px;font-family:Segoe Ui;font-weight:700; color: #13152E;padding:0;line-height:1.3;">We're sorry. Something went wrong. Please try again.</p>
                </div>
            </div>
          </div>
        </div>
    </div>



        <?php include('includes/footer.php') ?>