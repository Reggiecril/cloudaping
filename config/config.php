<?php
$config['base_url']='localhost';
//Database
$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'cloudaping';
$connection = mysqli_connect($hostname, $username, $password, $database) or exit("Unable to connect to database!");
?>