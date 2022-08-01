 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"/>
 
 <?php
$servername = "localhost";
$username = "starngqi_careers";
$password = "Careers@123";
$dbname = "starngqi_careers";
//$conn=mysqli_connect($servername,$username,$password,"$dbname");
$dbh=new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
if(isset($_POST['submit']))
{    
     $name = $_POST['name'];
     $email = $_POST['email'];
     $mobile = $_POST['mobile'];
     $role = $_POST['role'];
     $jobtype = $_POST['jobtype'];
     $option = $_POST['option'];
     $othercomments = $_POST['othercomments'];
     
     $filename = $_FILES['myfile']['name'];
     
     $extension = pathinfo($filename, PATHINFO_EXTENSION);
     
     $file = $_FILES['myfile']['tmp_name'];
     $size = $_FILES['myfile']['size'];
     
     //$filename = $_FILES['myfile']['name'];
    $type = $_FILES['myfile']['type'];
    //$data = file_get_contents($_FILES['myfile']['tmp_name']);
     
      if (!in_array($extension, ['zip', 'pdf', 'docx'])) {
            echo "Select file and file extension must be .zip, .pdf or .docx";
        } 
        elseif ($_FILES['myfile']['size'] > 5000000) { // file shouldn't be larger than 5Megabyte
            echo "File too large!";
        } 
        else {
    
        //$sql =  "INSERT INTO `career_form`(`name`, `email`, `mobile`, `role`, `job_type`, `education`, `othercomments`) VALUES ('$name','$email','$mobile','$role','$type','$option','$othercomments')";
        $stmt = $dbh->prepare("insert into career_form values('',?,?,?,?,?,?,?,?,?,?)");
        $stmt->bindParam(1,$name);
        $stmt->bindParam(2,$email);
        $stmt->bindParam(3,$mobile);
        $stmt->bindParam(4,$role);
        $stmt->bindParam(5,$jobtype);
        $stmt->bindParam(6,$option);
        $stmt->bindParam(7,$othercomments);
        $stmt->bindParam(8,$filename);
        $stmt->bindParam(9,$type);
        $stmt->bindParam(10,$data);
        $stmt->execute();
        
         $uploadStatus = 1;
            
            // Upload attachment file
            if(!empty($_FILES["myfile"]["name"])){
                
                // File path config
                $targetDir = "../";
                $fileName = basename($_FILES["myfile"]["name"]);
                $targetFilePath = $targetDir . $fileName;
                $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
                
                // Allow certain file formats
                $allowTypes = array('pdf', 'doc', 'docx', 'jpg', 'png', 'jpeg');
                if(in_array($fileType, $allowTypes)){
                    // Upload file to the server
                    if(move_uploaded_file($_FILES["myfile"]["tmp_name"], $targetFilePath)){
                        $uploadedFile = $targetFilePath;
                    }else{
                        $uploadStatus = 0;
                        $statusMsg = "Sorry, there was an error uploading your file.";
                    }
                }else{
                    $uploadStatus = 0;
                    $statusMsg = 'Sorry, only PDF, DOC, JPG, JPEG, & PNG files are allowed to upload.';
                }
            }
            if($uploadStatus == 1){
                
                // Recipient
                $toEmail = 'developer.startoonlabs@gmail.com';

                // Sender
                $s = $email;
                $from = 's';
                $fromName = 'Startoonlabs job application';
                
                
                // Subject
                $emailSubject = 'Application Request Submitted by '.$name;
                
                
                // Message 
                $htmlContent = '<h2>Application Request Submitted</h2>
                    <p><b>Name:</b> '.$name.'</p>
                    <p><b>Email:</b> '.$s.'</p>';
                    // <p><b>Subject:</b> '.$subject.'</p>
                    // <p><b>Message:</b><br/>'.$message.'</p>
                
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
                        "Content-Disposition: myfile;\n" . " filename=\"".basename($uploadedFile)."\"; size=".filesize($uploadedFile).";\n" . 
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
                    $statusMsg = 'Your application has been submitted successfully !';
                    $msgClass = 'succdiv';
                    
                    $postData = '';
                }else{
                    $statusMsg = 'Your application request submission failed, please try again.';
                }
            }
                //mysqli_close($dbh);
        }
}
?>

