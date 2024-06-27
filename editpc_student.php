<?php
require 'db.php';

$st_id = MYSQLI_REAL_ESCAPE_STRING($con, $_POST ['st_id']);
$st_name = MYSQLI_REAL_ESCAPE_STRING($con, $_POST ['st_name']);
$st_lastname = MYSQLI_REAL_ESCAPE_STRING($con, $_POST ['st_lastname']);
$st_dateborn = MYSQLI_REAL_ESCAPE_STRING($con, $_POST ['st_dateborn']);
$st_address = MYSQLI_REAL_ESCAPE_STRING($con, $_POST ['st_address']);
$st_Ethnicity = MYSQLI_REAL_ESCAPE_STRING($con, $_POST ['st_Ethnicity']);
$gender_id = MYSQLI_REAL_ESCAPE_STRING($con, $_POST ['gender']);
$st_tel = MYSQLI_REAL_ESCAPE_STRING($con, $_POST ['st_tel']);
$Parent = MYSQLI_REAL_ESCAPE_STRING($con, $_POST ['Parent']);
$Par_tel = MYSQLI_REAL_ESCAPE_STRING($con, $_POST ['Par_tel']);
$room_id = MYSQLI_REAL_ESCAPE_STRING($con, $_POST ['room_id']);
$aca = MYSQLI_REAL_ESCAPE_STRING($con, $_POST ['aca_id']);


    $sql = "UPDATE student SET st_name ='$st_name', st_lastname ='$st_lastname', st_dateborn='$st_dateborn', st_address='$st_address', st_Ethnicity='$st_Ethnicity' , gender_id='$gender_id', st_tel='$st_tel', Parent='$Parent', Par_tel='$Par_tel', room_id=$room_id ,aca_id=$aca where st_id = '$st_id'";
// echo $sql;

    MYSQLI_QUERY($con,$sql);    //ສັ່ງໃຫ້ SQL ເຮັດວຽກ
    header('location:student.php');  //ຄຳສັ່ງໃຫ້ກັບຄືນມາໜ້າ index.php ໃນຕອນບັນທຶກແລ້ວ
?>