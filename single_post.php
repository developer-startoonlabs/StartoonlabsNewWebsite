<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<?php include 'config.php'; ?>
<?php include 'includes/public_functions.php'; ?>
<?php if (isset($_GET['post-slug'])) {
    $post = getPost($_GET['post-slug']);
} ?>
<?php $posts = getPublishedPosts(); ?>
<?php updateViews($_GET['post-slug']); ?>
<?php $keywords = explode(',', $post['keywords']) ?>
<?php $comments = getCommentsByPostId($post['id']) ?>




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
                     
                     <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>


    <!-- resources-->


      <!-- GRT Youtube Plugin CSS -->
      <link rel="stylesheet" href="css/grt-youtube-popup.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      
      <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>  
      
      <!--<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">                    -->
                                              
      
 <style>

.share-links i{
    color: #097EC1;
    font-size: 1em;
    margin-right: 1rem;
}

.share-links a {
    text-decoration: none;
    color: #097EC1;
    padding: .5em 1em;
    border: 1px solid #097EC1;
    border-radius: 50px;
    margin-right: 1em;
    font-weight: bold;
}

.share-links a:hover, .share-links a:active, .share-links a:hover i, .share-links a:focus i{
    text-decoration: none;
    color: #ffffff;
    background-color: #097EC1;
    
}
.blog-home-post-content .post-footer {
    display: flex; 
    border-top: 1px solid #00000044; 
    margin-top: 1rem; 
    padding-top: .5rem;
}

.blog-home-post-content .post-footer small {
    font-size: 1em; 
    font-weight: bold;
}

.blog-home-post-content .post-footer > small {
    margin-right: 1rem;
}
.post-footer {
    display: flex;
    justify-content: space-between;
}

.post-footer .text-muted.like:hover {
    color: #f77e0b;
    cursor: pointer;
}
 </style>

   </head>
   <body>
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
               <li><a href="https://www.instagram.com/startoonlabs" target="_blank"><img src="../blogs/images/icons/instagrey.png" style="height:23px;width:23px;"/></a>
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
         </div> <a class="btn btn-theme btn-sm d-none d-md-inline-block" href="request-demo.php"><span>Request Demo</span></a>
         </div>
         </nav>
         </div>
         </div>
         </div>
         </div>
         </header>

<meta property="og:url" content="https://startoonlabs.com/blogs/single_post.php?post-slug=<?php echo $post['slug']; ?>" />
<meta property="og:title" content="<?php echo $post['title']; ?>" />
<meta property="og:description" content="<?php echo $post['abstract']; ?>" />
<meta property="og:image" content="https://startoonlabs.com/blogs/static/images/<?php echo $post['image']; ?>" />

<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@startoonlabs">
<meta name="twitter:creator" content="@startoonlabs">
<meta name="twitter:title" content="<?php echo $post['title']; ?>" />
<meta name="twitter:description" content="<?php echo $post['abstract']; ?>" />
<meta name="twitter:image" content="https://startoonlabs.com/blogs/static/images/<?php echo $post['image']; ?>">


<title> <?php echo $post['title']; ?> | Startoon Labs</title>
</head>

