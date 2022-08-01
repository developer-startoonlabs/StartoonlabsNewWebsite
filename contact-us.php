<?php include('includes/header.php') ?>
             <style>
        div#navbarNav a.nav-link.co-active {
        color: #056ca8  !important;
        }
        #header-wrap {
        box-shadow: 0px 2px 2px #ccc;
        }
        .popup{
            position:absolute;
            top:0;
            left:50%;
            transform:translate(-50%,-50%) scale(0.1);
            visibility:hidden;
            transition:transform 0.4s, top 0.4s;
        }
        .open-popup{
            visibility:visible;
            top:50%;
            transform: translate(-50%,-50%) scale(1);
        }
        </style>
        
        
        <?php

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

$postData = $uploadedFile = $statusMsg = '';
$msgClass = 'errordiv';
if(isset($_POST['submit'])){
    // Get the submitted form data
    $postData = $_POST;
    $email = $_POST['email'];
    $name = $_POST['name'];
    $subject = $_POST['mobile'];
    $message = $_POST['message'];
    
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
                     
                    echo '<script type="text/javascript">
                    
                        <div id="modalForBookingPheezee" >
                        <div class="modal-dialog" role="document">
                        <div class="modal-content popup"  style="padding: 1rem;border:none; background-color: #ffffff;box-shadow: 0 3px 10px rgb(0 0 0 / 0.2); margin-top: 8rem;">
                <!--<div class="modal-header" style="display: flex;flex-direction: row;justify-content: flex-end;">-->
                    <!--<button type="button" class="close" style="border: none;background-color: transparent;color:#13152E;margin-left:420px" id="close-btn-booking" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" style="padding: 1rem;"><img src="images/bg/cancel.png" height="20px" width="20px"/></span></button>-->
                        <button type="button" class="close" onclick="close()" style="border: none;background-color: transparent;color:#13152E;margin-left:450px" id="close-btn-booking" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" style="padding: 1rem;"><img src="images/bg/cross.png" height="20px" width="20px"/></span></button>
                        <div class="modal-body">
                        <img src="images/bg/Icon.png" style="height:120px;width:100px;margin-left:190px;margin-bottom:10px;"/>
                        <div class="text-center">
                        <h3 class="text-center" style="font-weight: 700;font-family:Segoe Ui; margin: 0;font-size:30px;color: #13152E;margin-bottom:10px">Thanks<b style="color:#097EC2">!</b></h3>
                        <p class="text-center" style="font-size: 21px;font-family:Segoe Ui;font-weight:700; color: #13152E;padding:0;line-height:1.3;">Thank you for connecting with us you will be hearing from us soon</p>
                    </div>
            </div>
        </div>
    </div>
    </div>
                    
                    </script>';
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

<head>
     <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="robots" content="noindex, nofollow, noimageindex, noarchive, nocache, nosnippet">
        <meta name="description" content="PheezeeHome,the flagship product of Startoon Labs,is the smart wearable technology to monitor and track recovery of patients undergoing physiotherapy.PheezeeHome provides scientific evidence for the treatment. It is used by the therapist in the clinical setting as well as in the home setting.Using pheezee dashboard, you can keep track all your recoveries,as a patient as well as a therapist.This award winning technology is the future of physiotheraphy which aims at bridging the gap between a patient and a therapist.">
        <meta name="viewport" content="width=device-width, initial-scale=1">
         <meta name="keywords" content="contact us | startoon labs | startoonlabs.com | hyderabad startups">
         <meta name="title" content="contact us,startoon labs,startoonlabs.com,hyderabad startups">
         <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>   
</head>
        <body>
        
        <!--hero section end-->
        <section class="careerDetailsWrapper brochure">
          <div class="container">
            <div class="row">
              <div class="section-title">
                  <h2 class="title"> 
                    <span>Contact</span> Us
                  </h2>
                  <!--<p><b>Filling Your Information</b></p>-->
                  <p><b>Please Share Your Requirement By Filling Your Information</b></p>
                   </div>
                   <div class="BrochureForm">
                     <form method="post" id="book" action="contact-us.php" enctype="multipart/form-data">
                       <div class="requiredFields">* Required Fields</div>
                         <div class="mb-3 form-group">
                            <label for="exampleFormControlInput1" class="form-label">Name <sup>*</sup></label>
                            <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="Enter Name" required>
                        </div>
                        <div class="mb-3 form-group">
                            <label for="exampleFormControlInput1" class="form-label">Email <sup>*</sup></label>
                            <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="Enter Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="email@emaildomain.com" required>
                        </div>
                        <div class="mb-3 form-group">
                            <label for="exampleFormControlInput1" class="form-label">Phone Number <sup>*</sup></label>
                            <input type="tel" pattern="[0-9]{10}" class="form-control" name="mobile" id="exampleFormControlInput1" placeholder="Enter Phone No." title="9807654321" required>
                        </div>
                        <div class="mb-3 form-group">
                            <label for="exampleFormControlInput1" class="form-label">Message<sup>*</sup></label>
                            <textarea cols="6" rows="4" name="message" class="form-control" placeholder="Enter Message" required></textarea>
                            </div>
                          <div class="brochureDownload form-group">
                              <button id="book_submit" class="btn btn-theme btn-sm d-none d-md-inline-block" type="submit" name="submit">Submit</button>
                                </div>
                                         </form>
                                       </div>
                                </div>
                              </div>
                            </section>
                            <section class="pb-0">

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
    
    <div class="modal pheezeeVideoModal" id="popup" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
               <div class="modal-content">
                  <div class="modal-header">
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                     <iframe id="Geeks3" width="100%" height="500px"
                     src=
                     "https://www.youtube.com/embed/b4bWRAz0HVs"
                     frameborder="0" allowfullscreen autoplay="1">
                     </iframe>
                  </div>
               </div>
            </div>

         </div>


         <div class="modal pheezeeVideoModal" id="exampleModal11" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

            <div class="modal-dialog">
               <div class="modal-content">
                  <div class="modal-header">
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                     <iframe id="Geeks3" width="100%" height="500px"
                     src=
                     "https://www.youtube.com/embed/jmN7cKTvGsM"
                     frameborder="0" allowfullscreen autoplay="1">
                     </iframe>
                  </div>
               </div>
            </div>
         </div>
    
     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d60895.10935955085!2d78.4789045705732!3d17.462378186520883!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb9bc394109db5%3A0x4bb731d2d7103428!2sStartoon%20Labs%20Pvt.%20Ltd!5e0!3m2!1sen!2sin!4v1655190515961!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
    
    // <script>
    //     $(document).ready(function(){
            
    //         $('#book').on('submit', function(e) {
    //             e.preventDefault();
    //             var form = $(this).serializeArray();
    //             console.log(form);
    //             //var url = 'https://production.pheezee.com/v1/sales';
    //             $.ajax({
    //               type: "POST",
    //               url: url,
    //               data: form, // serializes the form's elements.
    //               success: function(data){
    //                     $('#book').each(function(){
    //                         this.reset();
    //                     })
    //                     $('#modalForBookingPheezee').toggle();
    //               },
    //               error: function(){
    //                   $('#modalForBookingPheezeeError').toggle();
    //               }
    //              });
    //             return false;
    //         })
            
    //         $('#close-btn-booking').click(function(){
    //             $('#modalForBookingPheezee').toggle();
    //         })
    //         $('#close-btn-booking-error').click(function(){
    //             $('#modalForBookingPheezeeError').toggle();
    //         })
    //     })
    // </script>
    <script type="text/javascript">
    let popup = document.getElementById("popup");
        function open(){
            popup.classList.add("open-popup");
        }
        function close(){
            popup.classList.remove("open-popup");
        }
    </script>
   
    
    </body>

        <?php include('includes/footer.php') ?>
        
        
        
        