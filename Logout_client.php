<?php
session_start();
session_destroy();
header("Location:Client_login.php");
?>