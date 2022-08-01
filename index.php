
<?php include 'config.php'; ?>


<?php require_once ROOT_PATH . '/includes/head_section.php'; ?>


<title>Startoon Labs | Book Your Pheezee </title>
<style>
    .modal-content {
        background-color: #f77e0b;
    }
    
    #modalForErrorBooking .modal-content {
        background-color: #9d9d9d;
    }
    .modal-open .modal {
        background-color: #000000cc;
        z-index: 1111111;
    }
    #modalForBookingPheezee, #modalForBookingPheezeeError, #modalForBookingPheezeeErrorCode {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: #000000AA;
        display: none;
    }
</style>
<!DOCTYPE html>
<html lang="en">
   <head>


      <!-- meta tags -->
      <meta charset="utf-8">
      <meta name="keywords" content="" />
      <meta name="description" content="Startoon Labs" />
      <meta name="author" content="www.themeht.com" />
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Title -->
      <title>Startoon Labs</title>
      <!-- favicon icon -->
      <link rel="shortcut icon" href="images/favicon.png" />
      <!-- inject css start -->
      <!--== bootstrap -->
      <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
      <!--== fonts -->
      <link href="https://fonts.googleapis.com/css2?family=Livvic:ital,wght@0,300;0,400;0,500;0,600;0,700;0,900;1,300;1,400;1,500;1,600;1,700;1,900&amp;display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
      <!--== animate -->
      <link href="css/animate.css" rel="stylesheet" type="text/css" />
      <!--== line-awesome -->
      <link href="css/line-awesome.min.css" rel="stylesheet" type="text/css" />
      <!--== magnific-popup -->
      <link href="css/magnific-popup.css" rel="stylesheet" type="text/css" />
      <!--== owl.carousel -->
      <link href="css/owl.carousel.css" rel="stylesheet" type="text/css" />
      <!--== lightslider -->
      <link href="css/lightslider.min.css" rel="stylesheet" type="text/css" />
      <!--== base -->
      <link href="css/base.css" rel="stylesheet" type="text/css" />
      <!--== shortcodes -->
      <link href="css/shortcodes.css" rel="stylesheet" type="text/css" />
      <!--== spacing -->
      <link href="css/spacing.css" rel="stylesheet" type="text/css" />
      <!--== style -->
      <link href="css/style.css" rel="stylesheet" type="text/css" />
      <!--== color-customizer -->
      <link href="#" data-style="styles" rel="stylesheet">
     
      <!-- inject css end -->


      <!-- resources-->

                     <link rel="stylesheet" href="dist/skeletabs.css" />


    <!-- resources-->


      <!-- GRT Youtube Plugin CSS -->
      <link rel="stylesheet" href="css/grt-youtube-popup.css">
      
      <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>

   <!--</head>-->
   <!--<body>-->
      <!-- page wrapper start -->
      <div class="page-wrapper">
         <!-- preloader start -->
         <!-- <div id="ht-preloader">
            <div class="clear-loader d-flex align-items-center justify-content-center">
              <div class="loader">
                <span class="plus"></span>
                <span class="plus"></span>
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
              </div>
            </div>
            </div>
            -->
         <!-- preloader end -->

