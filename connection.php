<?php
$server = 'localhost';
$user   = 'tkinfote_myclinic';
$password = 'Soulsoft@1987';
$dbname = 'tkinfote_myclinic';
$conn = new mysqli($server,$user,$password,$dbname) or die(mysqli_error($conn));
?>