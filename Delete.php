<?php
include '../conn.php';
$Client_name=$_GET['Client_name'];
$query_del="delete from client where Client_name='$Client_name' ";
mysqli_query($conn,$query_del);
header("Location:Client.php");  
?>