<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<!-- The first include should be config.php -->
<?php require_once 'config.php'; ?>

<?php require_once './includes/public_functions.php'; ?>

<!-- Retrieve all posts from database  -->
<?php $posts = getPublishedPosts(); ?>

<?php if (isset($_GET['post-slug'])) {
    $post = getPost($_GET['post-slug']);
} ?>

<?php require_once ROOT_PATH . '/includes/head_section.php'; ?>
<title>Startoon Labs | Blog </title>
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
            <h1>Recent Articles</h1>
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
        <div class="blog-home-individual-post" >
            <div class="row" style="margin-top: 3em;">
                <div class="col-lg-5">
                    <a href="single_post.php?post-slug=<?php echo $post[
                        'slug'
                    ]; ?>" class="post-link">
                        <img src="<?php 
                            echo BASE_URL .
                            'static/images/' .
                            $post['image']; 
                            ?>" 
                            alt="featured-image" ></a>
                </div>
                <div class="col-lg-7 blog-home-post-content">
                    <div>
                        <div class="subtext-header-post">
                            <div>
                                <span class="badge bg-primary blog-home-name-pill">
                                    <?php echo substr($post['author'],0,1); ?>
                                </span>
                                <span class="author-and-time">
                                    <small>
                                        <?php echo $post['author']; ?>
                                    </small><br>
                                    <small>
                                        <?php echo time_elapsed_string(
                                                $post['created_at']); ?>
                                    </small>
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
                        <a href="single_post.php?post-slug=<?php echo $post['slug']; ?>" 
                                    class="post-link">
                            <div class="post_info">
                                <h2 class="blog-home-post-title">
                                    <?php echo $post['title']; ?></h2>
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
        })
    </script>
    
    </body>

</html>