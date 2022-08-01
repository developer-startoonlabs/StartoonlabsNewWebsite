<?php include('config.php'); ?>
<?php include('includes/public_functions.php'); ?>
<?php include('includes/head_section.php'); ?>
<?php 
	// Get posts under a particular topic
	if (isset($_GET['topic'])) {
		$topic_id = $_GET['topic'];
		$posts = getPublishedPostsByTopic($topic_id);
	}
?>
	<title>Startoon Labs | Blog on <?php echo $topic_id; ?></title>
</head>
<body>
    <!-- navbar -->
    <?php include ROOT_PATH . '/includes/navbar.php'; ?>
    <!-- // navbar -->

    <!-- // banner -->
    <?php include ROOT_PATH . '/includes/banner.php'; ?>

    <!-- Page content -->
    <div class="container">
        <div class="blog-home-page-head">
            <h1>Articles on <?php echo $topic_id; ?></h1>
            <ul class="nav justify-content-end">
                <li class="nav-item btn btn-outline-secondary topic-buttons">
    				<a href="<?php echo BASE_URL . 'filtered_posts.php?topic=' . 'Engineering' ?>">
    							Engineering
    				</a> 
                </li>
                <li class="nav-item btn btn-outline-secondary topic-buttons">
    				<a href="<?php echo BASE_URL . 'filtered_posts.php?topic=' . 'Physiotherapy' ?>">
    							Physiotherapy
    				</a> 
                </li>
                <li class="nav-item btn btn-outline-secondary topic-buttons">
    				<a href="<?php echo BASE_URL . 'filtered_posts.php?topic=' . 'Covid19' ?>">
    							Covid19
    				</a> 
                </li>
                <li class="nav-item btn btn-outline-secondary topic-buttons">
    				<a href="<?php echo BASE_URL . 'filtered_posts.php?topic=' . 'Health' ?>">
    							Health
    				</a> 
                </li>
                <li class="nav-item btn btn-outline-secondary topic-buttons">
    				<a href="<?php echo BASE_URL . 'filtered_posts.php?topic=' . 'Rehabilitation' ?>">
    							Rehabilitation
    				</a> 
                </li>
            </ul>
        </div>
        <hr style="margin-top: 5px; margin-bottom: 5px;">
        <?php foreach ($posts as $post): ?>
        <div class="blog-home-individual-post mb-5">
            <div class="row g-0" style="margin-top: 3em;">
                <div class="col-lg-5">
                    <a href="single_post.php?post-slug=<?php echo $post[
                        'slug'
                    ]; ?>" class="post-link">
                        <img src="<?php echo BASE_URL .
                            'static/images/' .
                            $post[
                                'image'
                            ]; ?>" class="img-fluid featured-post-image" alt="" style="width: 100%"></a>
                </div>
                <div class="col-lg-7 blog-home-post-content px-4"
                    style="display:flex; flex-direction: column; justify-content: space-between;">
                    <div class="">
                        <div class="subtext-header-post my-3"
                            style="display:flex; justify-content: space-between; align-items: center">
                            <div style="display:flex; align-items: center; font-size: 1rem">
                                <span class="badge rounded-pill bg-primary blog-home-name-pill me-3"
                                    style="display:flex; justify-content: center; align-items: center ; font-size: 1em"><?php echo substr(
                                        $post['author'],
                                        0,
                                        1
                                    ); ?>
                                </span>
                                <span class="author-and-time">
                                    <small class="fw-bold"><?php echo $post[
                                        'author'
                                    ]; ?></small><br>
                                    <small class="fw-bold"><?php echo time_elapsed_string(
                                        $post['created_at']
                                    ); ?></small>

                                </span>
                            </div>
                            <div class="btn-group share-menu">
                                <i class="fas fa-ellipsis-v dropdown" data-toggle="dropdown" aria-expanded="false" style="font-size: 1.5rem"></i>
                                <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                    <li><a href="https://www.facebook.com/sharer/sharer.php?u=https://startoonlabs.com/blogs/single_post.php?post-slug=<?php echo $post['slug']; ?>&t=<?php echo $post['title'] ?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Facebook" class="fb-link"><i class="fab fa-facebook-f"></i>Share on Facebook</a></li>
                                    
                                    
                                    <li><a href="https://twitter.com/share?url=https://startoonlabs.com/blogs/single_post.php?post-slug=<?php echo $post['slug']; ?>&text=<?php echo $post['title'] ?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Twitter" class="twitter-link"><i class="fab fa-twitter"></i>Share on Twitter</a></li>
                                    
                                    
                                    <li><a href="https://www.linkedin.com/shareArticle?mini=true&url=https://startoonlabs.com/blogs/single_post.php?post-slug=<?php echo $post['slug']; ?>&t=<?php echo $post['title'] ?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Linkedin" class="linkedin-link"><i class="fab fa-linkedin-in"></i>Share on Linkedin</a></li>
                                </ul>
                            </div>
                        </div>
                        <a href="single_post.php?post-slug=<?php echo $post[
                            'slug'
                        ]; ?>" class="post-link">
                            <div class="post_info">
                                <h2 class="blog-home-post-title"><?php echo $post[
                                    'title'
                                ]; ?></h2>
                                <div class="blog-home-post-info">
                                    <?php echo $post['abstract']; ?>...
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="post-footer">
                        <div>
                            <small class="text-muted" style="margin-right: 1em">
                               <i class="far fa-eye"></i>&nbsp <?php echo $post['views'] ?> </small>
                            <small class="text-muted">
                               <i class="far fa-comment-alt"></i>&nbsp <?php echo  getCommentsCountByPostId($post['id']) ?> </small>
                        </div>
                        <small class="text-muted like" data-id="post-<?php echo $post['id'] ?>"><i class="far fa-thumbs-up"></i> <?php echo $post['likes'] ?> </small>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>

    </div>
    </div>

    <!-- footer -->
    <?php include ROOT_PATH . '/includes/footer.php'; ?>
    <!-- // footer -->
    
    <script>
        $(document).ready(function(){
    		// when the user clicks on like
    		$('.like').on('click', function(){
    		    
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
    		          
    		          console.log(response);
    		        }
    		    })
    		})
    		
    		//console.log((window.location.href).split('=')[1])
    		
    		var tagsList = $('.topic-buttons');
    		
    		tagsList.each(function(i, e) {
    		    if(($(this).text().trim()) === (window.location.href).split('=')[1]) {
    		        $(this).css("background-color", "#f77e0b");
    		        $(this).children().css("color", "#ffffff");
    		    }
    		})
        })
    </script>
    
    </body>

</html>