<body>
   

    <div class="container single-post" style="padding-left:80px">
        <div class="row" style="margin-top: 7em">
            <div class="col-lg-9">
                <div class="subtext-header-post">
                    <div>
                        <span class="badge bg-primary single-post-name-pill">
                            <?php echo substr($post['author'],0,1); ?>
                        </span>
                        <span class="author-and-time">
                            <small>
                                <?php echo $post['author']; ?>
                            </small><br>
                            <small>
                                <?php echo time_elapsed_string(  $post['created_at']); ?>
                            </small>
                        </span>
                    </div>
                    <div class="btn-group share-menu">
                        <!--<i class="fas fa-ellipsis-v dropdown" data-toggle="dropdown" aria-expanded="false" style="font-size: 1.5rem"></i>-->
                        <ul class="dropdown-menu dropdown-menu-right" role="menu">
                            <li><a href="https://www.facebook.com/sharer/sharer.php?u=https://startoonlabs.com/blogs/single_post.php?post-slug=<?php echo $post['slug']; ?>&t=<?php echo $post['title'] ?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Facebook" class="fb-link">Share on Facebook</a></li>
                            <li><a href="https://twitter.com/share?url=https://startoonlabs.com/blogs/single_post.php?post-slug=<?php echo $post['slug']; ?>&text=<?php echo $post['title'] ?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Twitter" class="twitter-link">Share on Twitter</a></li>
                            <li><a href="https://www.linkedin.com/shareArticle?mini=true&url=https://startoonlabs.com/blogs/single_post.php?post-slug=<?php echo $post['slug']; ?>&t=<?php echo $post['title'] ?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Linkedin" class="linkedin-link">Share on Linkedin</a></li>
                        </ul>
                    </div>
                    
                    
                </div>
                <div>
                <div class="full-post-div">
                    <h2 class="single-post-title my-4">
                        <?php echo $post['title']; ?>
                    </h2>
                    
                    <img src="<?php echo BASE_URL .
                        'static/images/' .
                        $post['image']; ?>" 
                        class="text-center" 
                        alt="featured-text" 
                        style="width: 100%">
                </div>
                <div>
                        <?php echo html_entity_decode($post['body']); ?>
                    </div>
                    </div>
                
                
                <nav class="nav">
                    <div class="share-links">
                    <a class="nav-link" href="https://www.facebook.com/sharer/sharer.php?u=https://startoonlabs.com/blogs/single_post.php?post-slug=<?php echo $post['slug']; ?>&t=<?php echo $post['title'] ?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Facebook"><i class='fa fa-facebook'></i>Share on facebook</a>
                    </div>
                    
                    <div class="share-links">
                    <a class="nav-link" href="https://twitter.com/share?url=https://startoonlabs.com/blogs/single_post.php?post-slug=<?php echo $post['slug']; ?>&text=<?php echo $post['title'] ?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Twitter"><i class='fa fa-twitter'></i>Share on twitter</a>
                    </div>
                    <div class="share-links">
                    <a href="https://www.linkedin.com/shareArticle?mini=true&url=https://startoonlabs.com/blogs/single_post.php?post-slug=<?php echo $post['slug']; ?>&t=<?php echo $post['title'] ?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Linkedin" class="nav-link"><i class='fa fa-linkedin'></i>Share on linkedin</a>
                    </div>
                </nav>
                

                <hr style="margin-bottom: 10px">
                
                <!--<div class="d-flex flex-row fs-12">-->
                <!--    <div>-->
                <!--        <div class="like p-2 cursor"><b><?php echo $post['views'] ?></b>&nbsp<i class="far fa-eye"></i><span class="ml-1"></span></div>-->
                <!--        <div class="like p-2 cursor"><b><?php echo  getCommentsCountByPostId($post['id']) ?></b>&nbsp<i class="far fa-comment-alt"></i><span class="ml-1"></span></div>-->
                <!--        </div>-->
                <!--        <div class="like p-2 cursor"><b><?php echo $post['likes'] ?></b>&nbsp<i class="far fa-thumbs-up"></i><span class="ml-1"></span></div>-->
                <!--    </div>-->
                    
                    <div class="post-footer" style="margin-bottom: 2em;">
                    <div class="text-muted">
                       <span style="margin-right: .8em"><i class='fa fa-eye'></i>&nbsp;<b style="color:#454545"><?php echo $post['views'] ?></b></span>
                       <span style="margin-right: 1em font-weight: bold;"><i class='fa fa-comment-o'></i>&nbsp;<b style="color:#454545"><?php echo  getCommentsCountByPostId($post['id']) ?></b></span>
                    </div>
                    <div class="text-muted like" data-id="post-24"><i class='fa fa-thumbs-o-up'></i> <b style="color:#454545"><?php echo $post['likes'] ?></b> </div>
                </div>
                
                
                
                
            </div>
          <!--  <div class="col-lg-3">-->
          <!--      <ul style="padding-left: 0">-->
          <!--          <?php foreach ($keywords as $keyword): ?>-->
          <!--          <li class="nav-item btn btn-outline-secondary topic-buttons">-->
    						<!--<a -->
    						<!--	href="<?php echo BASE_URL . 'filtered_posts.php?topic=' . $keyword ?>">-->
    						<!--	<?php echo $keyword ?>-->
    						<!--</a> -->
          <!--              </li>-->
          <!--        <?php endforeach ?>-->
          <!--      </ul>-->
          <!--  </div>-->

        </div>

        <div class="recent-article-single-post mt-4"
            style="display: flex; justify-content: space-between; align-items: center">
            <h2 style="color: #097EC1; font-weight: bold;">Recent Articles</h2>
            <a href="../resources.php">See All</a>
        </div>
        <div class="row" style="margin-bottom: 2em">
            <?php foreach (array_slice($posts, 0, 3) as $singlepost): ?>
            <div class="col-lg-4">
                <a href="single_post.php?post-slug=<?php echo $singlepost[
                    'slug'
                ]; ?>" class="post-link">
                    <div class="my-3">
                        <img src="<?php echo BASE_URL .
                            'static/images/' .
                            $singlepost[
                                'image'
                            ]; ?>" class="img-fluid" alt="..." style="height: 250px; width: 100%">
                        <div class="card-body">
                            <div class="post_info" style="font-size:1rem">
                                <h5 class="recent-article-single-post-title" style="font-size: 1rem;">
                                <?php 
                                if (strlen($singlepost['title']) > 35 ){ echo substr($singlepost['title'],0,35) . "...";} 
                                else { echo substr($singlepost['title'],0,30);} ?></h5>
                            </div>
                            
                        </div>
                    </div>
                </a>
                <hr style="margin-top: 5px; margin-bottom: 5px;">
                <div class="post-footer" style="margin-bottom: 1em;">
                    <div>
                        <small class="text-muted" style="margin-right: 1em">
                           <i class='fa fa-eye'></i>&nbsp <b style="color:#454545"><?php echo $singlepost['views'] ?> </b></small>
                        <small class="text-muted">
                           <i class='fa fa-comment-o'></i>&nbsp <b style="color:#454545"><?php echo  getCommentsCountByPostId($singlepost['id']) ?> </b></small>
                    </div>
                    <small class="text-muted like"  data-id="post-<?php echo $singlepost['id'] ?>"><i class='fa fa-thumbs-o-up'></i><b style="color:#454545"><?php echo $singlepost['likes'] ?></b> </small>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        
        <div class="row" style="margin-top: 2em; margin-bottom: 3em;">
            
            <div class="col-lg-9">
                <form class="clearfix" action="./includes/public_functions.php" method="post" id="comment_form">
    				<h4>Post a comment:</h4>
    				<input class="input-field form-control" style="margin-bottom: 1em"
                                type="text" name="name" id="name" placeholder="Name" />
    				<textarea name="comment_text" id="comment_text" class="form-control" cols="30" rows="3" style="margin-bottom: 1em"></textarea>
    				<!--</div> <a class="btn btn-theme btn-sm d-none d-md-inline-block" href="request-demo.php"><span>Request Demo</span></a>-->
    				<!--<a class=""-->
    				<button class="btn btn-theme btn-sm d-none d-md-inline-block" id="submit_comment">Submit comment</button>
    			</form>
    			
                <!-- Display total number of comments on this post  -->
    			<h6 style="font-weight: bold;margin-top:10px"><span id="comments_count"><?php echo getCommentsCountByPostId($post['id']) ?></span> Comment</h6>
    			<hr style="border:2px solid black">
    			<!-- comments wrapper -->
    			<div id="comments-wrapper">
    			    <?php if (getCommentsCountByPostId($post['id']) > 0): ?>
    			    <?php foreach ($comments as $comment): ?>
    				<div class="comment clearfix">
    						<!--<img src="profile.png" alt="" class="profile_pic">-->
    						<div class="comment-details">
    						    <div>
    							<span style="font-weight:bold" class="comment-name"><?php echo $comment['posted_by'] ?></span>
    							</div>
    							<span class="comment-date"><p style="font-size:13px"><?php echo date("F j, Y ", strtotime($comment["created_at"])); ?></p></span>
    							<p><?php echo $comment['comment'] ?></p>
    							<a class="reply-btn" href="#" data-id="<?php echo $comment['id']; ?>" id="myDIV"><i  class='fa fa-reply'></i>Reply</a>
    						</div>
    						<!-- reply form -->
        					<form action="./includes/public_functions.php" class="reply_form clearfix" style="margin-top:3px;display:none" id="comment_reply_form_<?php echo $comment['id'] ?>" data-id="<?php echo $comment['id']; ?>">
        					    <input class="input-field form-control" style="margin-bottom: 1rem"
                                type="text" name="name" id="name" placeholder="Name" />
        						<textarea class="form-control" style="margin-bottom: 1rem" name="reply_text" id="reply_text" cols="30" rows="2"></textarea>
        						<button class="btn btn-theme btn-sm d-none d-md-inline-block pull-right submit-reply">Submit reply</button>
        					</form>
        					<hr style="margin-top: 10px; margin-bottom: 10px;">
    						<div>
    							<?php $replies = getRepliesByCommentId($comment['id']) ?>
            					<div class="replies_wrapper_<?php echo $comment['id']; ?>">
            						<?php if (isset($replies)): ?>
            							<?php foreach ($replies as $reply): ?>
            								<!-- reply -->
            								<div class="comment reply clearfix">
            								<div class="comment-details">
            									<span class="comment-name"><?php echo $reply['replied_by'] ?></span>
            									<span class="comment-date"><?php echo date("F j, Y ", strtotime($reply["replied_at"])); ?></span>
            									<p><?php echo $reply['body']; ?></p>
            									<!--<a class="reply-btn" href="#">reply</a>-->
            									</div>
            								</div>
            							<?php endforeach ?>
            						<?php endif ?>
            					</div>
    						</div>
    					</div>
    					<?php endforeach ?>
    				<?php else: ?>
        				<h5 style="font-weight: bold">Be the first to comment on this post</h5>
        			<?php endif ?>
    			</div>
    			<!-- // comments wrapper -->
    		</div>
            
        </div>
    </div>
    <!-- // content -->
    
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
                                             <li><a href="pheezee.php">Pheezee</a></li>
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
                                                <li><a href="https://www.instagram.com/startoonlabs" target="_blank"><img src="../blogs/images/icons/instawhite.png" style="height:38px;width:37px;margin-bottom:6px;"/></a>
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



