<?php
include '../conn.php';
$Appointment_id=$_GET['Appointment_id'];
$query_delete="delete from appointment where Appointment_id='$Appointment_id' ";
mysqli_query($conn,$query_delete);
header("Location:Appointment.php");  
?>