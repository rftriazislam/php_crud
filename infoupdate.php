<?php 
	require_once 'db_connect.php';
	if($_POST) {
        $id=$_POST['user_id'];
		$name = $_POST['name'];
		$phone = $_POST['phone'];
		$address = $_POST['address'];
		
	 
		$sql = "UPDATE tbl_user SET name = '$name', phone= '$phone', address = '$address' WHERE id = {$id}";
		
		if($connect->query($sql) === TRUE) {
			header("Location: index.php");
		} else {
			echo "Error " . $sql . ' ' . $connect->connect_error;
		}
	 
		$connect->close();
	}
	 
	?>
