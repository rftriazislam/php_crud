<?php 
	require_once 'db_connect.php';
	if($_POST) {
		$name = $_POST['name'];
		$phone = $_POST['phone'];
		$address = $_POST['address'];
		
	 
		$sql = "INSERT INTO tbl_user ( name , phone, address) VALUES ('$name', '$phone', '$address')";
		
		if($connect->query($sql) === TRUE) {
			header("Location: index.php");
		} else {
			echo "Error " . $sql . ' ' . $connect->connect_error;
		}
	 
		$connect->close();
	}
	 
	?>
