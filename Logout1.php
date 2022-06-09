<?php
session_start();
session_destroy();
header("Location:Lawyer_login.php");
?>