<script>
function myFunction() {
  var x = document.getElementById("myDIV");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}

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

   
    
    <script>
        $(document).ready(function(){
    		// when the user clicks on like
    		var post_id = <?php echo $post['id'] ?>;
    		
    		
    		$('.like').on('click', function(e){
    		    e.preventDefault();
    		    var postid = $(this).data('id').split('-')[1];
    		    var $post = $(this);
    		    
    		    $.ajax({
    		        url: './includes/public_functions.php',
    		        type: 'post',
    		        data: {
    		            'updateLikes': '1',
    		            'likes': 1,
    		            'postid': postid
    		        },
    		        success: function(response) {
    		          $post.html('<i class="far fa-thumbs-up"></i> ' + response);
    		        }
    		    })
    		})
    		
    		// When user clicks on submit comment to add comment under post
        	$(document).on('click', '#submit_comment', function(e) {
        		e.preventDefault();
        		var comment_text = $('#comment_text').val();
        		var name = $("#name").val();
        		var url = $('#comment_form').attr('action');
        		// Stop executing if not value is entered
        		console.log(post_id);
        		if (comment_text === "" ) return;
        		$.ajax({
        			url: url,
        			type: "POST",
        			data: {
        				comment_text: comment_text,
        				comment_posted: 1,
        				postid: post_id,
        				name: name
        			},
        			success: function(data){
        				var response = JSON.parse(data);
        				console.log(response)
        				if (data === "error") {
        					alert('There was an error adding comment. Please try again');
        				} else {
        					$('#comments-wrapper').prepend(response.comment)
        					$('#comments_count').text(response.comments_count); 
        					$('#comment_text').val('');
        					$('#name').val('');
        				}
        			}
        		});
        	});
        	
        	
        	// When user clicks on submit reply to add reply under comment
        	$(document).on('click', '.reply-btn', function(e){
        		e.preventDefault();
        		// Get the comment id from the reply button's data-id attribute
        		var comment_id = $(this).data('id');
        		// show/hide the appropriate reply form (from the reply-btn (this), go to the parent element (comment-details)
        		// and then its siblings which is a form element with id comment_reply_form_ + comment_id)
        		
        		$(this).parent().siblings('form#comment_reply_form_' + comment_id).toggle(500);
        		$(document).on('click', '.submit-reply', function(e){
        			e.preventDefault();
        			var reply_name = $(this).siblings('input'); // reply textarea element
        			var reply_name_text = $(this).siblings('input').val();
        			// elements
        			var reply_textarea = $(this).siblings('textarea'); // reply textarea element
        			var reply_text = $(this).siblings('textarea').val();
        			var url = $(this).parent().attr('action');
        			
        			$.ajax({
        				url: url,
        				type: "POST",
        				data: {
        					comment_id: comment_id,
        					reply_name: reply_name_text,
        					reply_text: reply_text,
        					reply_posted: 1
        				},
        				success: function(data){
        					if (data === "error") {
        						alert('There was an error adding reply. Please try again');
        					} else {
        						$('.replies_wrapper_' + comment_id).append(data);
        						reply_textarea.val('');
        						reply_name.val('');
        					}
        				}
        			});
        		});
        	});
        	
        	
        })
    </script>
    
    
    </body>

</html>