<div class="content">


         <header id="site-header" class="header">
            <div class="header-top light-bg">
               <div class="container-fluid px-lg-12">
                  <div class="row">
                     <div class="col d-flex align-items-center justify-content-between">
                        <div class="topbar-link d-flex align-items-center text-black">
                           <div class="d-none d-sm-flex align-items-center me-3 d-block-res">
                              <div> <i class="las la-phone"></i>
                              </div>
                              <div>Phone <a class="text-black" href="tel:+918790896481">+91 8790896481</a>
                           </div>
                        </div>
                        <div class="d-none d-md-flex align-items-center me-3 d-block-res">
                           <div> <i class="las la-map-marker"></i>
                           </div>
                           <div>
                              <div>Plot No. 10, Near Strawberry Hotel, Sardar Patel Road, Paigah Colony, Secunderabad, Telangana - 500003.</div>
                           </div>
                        </div>
                     </div>
                     <div class="social-icons d-none d-lg-inline-block ms-3">
                        <ul class="list-inline">
                           <li><a href="https://www.facebook.com/startoon.labs.5" target="_blank"><i class="lab la-facebook-f"></i></a>
                        </li>
                        <li><a href="https://twitter.com/startoonlabs" target="_blank"><i class="lab la-twitter"></i></a>
                     </li>
                     <li><a href="https://www.youtube.com/channel/UCUAw7jN5tNpbxAWiLTYOi7A" target="_blank"><i class='fa fa-youtube-play'></i></a>
                  </li>
                  <li><a href="https://www.linkedin.com/company/startoonlabs/?originalSubdomain=in" target="_blank"><i class="lab la-linkedin-in"></i></a>
               </li>
               <li><a href="https://www.instagram.com/startoonlabs" target="_blank"><img src="../bookpheezeererefferale/images/icons/instagrey.png" style="height:23px;width:23px;"/></a>
            </li>
         </ul>
         </div>
         </div>
         </div>
         </div>
         </div>
         </div>
         <div id="header-wrap">
         <div class="container-fluid px-lg-12">
         <div class="row">
         <div class="col">
         <nav class="navbar navbar-expand-lg">
         <a class="navbar-brand logo" href="index.php">
         <img id="logo-img" class="img-fluid" src="images/logo.png" alt="">
         </a>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"> <span></span>
         <span></span>
         <span></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarNav">

     




         <ul class="navbar-nav position-relative">
            <!-- Home -->
            <li> <a class="nav-link h-active" href="../index.php">Home</a>
         </li>
        
         <li> <a class="nav-link p-active" href="../pheezee.php">Pheezee</a>
         </li>
          <li> <a class="nav-link a-active" href="../about-us.php">About Us</a>
         </li>
          <li> <a class="nav-link c-active" href="../careers.php">Careers</a>
         </li>
         <li> <a class="nav-link r-active" href="../resources.php">Resources</a>
         </li>
         <li> <a class="nav-link co-active" href="../contact-us.php">Contact Us</a>
         </li>

         </ul>
         </div>
         <div class="right-nav align-items-center d-flex justify-content-end">
         <div class="ms-sm-3 me-md-5">
         </div> <a class="btn btn-theme btn-sm d-none d-md-inline-block" href="../request-demo.php"><span>Request Demo</span></a>
         </div>
         </nav>
         </div>
         </div>
         </div>
         </div>
         </header>


<body>

    <div class="container">
        <h1 style="font-family:Segoe Ui;font-weight:700;font-size:32px;color:#13152E;text-align:center">BOOK PHEEZEE</h1>
    </div>
    
    <div class="container page-content">
         
    <div class="row">
        <div class="col-lg-6 left-content">
            <div class="img-container">
                <img src="static/images/pheezee-new.jpg" alt="product-image"/>
            </div>
            <div class="product-description">
                <!--<h2 style="color: #f77e0b; margin-top: 0;"><span id="discountAmountText">M.R.P.:</span> &#8377; <span id="discountAmount">59,000</span></h2>-->
                <h4 style="color: #097EC2; margin-top: 0;" class="hidden" id="strikeThroughPrice">M.R.P.: &#8377; 59,000</h4>
                <h2 style="margin-bottom:10px;font-family:Segoe Ui;color:#097EC2;font-weight:700;font-size:32px;">Product Description</h2>
                <p style="font-family:Segoe Ui;color:#454545;font-size:1rem">Pheezee is a wearable prognostic device that can monitor and track the functional recovery of patients undergoing physiotherapy. The biofeedback feature of the device enhances the patient's experience and helps the physiotherapist with right assessment, thereby aiming for faster and effective patient's recovery.
