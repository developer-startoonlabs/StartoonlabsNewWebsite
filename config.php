<?php
session_start();

// connect to database
$conn = mysqli_connect("localhost", "starngqi_blog_user", "startoonlabs", "starngqi_blog_database");

if (!$conn) {
    die('Error connecting to database: ' . mysqli_connect_error());
}

define('ROOT_PATH', realpath(dirname(__FILE__)));
define('BASE_URL', 'https://startoonlabs.com/blogs/');

?>