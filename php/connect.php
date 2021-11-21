<?php

	$name = $_POST['name'];
	$email = $_POST['email'];
	$phoneNumber = $_POST['phoneNumber'];
	$message = $_POST['message'];


	// Database connection
	$conn = new mysqli('localhost','root','','sparks');

   
        if($conn->connect_error)
        {
            echo "$conn->connect_error";
            die("Connection Failed : ". $conn->connect_error);
        } 
        else 
        {
            $stmt = $conn->prepare("INSERT INTO contactUs(name, email, phoneNumber, message) VALUES(?, ?, ?, ?)");
            $stmt->bind_param("ssis", $name, $email, $phoneNumber, $message);
            $execval = $stmt->execute();

            function alert($msg) {
                echo "<script type='text/javascript'>alert('$msg');</script>";
            }
            alert("Message Submitted Successfully!");
        
            $stmt->close();
            $conn->close();
        }

?>