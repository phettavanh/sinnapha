<?php

require'db.php';


$st_id = MYSQLI_REAL_ESCAPE_STRING($con,$_POST['st_id']);
$st_name = MYSQLI_REAL_ESCAPE_STRING($con,$_POST['st_name']);
$st_lastname = MYSQLI_REAL_ESCAPE_STRING($con,$_POST['st_lastname']);
$st_dateborn= MYSQLI_REAL_ESCAPE_STRING($con,$_POST['st_dateborn']);
$st_address = MYSQLI_REAL_ESCAPE_STRING($con,$_POST['st_address']);
$st_Ethnicity = MYSQLI_REAL_ESCAPE_STRING($con,$_POST['st_Ethnicity']);
$gender_id = MYSQLI_REAL_ESCAPE_STRING($con,$_POST['gender_id']);
$st_tel = MYSQLI_REAL_ESCAPE_STRING($con,$_POST['st_tel']);
$Parent = MYSQLI_REAL_ESCAPE_STRING($con,$_POST['Parent']);
$Par_tel = MYSQLI_REAL_ESCAPE_STRING($con,$_POST['Par_tel']);
$room_id= MYSQLI_REAL_ESCAPE_STRING($con,$_POST['room_id']);
$aca_id= MYSQLI_REAL_ESCAPE_STRING($con,$_POST['aca_id']);

$sql = "INSERT INTO student VALUES(
'$st_id','$st_name','$st_lastname','$st_dateborn','$st_address','$st_Ethnicity','$gender_id','$st_tel','$Parent','$Par_tel', $room_id, $aca_id)";


mysqli_query($con,$sql);
echo mysqli_error ($con);
header('location:student.php');
//echo $sql;











































































?>

