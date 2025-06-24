<?php
include_once(__DIR__ . '/../dbcon.php'); 	
include('session.php');
session_destroy();
unset($_SESSION);
header('location: ../index.php'); 
?>