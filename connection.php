<?php
$server = 'localhost';
$user   = 'root';
$password = '';
$dbname = 'spine_demo';
$conn = new mysqli($server,$user,$password,$dbname) or die(mysqli_error($conn));
?>