<?php if(!empty($statusMsg)){ ?>
    <p class="statusMsg <?php echo !empty($msgClass)?$msgClass:''; ?>"><?php echo $statusMsg; ?></p>
<?php } ?>
 
 <?php include('includes/header.php') ?>

        <style>
        #header-wrap {
        box-shadow: 0px 2px 2px #ccc;
        }

        </style>
        
        <!--hero section end-->
        <section class="careerDetailsWrapper">
          <div class="container">
            <div class="row">
              <div class="section-title">

                
                  <h2 class="title"> 
                    <a href="careers.php"><i class="las la-angle-left"></i> 
                    Sales Executives</a>
                  </h2>

                   </div>
                   <div class="careerDescription">
                  <div class="careerDetDeg">
                    <p>Full Time | Fresher</p>
                  </div>

                  <div class="careerRes">
                    <h4>We,</h4>
                  </div>

                  <div class="careersDetailsText">
                    <p>Startoon labs has been established with an aim to identify the medical gaps and fill it with cutting edge technological solutions. We, Startoonians, work with growth mindset and believes in continuous learning. Our major focus is customer centricity and providing innovative solutions in health care sector.</p>
                  </div>

                  <div class="lookingFor">
                    <h4>What we are looking for</h4>
                    <ul>
                      <li>1. 1-2 years' quota carrying medical sales experience</li>
                      <li>2. Strong communication skills – both written and oral</li>
                      <li>3. Experience in working with hospitals and doctors is a must</li>
                      <li>4. Experience and working knowledge of CRM systems</li>
                      <li>5. Demonstrable track record of over-achieving quota</li>
                      <li>6. Strong written and verbal communication skills</li>
                    </ul>
                  </div>

                  <div class="roles">
                    <h4>Your Roles & Responsibilities</h4>
                    <ul>
                      <li>1. Meet and exceed sales targets</li>
                      <li>2. Successfully create business from new and existing customer accounts</li>
                      <li>3. Manage complex negotiations with senior-level executives</li>
                      <li>4. Build rapport and establish long term relationships with customers</li>
                      <li>5. 100% Field work</li>
                      <!--<li>6. An impressive portfolio/website/blog</li>-->
                    </ul>
                  </div>


                  <div class="careerDetfinal">
                    <h4>You will a good fit in Startoon Labs if you enjoy working independently and above the ability to create value with minimal guidance</h4>
                  </div>

                  <!--<div class="careerDetfinalBtm">-->
                  <!--  <h4>Please email your resume with subject line " <span>Applying for (POSITION NAME HERE)</span> " to <span>careers@startoonlabs.com</span></h4>-->
                  <!--</div>-->
                  <!--<h4 style="text-align:center;color:#097EC1">Or</h4>-->
                  <div style="width:50%">
                      <h3 style="color:#097EC1;margin-bottom:5px">Apply with details</h3>
                        <form id="book_pheezee_form" class="booking-form" method="post" action="career-details.php" accept-charset="utf-8" enctype="multipart/form-data">
                        <div class="form-group">
                          <input type="text" class="form-control" name="name" placeholder="Name" required>
                        </div>
                        <div class="form-group">
                          <input type="email" class="form-control" name="email" placeholder="Email ID" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="email@emaildomain.com" required>
                        </div>
                        <div class="form-group">
                          <input type="tel" pattern="[0-9]{10}" class="form-control" name="mobile" placeholder="Mobile Number" title="9807654321" required>
                        </div>
                        <div class="form-group">
                          <input type="text" class="form-control" name="role" placeholder="Role" required>
                        </div>
                        <!--<div class="form-group">-->
                        <!--  <input type="text" class="form-control" name="clinicname" placeholder="Clinic Name"  required>-->
                        <!--</div>-->
                        <!--<div class="form-group">-->
                        <!--  <input type="text" class="form-control" name="quantity" placeholder="Quantity"  required>-->
                        <!--</div>-->
                        <!--<div class="form-group">-->
                        <!--  <input type="text" class="form-control" name="city" placeholder="City"  required>-->
                        <!--</div>-->
                        <!--<div class="form-group">-->
                        <!--  <input type="text" id="refferal" class="form-control" name="refferal" placeholder="Referral ID">-->
                        <!--</div>-->
                        <div class="form-group">
                        <select name="jobtype" id="option" placeholder="Referral ID" style="font-size: 14px;height: 50px;color: #454545;border: 1px solid #e9eaed;border-radius: 0; width: 100%;" required>
                        <option value="" disabled selected>Job type</option>  
                        <option value="Intern">Internship</option>
                        <option value="Fulltime">Fulltime</option>
                       </select>
                       </div>
                        <div class="form-group" style="margin-top:18px">
                        <select name="option" id="option" placeholder="Referral ID" style=" font-size: 14px;height: 50px;color: #454545;border: 1px solid #e9eaed;border-radius: 0; width: 100%;" required>
                        <option value="" disabled selected>Select Higher Education</option>  
                        <option value="12th">12th</option>
                        <option value="Diploma">Diploma</option>
                        <option value="Under-Graduate">Under-Graduate</option>
                        <option value="Post-Graduate">Post-Graduate</option>
                       </select>
                       </div>
                       <div class="form-group"  style="margin-top:18px">
                           <textarea id="othercomments" name="othercomments" placeholder="Add your cover letter here." rows="4" cols="82"></textarea>
                       </div>
                       <div class="form-group">
                           <label for="file">Upload Resume*</label>
                           <div>
                            <input type="file" name="myfile" id="file"/>
                            </div>
                        </div>
                        <div class="form-group">
                          <output type="text" id="pass">
                        </div>
                        <button type="submit" id="book_pheezee_submit" class="btn btn-theme btn-sm d-none d-md-inline-block" name="submit" value="Submit" onclick="pop()"> APPLY NOW </button>
                    </form>
                  </div>
                </div>
            </div>
          </div>
        </section>
        
    <!--    <div id="modalForBookingPheezee" >-->
    <!--    <div class="modal-dialog" role="document" style="width:893px;height:494px">-->
    <!--        <div class="modal-content" style="padding: 1rem; background-color: #ffffff;box-shadow: 0 3px 10px rgb(0 0 0 / 0.2); margin-top: 8rem;">-->
                <!--<div class="modal-header" style="display: flex;flex-direction: row;justify-content: flex-end;">-->
                    <!--<button type="button" class="close" style="border: none;background-color: transparent;color:#13152E;" id="close-btn-booking" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" style="padding: 1rem;"><i style="margin-left:400px;font-size:20px;" class='fa fa-close fa-sm'></i></span></button>-->
    <!--            <button type="button" class="close" style="border: none;background-color: transparent;color:#13152E;margin-left:420px" id="close-btn-booking" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" style="padding: 1rem;"><img src="images/bg/cancel.png" height="20px" width="20px"/></span></button>-->
    <!--            <div class="modal-body">-->
    <!--               <img src="images/bg/Icon.png" style="height:140px;width:200px;margin-left:130px;margin-bottom:10px;"/>-->
    <!--                <div class="text-center">-->
    <!--                <h3 class="text-center" style="font-weight: 700;font-family:Segoe Ui; margin: 0;font-size:32px;color: #13152E">Thanks<b style="color:#097EC2">!</b></h3>-->
    <!--                <p class="text-center" style="font-size: 23px;font-family:Segoe Ui;font-weight:600; color: #13152E;">Thank you for requesting pheezee assessment you will be hearing from us soon</p>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
    <!--</div>-->
    <div id="modalForBookingPheezee" >
        <div class="modal-dialog" role="document">
            <div class="modal-content"  style="padding: 1rem;border:none; background-color: #ffffff;box-shadow: 0 3px 10px rgb(0 0 0 / 0.2); margin-top: 8rem;">
                <!--<div class="modal-header" style="display: flex;flex-direction: row;justify-content: flex-end;">-->
                    <!--<button type="button" class="close" style="border: none;background-color: transparent;color:#13152E;margin-left:420px" id="close-btn-booking" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" style="padding: 1rem;"><img src="images/bg/cancel.png" height="20px" width="20px"/></span></button>-->
                <button type="button" class="close" style="border: none;background-color: transparent;color:#13152E;margin-left:420px" id="close-btn-booking" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" style="padding: 1rem;"><img src="images/bg/cross.png" height="20px" width="20px"/></span></button>
                <div class="modal-body">
                   <img src="images/bg/Icon.png" style="height:120px;width:100px;margin-left:190px;margin-bottom:10px;"/>
                    <div class="text-center">
                    <h3 class="text-center" style="font-weight: 700;font-family:Segoe Ui; margin: 0;font-size:30px;color: #13152E;margin-bottom:10px">Thanks<b style="color:#097EC2">!</b></h3>
                    <p class="text-center" style="font-size: 21px;font-family:Segoe Ui;font-weight:700; color: #13152E;padding:0;line-height:1.3;">Thank you for applying a job you will be hearing from us soon</p>
                </div>
            </div>
        </div>
    </div>
    </div>
    
    <div id="modalForBookingPheezeeError">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="padding: 1rem;border:none; background-color: #ffffff;box-shadow: 0 3px 10px rgb(0 0 0 / 0.2); margin-top: 8rem;">
                <!--<div class="modal-header">-->
                    <button type="button" class="close" style="border: none;background-color: transparent;color:#13152E;margin-left:420px" id="close-btn-booking" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" style="padding: 1rem;"><img src="images/bg/cross.png" height="20px" width="20px"/></span></button>
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