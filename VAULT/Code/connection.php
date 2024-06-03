<?php 
	session_start();
	$db = mysqli_connect('localhost', 'unjkfpchwrdza', 'iam@4tuples', 'dbeh6dkwqs9jn8');

	// initialize form variables
	$countryCode = "";
    $phoneNumber = "";
    $country = "";
	$id = 0;
    $update = false;
    

    //Create Operation

	if (isset($_POST['save'])) {
		$countryCode = $_POST['countryCode'];
        $phoneNumber = $_POST['phoneNumber'];
        $country = $_POST['country'];

        mysqli_query($db, "INSERT INTO users (countryCode, phoneNumber, country) VALUES ('$countryCode', '$phoneNumber', '$country')"); 
        $_SESSION['message'] = "Thank You for subscribing. We will notify you as soon as the app goes live."; 
        header('location: ./');
        exit();
	}