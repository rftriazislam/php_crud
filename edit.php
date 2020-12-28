<?php 
require_once 'db_connect.php'; 
if($_GET['id']) {
    $id = $_GET['id'];
 
    $sql = "SELECT * FROM tbl_user WHERE id = {$id}";
    $result = $connect->query($sql);
 
    $data = $result->fetch_assoc();
 
    $connect->close();
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Crud</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<h1 class="center">Edit</h1>
    <form method="post" action="infoupdate.php" >
		<div class="input-group">
			<label>Name</label>
			<input type="text" name="name" value="<?php echo $data['name'] ?>">
			<input type="hidden" name="user_id" value="<?php echo $data['id'] ?>">

		</div>
		<div class="input-group">
			<label>Phone Number</label>
			<input type="number" name="phone" value="<?php echo $data['phone'] ?>">
        </div>
        <div class="input-group">
			<label>Address</label>
			<input type="text" name="address" value="<?php echo $data['address'] ?>">
		</div>
		<div class="input-group">
			<button class="btn" type="submit" >update</button>
		</div>
	</form> 
	
</body>
</html>
<?php
}
?>