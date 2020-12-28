<?php require_once 'db_connect.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Crud</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1 class="center">Create Read Update Delete </h1>
    <form method="post" action="infosave.php" >
		<div class="input-group">
			<label>Name</label>
			<input type="text" name="name" value="">
		</div>
		<div class="input-group">
			<label>Phone Number</label>
			<input type="number" name="phone" value="">
        </div>
        <div class="input-group">
			<label>Address</label>
			<input type="text" name="address" value="">
		</div>
		<div class="input-group">
			<button class="btn" type="submit" name="save" >Save</button>
		</div>
	</form> 
	<table>
	<thead>
		<tr>
			<th>Name</th>
			<th>Address</th>
			<th colspan="2">Action</th>
		</tr>
	</thead>
	
	<?php
            $sql = "SELECT * FROM tbl_user WHERE active = 1";
            $result = $connect->query($sql);
 
            if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                  
                  
                    echo "<tr>
                        <td>".$row['name']."</td>
                        <td>".$row['phone']."</td>
                        <td>".$row['address']."</td>
                        <td>
                            <a href='edit.php?id=".$row['id']."'><button class='btn'  type='button'>Edit</button></a>
                            <a href='delete.php?id=".$row['id']."'><button class='btn color'  type='button'>Remove</button></a>
                        </td>
                    </tr>";



                }
            } else {
                echo "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
            }
            ?>
	
</table>
</body>
</html>