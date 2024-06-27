<?php
require 'db.php';

$id = MYSQLI_REAL_ESCAPE_STRING($con,$_GET['id']);
$sql = "DELETE FROM teacherdetail WHERE teach_id = $id";
MYSQLI_QUERY($con,$sql);
header('location:teacherdetail.php');
?>