</p>
                <h4 style="color: #097EC2; margin-bottom: 0.1rem; font-weight: bold;">100% Advance Payment</h4>
                <h4 style="color: #097EC2; margin-top: 0; font-weight: bold">Online Payment Only</h4>
                <p style="font-family:Segoe Ui;color:#454545;font-size:1rem">*One year free subscription on Pheezee reports</p>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="container">
                <h3 style="margin-bottom:10px;font-family:Segoe Ui;color:#13152E;margin-bottom:10px;">Booking Details</h3>
                
                
                <form id="book_pheezee_form" class="booking-form" method="post" action="index.php">
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
                          <input type="text" class="form-control" name="clinicname" placeholder="Clinic Name"  required>
                        </div>
                        <div class="form-group">
                          <input type="hidden" class="form-control" id="defaultPrice" name="amount" placeholder="Closing Price" min=1000 max=200000000000 value=59000>
                        </div>
                        <div class="form-group">
                          <input type="number" class="form-control" name="units" placeholder="Quantity" required min=1 max=2000>
                        </div>
                        <div class="form-group">
                          <input type="hidden" class="form-control" name="mode" placeholder="Payment Mode: Online/Cash"  value="Online">
                        </div>
                        <div class="form-group">
                          <input type="hidden" class="form-control" name="method" placeholder="Payment Method: Full" value="Full">
                        </div>
                        <div class="form-group">
                          <input type="text" class="form-control" name="gstNumber" placeholder="GST NO.">
                        </div>
                        <div class="form-group">
                            <textarea rows="1" cols="50" class="form-control" cols="50" name="address" placeholder="Address"  maxlength="200" required></textarea>
                        </div>
                        <div class="form-group">
                          <input type="text" id="refferal" class="form-control" name="refferal" placeholder="Referral ID" required>
                        </div>
                        <div class="alert alert-success hidden" role="alert" id="correctAlert" style="border-radius: 20px; font-weight: bold; padding: 10px 15px;">Referral ID Successfully Applied...</div>
                        <div class="alert alert-danger hidden" role="alert" id="incorrectAlert" style="border-radius: 20px; font-weight: bold; padding: 10px 15px;">Wrong Referral Id. Contact Sales.</div>
                        <div class="form-group">
                            <textarea rows="1" cols="50" class="form-control" cols="50" name="comments" placeholder="Comments"  maxlength="200" required></textarea>
                        </div>
                        <div style="text-align:center">
                        <button type="submit" id="book_pheezee_submit" class="btn btn-theme btn-sm d-none d-md-inline-block" name="book_now"> BOOK NOW </button>
                        </div>
                    </form>
            </div>
            </div>
            
            
        </div>
    </div>
    
    </div>
    
    <!--<div class="modal fade" id="modalForBookingPheezee" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">-->
    <!--  <div class="modal-dialog" role="document">-->
    <!--    <div class="modal-content" style="padding: 2rem; background-color: #ffffff; border: 2px solid #f77e0b;">-->
    <!--        <div class="modal-header">-->
    <!--            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" style="padding: 1rem;"><i class="fas fa-times" style="color: #f77e0b"></i></span></button>-->
    <!--        </div>-->
    <!--        <div class="modal-body">-->
    <!--            <h2 class="modal-title text-center" id="myModalLabel"><i class="far fa-check-circle" style="color: #f77e0b"></i></h2>-->
    <!--            <div class="text-center">-->
    <!--            <h3 class="text-center" style="color: black; font-weight: bold; margin: 0; color: #f77e0b">Booking Successful!</h3>-->
    <!--            <p class="text-center" style="font-size: 2rem; color: #f77e0b;">Please wait for our sales team to contact...</p>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--  </div>-->
    <!--</div>-->
    <!--</div>-->
    
    <!--<div id="modalForBookingPheezee">-->
    <!--    <div class="modal-dialog" role="document">-->
    <!--        <div class="modal-content" style="padding: 1rem; background-color: #ffffff; border: 2px solid #097EC1; margin-top: 8rem;">-->
    <!--            <div class="modal-header">-->
    <!--                <button type="button" class="close" id="close-btn-booking" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" style="padding: 1rem;"><i class="fas fa-times" style="color: #f77e0b"></i></span></button>-->
    <!--            </div>-->
    <!--            <div class="modal-body">-->
    <!--                <h2 class="modal-title text-center" id="myModalLabel"><i class="far fa-check-circle" style="color: #097EC1;"></i></h2>-->
    <!--                <div class="text-center">-->
    <!--                <h3 class="text-center" style="color: black; font-weight: bold; margin: 0; color: #097EC1;">Booking Successful!</h3>-->
    <!--                <p class="text-center" style="font-size: 2rem; color: #097EC1;">Please wait for our sales team to contact...</p>-->
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
                <button type="button" class="close" style="border: none;background-color: transparent;color:#13152E;margin-left:420px" id="close-btn-booking" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" style="padding: 1rem;"><img src="static/images/cross.png" height="20px" width="20px"/></span></button>
                <div class="modal-body">
                   <img src="static/images/icon.png" style="height:120px;width:100px;margin-left:170px;margin-bottom:10px;"/>
                    <div class="text-center">
                    <h3 class="text-center" style="font-weight: 700;font-family:Segoe Ui; margin: 0;font-size:30px;color: #13152E;margin-bottom:10px">Thanks<b style="color:#097EC2">!</b></h3>
                    <p class="text-center" style="font-size: 21px;font-family:Segoe Ui;font-weight:700; color: #13152E;padding:0;line-height:1.3;">Thank you for connecting with us you will be hearing from us soon</p>
                </div>
            </div>
        </div>
    </div>
    </div>
    
    
    <div id="modalForBookingPheezeeError">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="padding: 2rem; background-color: #ffffff; border: 2px solid #097EC1; margin-top: 8rem;">
                <div class="modal-header">
                    <button type="button" class="close" id="close-btn-booking-error" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" style="padding: 1rem;"><i class="fas fa-times" style="color: #9d9d9d"></i></span></button>
                </div>
                <div class="modal-body">
                    <h1 class="modal-title text-center" id="myModalLabel"><i class="far fa-times-circle" style="color: #097EC1;"></i></h1>
                    <div class="text-center">
                    <h3 class="text-center" style="font-weight: bold; margin: 0; color: #097EC1;">Something Went Wrong!</h3>
                    <p class="text-center" style="font-size: 2rem; color: #097EC1;">Please try again...</p>
                </div>
            </div>
          </div>
        </div>
    </div>
    
    <div id="modalForBookingPheezeeErrorCode">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="padding: 2rem; background-color: #ffffff; border: 2px solid #9d9d9d; margin-top: 30rem;">
                <div class="modal-header">
                    <button type="button" class="close" id="close-btn-booking-error-code" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" style="padding: 1rem;"><i class="fas fa-times" style="color: #9d9d9d"></i></span></button>
                </div>
                <div class="modal-body">
                    <h1 class="modal-title text-center" id="myModalLabel"><i class="far fa-times-circle" style="color: #9d9d9d"></i></h1>
                    <div class="text-center">
                    <h3 class="text-center" style="font-weight: bold; margin: 0; color: #9d9d9d">Something Went Wrong!</h3>
                    <p class="text-center" style="font-size: 2rem; color: #9d9d9d;">Please check your Referral ID or contact our sales team...</p>
                </div>
            </div>
          </div>
        </div>
    </div>
    
    <!--<div class="modal fade" id="modalForErrorBooking" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">-->
    <!--  <div class="modal-dialog" role="document">-->
    <!--    <div class="modal-content" style="padding: 2rem; background-color: #ffffff; border: 2px solid #9d9d9d;">-->
    <!--        <div class="modal-header">-->
    <!--            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" style="padding: 1rem;"><i class="fas fa-times" style="color: #9d9d9d"></i></span></button>-->
    <!--        </div>-->
    <!--        <div class="modal-body">-->
    <!--            <h1 class="modal-title text-center" id="myModalLabel"><i class="far fa-times-circle" style="color: #9d9d9d"></i></h1>-->
    <!--            <div class="text-center">-->
    <!--            <h3 class="text-center" style="font-weight: bold; margin: 0; color: #9d9d9d">Something Went Wrong!</h3>-->
    <!--            <p class="text-center" style="font-size: 2rem; color: #9d9d9d;">Please try again...</p>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--  </div>-->
    <!--</div>-->
    <!--</div>-->

	<script src="static/js/vendor/jquery-1.11.2.js"></script>
	<script src="../js/vendor/bootstrap.min.js"></script>
    <!-- footer -->
    <!-- view article -->

         <div class="modal pheezeeVideoModal" id="exampleModal10" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

