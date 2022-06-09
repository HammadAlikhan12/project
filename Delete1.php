<?php
include '../conn.php';
$Lawyer_name=$_GET['Lawyer_name'];
$query_delete="delete from lawyer where Lawyer_name='$Lawyer_name' ";
mysqli_query($conn,$query_delete);
header("Location:Lawyer.php");  
?>