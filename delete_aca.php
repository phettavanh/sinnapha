<?php
require 'db.php';

$id = MYSQLI_REAL_ESCAPE_STRING($con,$_GET['id']);
$sql = "DELETE FROM academic WHERE aca_id = '$id'";
MYSQLI_QUERY($con,$sql);
header('location:academic.php');
?>