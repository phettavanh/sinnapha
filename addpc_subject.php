<?php

require'db.php';

$sub_id = MYSQLI_REAL_ESCAPE_STRING($con,$_POST['sub_id']);
$sub_name = MYSQLI_REAL_ESCAPE_STRING($con,$_POST['sub_name']);


$sql = "INSERT INTO subject VALUES($sub_id,'$sub_name')";


mysqli_query($con,$sql);
echo mysqli_error ($con);
header('location:subject.php');
echo $sql;

?>