<!-- view articles-->


<!--about us -->

<div class="modal pheezeeVideoModal" id="exampleModal12" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

            <div class="modal-dialog">
               <div class="modal-content">
                  <div class="modal-header">
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                     <iframe id="Geeks3" width="100%" height="500px"
                     src=
                     "https://www.youtube.com/embed/I8KUjCILj4Q"
                     frameborder="0" allowfullscreen autoplay="1">
                     </iframe>
                  </div>
               </div>
            </div>

         </div>


         <!--about us-->




                  <footer class="footer">
                     <div class="primary-footer">
                        <div class="container-fluid">
                           <div class="row">
                              <div class="col-lg-12 col-12 p-4">
                                 <div class="row">
                                    <div class="wd-16">
                                       <h4 class="">Company</h4>
                                       <div class="footer-list">
                                          <ul class="list-unstyled">
                                             <li><a href="../about-us.php">About Us </a></li>
                                             <li><a href="../careers.php">Careers </a></li>
                                             <!--<li> <a href="#"> Press</a></li>-->
                                             <li> <a href="../resources.php">Blogs </a></li>
                                             <li> <a href="../contact-us.php">Contact Us </a></li>
                                          </ul>
                                          
                                          <br>
                                          <h4 class="">Product</h4>
                                          <ul class="list-unstyled">
                                             <li><a href="../pheezee.php">Pheezee</a></li>
                                          </ul>
                                       </div>
                                    </div>
                                    <div class="wd-16">
                                       <h4 class="">Support</h4>
                                       <div class="footer-list">
                                          <ul class="list-unstyled">
                                             <li><a href="../privacy-policy.php">Privacy Policy</a></li>
                                             <li><a href="../refund-policy.php">Refund Policy</a></li>
                                             <li><a href="../rental-agreement.php">Rental Agreement</a></li>
                                             <li><a href="../terms-conditions.php">Terms & Conditions</a></li>
                                             <li><a href="../faq.php">FAQ's</a></li>
                                          </ul>
                                       </div>

                                       <br>
                                       <h4 class="">Sales</h4>
                                       <div class="footer-list  footer-listt">
                                          <ul class="list-unstyled">
                                             <li>  <a href="mailto:sales@startoonlabs.com"> sales@startoonlabs.com</a></li>
                                             
                                          </ul>
                                       </div>
                                    



                                    </div>
                                    <div class="wd-16 footer-listt">
                                       <h4 class="">Contact Us</h4>
                                       <div class="footer-cntct my-4">
                                          <ul class="media-icon list-unstyled">
                                             
                                             
                                             <li>  <a href="tel:+918790896481"><img src="images/phone.png" style="width: 20px;"> &nbsp +91 8790896481</a></li>
                                             <li>  <a href="tel:+919133925836"><img src="images/phone.png" style="width: 20px;"> &nbsp +91 9133925836</a></li>
                                             <li>  <a href="mailto:contact@startoonlabs.com"><img src="images/letter.png" style="width: 20px;"> &nbsp contactus@startoonlabs.com</a></li>
                                          </ul>
                                          <br>
                                          <div class="social-icons social-colored footer-social">

                                             <h4 class="">Follow Us</h4>
                                             <ul class="list-inline">
                                                <li><a href="https://www.facebook.com/startoon.labs.5" target="_blank"><i class="lab la-facebook-f"></i></a>
                                                </li>
                                                <li><a href="https://twitter.com/startoonlabs" target="_blank"><i class="lab la-twitter"></i></a>
                                                </li>
                                                <li><a href="https://www.youtube.com/channel/UCUAw7jN5tNpbxAWiLTYOi7A" target="_blank"><i class='fa fa-youtube-play'></i></a>
                                                </li>
                                                <li><a href="https://www.linkedin.com/company/startoonlabs/?originalSubdomain=in" target="_blank"><i class="lab la-linkedin-in"></i></a>
                                                </li>
                                                <li><a href="https://www.instagram.com/startoonlabs" target="_blank"><img src="../bookpheezeererefferale/images/icons/instawhite.png" style="height:38px;width:37px;margin-bottom:6px;"/></a>
                                             </ul>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="wd-16">
                                       <h4 class="">Subscribe to Newsletters</h4>
                                       <div class="footer-cntct my-4">
                                          <div class="subscribeForm">
                                             <form>
                                                <input type="text" name="" class="form-control" placeholder="Enter Your Email Address">
                                             </form>
                                          </div>

                                       <br>
                                       <h4 class="">Address</h4>
                                       <div class="footer-list">
                                          <ul class="list-unstyled">
                                             <li><a href="#">Plot No. 10, Near Strawberry Hotel, Sardar Patel Road, Paigah Colony, Secunderabad, Telangana - 500003.</a></li>

                                             

                                             
                                          </ul>
                                       </div>
                                 



                                          <br>
                                          <h4 class="">Make in India</h4>
                                          <div class="footer-cntct my-4">
                                             <div class="makeinIndia">
                                                <img src="images/mii.png">
                                             </div>
                                          </div>
                                          
                                       </div>
                                    </div>
                                    
                                 </div>
                                 <!-- <div class="row">
                                    <div class="wd-16">
                                       <h4 class="">Sales</h4>
                                       <div class="footer-list  footer-listt">
                                          <ul class="list-unstyled">
                                             <li>  <a href="mailto:sales@startoonlabs.com"> sales@startoonlabs.com</a></li>
                                             
                                          </ul>
                                       </div>
                                    </div>
                                    <div class="wd-16">
                                       <h4 class="">Address</h4>
                                       <div class="footer-list">
                                          <ul class="list-unstyled">
                                             <li><a href="#">Plot No. 10, Strawberry Hotel, Sardar Patel Rd, Paigah Colony, Secunderabad, Telangana - 500003.</a></li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div> -->



                                 <hr>
                                 <div class="row">
                                    <div class="col-md-6 col-12">
                                       <div class="copyrightLeft">Copyright © 2022 <a href="index.php" style="color:#F79622 !important;">Startoon Labs</a>. All Rights Reserved</div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                       <!--<div class="copyrightRight">Designed By <a href="https://genesis.in.net" target="_blank" style="color: #F79622 !important;">Genesis</a></u></div>-->
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </footer>
      
                  </div>

                  <!--back-to-top start-->
                  <!-- <div class="scroll-top"><a class="smoothscroll" href="#top"><i class="las la-location-arrow"></i></a></div> -->
                  <!--back-to-top end-->


                  </div>
                  <!-- Back to top button -->
                  <a id="button"><i class="las la-angle-up"></i></a>
                  <!-- Back to top button -->
                  <!-- inject js start -->




            




         
                  <script src="js/theme.js"></script>
           
                  <script src="js/theme-plugin.js"></script>

           
                  <script src="js/theme-script.js"></script>

                  <!--multiple tabs-->
                  <script type="text/javascript" src="js/jquery.multipurpose_tabcontent.js"></script>

                  

                  <!-- GRT Youtube Popup -->
                  <script src="js/grt-youtube-popup.js"></script>

                  <!-- Initialize GRT Youtube Popup plugin -->
                  <script>
                     // Demo video 1
                     $(".youtube-link").grtyoutube({
                        autoPlay:false,
                        theme: "dark"
                     });

                     // Demo video 2
                     $(".youtube-link-dark").grtyoutube({
                        autoPlay:false,
                        theme: "light"
                     });
                  </script>







    <!-- resources-->

              
    <script src="lib/jquery.wordpress.js"></script>

    <script src="dist/skeletabs.js"></script>




                  <script type="text/javascript">

                  $(document).ready(function(){
                  $('input[type="radio"]').click(function(){
                  if($(this).attr("value")=="shoulder"){
                  $(".box").hide();
                  $(".shoulder").show();
                  }
                  if($(this).attr("value")=="wrist"){
                  $(".box").hide();
                  $(".wrist").show();
                  }
                  if($(this).attr("value")=="forearm"){
                  $(".box").hide();
                  $(".forearm").show();
                  }
                  if($(this).attr("value")=="elbow"){
                  $(".box").hide();
                  $(".elbow").show();
                  }
                  if($(this).attr("value")=="spine"){
                  $(".box").hide();
                  $(".spine").show();
                  }
                  if($(this).attr("value")=="hip"){
                  $(".box").hide();
                  $(".hip").show();
                  }
                  if($(this).attr("value")=="knee"){
                  $(".box").hide();
                  $(".knee").show();
                  }
                  if($(this).attr("value")=="ankle"){
                  $(".box").hide();
                  $(".ankle").show();
                  }
                  });
                  });
                  </script>





                  <script type="text/javascript">


                     
                  $(document).ready(function(){
                  $('#headingOne').click(function(){
                  if($(this).attr("value")=="default"){
                  $(".ortho-pic").hide();
                  $(".neurologist-pic").show();
                  $(".physiotherapist-pic").hide();
                  $(".patients-pic").hide();

                  }

                  });
                  $('#headingTwo').click(function(){
                  if($(this).attr("value")=="ortho"){
                  $(".ortho-pic").show();
                  $(".neurologist-pic").hide();
                  $(".physiotherapist-pic").hide();
                  $(".patients-pic").hide();

                  }

                  });
                  $('#headingThree').click(function(){
                  if($(this).attr("value")=="physio"){
                  $(".ortho-pic").hide();
                  $(".neurologist-pic").hide();
                  $(".physiotherapist-pic").show();
                  $(".patients-pic").hide();

                  }

                  });
                  $('#headingFour').click(function(){
                  if($(this).attr("value")=="patient"){
                  $(".ortho-pic").hide();
                  $(".neurologist-pic").hide();
                  $(".physiotherapist-pic").hide();
                  $(".patients-pic").show();
                  }

                  });
                  });
                  $(document).ready(function(){
                  $(".ortho-pic").hide();
                  $(".neurologist-pic").show();
                  $(".physiotherapist-pic").hide();
                  $(".patients-pic").hide();

                  });
                  </script>




                  <script type="text/javascript">
                  var btn = $('#button');
                  $(window).scroll(function() {
                  if ($(window).scrollTop() > 300) {
                  btn.addClass('show');
                  } else {
                  btn.removeClass('show');
                  }
                  });
                  btn.on('click', function(e) {
                  e.preventDefault();
                  $('html, body').animate({scrollTop:0}, '100');
                  });
                  </script>





                  <script>
                     $(".js-video-button").modalVideo({
                     youtube:{
                     controls:1,
                     nocookie: true,
                     autoplay:1
                     }
                  });
                  </script>


                  <!-- resource page-->
                  <script type="text/javascript">
                  $(document).ready(function() {
                  $(".resource_tab").champ();
                  $(".accordion_example").champ({
                  plugin_type: "accordion",
                  side: "left",
                  active_tab: "3",
                  controllers: "true"
                  });
                  $(".second_tab").champ({
                  plugin_type: "tab",
                  side: "right",
                  active_tab: "1",
                  controllers: "false"
                  });
                  $(".third_tab").champ({
                  plugin_type: "tab",
                  side: "",
                  active_tab: "4",
                  controllers: "true",
                  ajax: "true",
                  show_ajax_content_in_tab: "4",
                  content_path: "html.txt"
                  });
                  $(".multipleTab").champ({
                  //plugin_type :  "accordion",
                  multiple_tabs: "true"
                  });
                  });
                  </script>
    <!-- // footer -->

    <script>
        $(document).ready(function(){
             $('#refferal').click(function(){
                $('#discountAmountText').text("M.R.P.:");
                $("#discountAmount").text("59,000/-")
                $('#strikeThroughPrice').addClass('hidden').css("text-decoration", "line-through");
                $('#correctAlert').addClass('hidden');
                $('#incorrectAlert').addClass('hidden');
             })
            
            
            $('#refferal').blur(function(){
                if($(this).val() == "IAPMUM10") {
                    $('#discountAmountText').text("Discount Price:");
                    $("#discountAmount").text("53,100/-")
                    $('#strikeThroughPrice').removeClass('hidden').css("text-decoration", "line-through");
                    $('#correctAlert').removeClass('hidden')
                    console.log($('#defaultPrice').val())
                } else if($(this).val() == "SHABBIR5") {
                    $('#discountAmountText').text("Discount Price:");
                    $("#discountAmount").text("56,050/-")
                    $('#strikeThroughPrice').removeClass('hidden').css("text-decoration", "line-through");
                    $('#correctAlert').removeClass('hidden')
                    console.log($('#defaultPrice').val())
                }else if($(this).val() == "NARKEESH15") {
                    $('#discountAmountText').text("Discount Price:");
                    $("#discountAmount").text("50,150/-")
                    $('#strikeThroughPrice').removeClass('hidden').css("text-decoration", "line-through");
                    $('#correctAlert').removeClass('hidden')
                    console.log($('#defaultPrice').val())
                }else if($(this).val() == "SBND15") {
                    $('#discountAmountText').text("Discount Price:");
                    $("#discountAmount").text("50,150/-")
                    $('#strikeThroughPrice').removeClass('hidden').css("text-decoration", "line-through");
                    $('#correctAlert').removeClass('hidden')
                    console.log($('#defaultPrice').val())
                }else{
                    $('#incorrectAlert').removeClass('hidden')
                }
            })
            
            $('#book_pheezee_form').on('submit', function(e) {
                e.preventDefault();
                var form = $(this).serializeArray();
                var data = {}
                for(var i = 0; i < form.length; i++){
                    data[form[i]['name']] = form[i]['value']
                }
                if (data.refferal == "IAPMUM10") {
                    data.amount = 53100
                } else  if (data.refferal == "SHABBIR5") {
                    data.amount = 56050
                } else if (data.refferal == "NARKEESH15") {
                    data.amount = 50150
                }else if (data.refferal == "SBND15") {
                    data.amount = 50150
                }else {
                    $('#modalForErrorBooking');
                }
                var url = 'https://production.pheezee.com/v1/sales';
                if(data.refferal == "IAPMUM10") {
                    $.ajax({
                      type: "POST",
                      url: url,
                      data: data, // serializes the form's elements.
                      success: function(data)
                      {
                        $('#book_pheezee_form').each(function(){
                            this.reset();
                        })
                        $('#correctAlert').addClass('hidden');
                        $('#modalForBookingPheezee').toggle();
                        
                        $('#discountAmountText').text("M.R.P.:");
                        $("#discountAmount").text("59,000/-")
                        $('#strikeThroughPrice').addClass('hidden').css("text-decoration", "line-through");
                      },
                      error: function(){
                           $('#modalForBookingPheezeeError').toggle();
                       }
                     });
                } else if(data.refferal == "SHABBIR5") {
                    $.ajax({
                      type: "POST",
                      url: url,
                      data: data, // serializes the form's elements.
                      success: function(data)
                      {
                        $('#book_pheezee_form').each(function(){
                            this.reset();
                        })
                        $('#correctAlert').addClass('hidden');
                        $('#modalForBookingPheezee').toggle();
                        
                        $('#discountAmountText').text("M.R.P.:");
                        $("#discountAmount").text("59,000/-")
                        $('#strikeThroughPrice').addClass('hidden').css("text-decoration", "line-through");
                      },
                      error: function(){
                           $('#modalForBookingPheezeeError').toggle();
                       }
                     });
                } else if(data.refferal == "NARKEESH15") {
                    $.ajax({
                      type: "POST",
                      url: url,
                      data: data, // serializes the form's elements.
                      success: function(data)
                      {
                        $('#book_pheezee_form').each(function(){
                            this.reset();
                        })
                        $('#correctAlert').addClass('hidden');
                        $('#modalForBookingPheezee').toggle();
                        
                        $('#discountAmountText').text("M.R.P.:");
                        $("#discountAmount").text("59,000/-")
                        $('#strikeThroughPrice').addClass('hidden').css("text-decoration", "line-through");
                      },
                      error: function(){
                           $('#modalForBookingPheezeeError').toggle();
                       }
                     });
                }else if(data.refferal == "SBND15") {
                    $.ajax({
                      type: "POST",
                      url: url,
                      data: data, // serializes the form's elements.
                      success: function(data)
                      {
                        $('#book_pheezee_form').each(function(){
                            this.reset();
                        })
                        $('#correctAlert').addClass('hidden');
                        $('#modalForBookingPheezee').toggle();
                        
                        $('#discountAmountText').text("M.R.P.:");
                        $("#discountAmount").text("59,000/-")
                        $('#strikeThroughPrice').addClass('hidden').css("text-decoration", "line-through");
                      },
                      error: function(){
                           $('#modalForBookingPheezeeError').toggle();
                       }
                     });
                }
                
                
                else {
                    $('#modalForBookingPheezeeErrorCode').toggle();
                    return false;
                }
            })
            
            $('#close-btn-booking').click(function(){
                $('#modalForBookingPheezee').toggle();
            })
            $('#close-btn-booking-error').click(function(){
                $('#modalForBookingPheezeeError').toggle();
            })
            $('#close-btn-booking-error-code').click(function(){
                $('#modalForBookingPheezeeErrorCode').toggle();
            })
        })
    </script>
</script>
    </body>
</html>