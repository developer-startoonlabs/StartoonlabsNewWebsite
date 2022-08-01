<?php
	$name = $_POST['name'];
	$phonenumber = $_POST['phonenumber'];
	$email = $_POST['email'];
// 	$education = $_POST['education'];
// 	$gender = $_POST['gender'];
	
	echo $name;
	echo $phonenumber;
	echo $email;

	// Database connection
	$host= "localhost";
    $username= "starngqi_careers";
    $password = "Careers@123";

    $db_name = "starngqi_careers";

    $conn = mysqli_connect($host, $username, $password, $db_name);
    
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = ("INSERT INTO `sample`(`name`, `phonenumber`, `email`) VALUES ($name,$phonenumber,$email)");
		echo "Registration successfully...";
	
	}
?>