<?php
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$email = $_POST['EMAIL'];
    $country = $_POST['country'];
	$number = $_POST['number'];
    $message = $_POST['message'];
 	// Database connection
	$conn = new mysqli('localhost','root','','we save animals');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into contact(firstName, lastName,EMAIL,number,country,message) values(?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sssiss", $firstName, $lastName,$email, $number,$country,$message);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>