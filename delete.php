<?php 
 
require_once 'db_connect.php';
 
if($_GET['id']) {
    $id = $_GET['id'];
 
//     $sql = "SELECT * FROM tbl_user WHERE id = {$id}";
//     $result = $connect->query($sql);
//     $data = $result->fetch_assoc();
// echo $sql;
// exit();
    $sql = "DELETE FROM tbl_user WHERE ID =$id";

    
    if($connect->query($sql) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Error " . $sql . ' ' . $connect->connect_error;
    }
    $connect->close();
 
}
 
?>