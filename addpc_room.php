<?php

require'db.php';

$room_id = MYSQLI_REAL_ESCAPE_STRING($con,$_POST['room_id']);
$room_name = MYSQLI_REAL_ESCAPE_STRING($con,$_POST['room_name']);


$sql = "INSERT INTO room VALUES($room_id,'$room_name')";


mysqli_query($con,$sql);
echo mysqli_error ($con);
header('location:room.php');
echo $sql;

?>

