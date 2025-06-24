
<?php
$host = $_SERVER['HTTP_HOST'];
$root = rtrim(dirname(dirname($_SERVER['SCRIPT_NAME'])), '/\\');
define('BASE_URL', "http://$host$root/");
?>
