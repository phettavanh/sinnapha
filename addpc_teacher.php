<?php

require'db.php';

$Teach_name = MYSQLI_REAL_ESCAPE_STRING($con,$_POST['Teach_name']);
$Teach_lastname = MYSQLI_REAL_ESCAPE_STRING($con,$_POST['Teach_lastname']);
$Teach_dateborn = MYSQLI_REAL_ESCAPE_STRING($con,$_POST['Teach_dateborn']);
$gender = MYSQLI_REAL_ESCAPE_STRING($con,$_POST['gender']);
$Teach_tel = MYSQLI_REAL_ESCAPE_STRING($con,$_POST['Teach_tel']);
$Teach_address = MYSQLI_REAL_ESCAPE_STRING($con,$_POST['Teach_address']);
$Year_finished = MYSQLI_REAL_ESCAPE_STRING($con,$_POST['Year_finished']);
$Teach_degree = MYSQLI_REAL_ESCAPE_STRING($con,$_POST['Teach_degree']);
$Graduation_from = MYSQLI_REAL_ESCAPE_STRING($con,$_POST['Graduation_from']);
$username = MYSQLI_REAL_ESCAPE_STRING($con,$_POST['username']);
$password = MYSQLI_REAL_ESCAPE_STRING($con,$_POST['password']);
$department = MYSQLI_REAL_ESCAPE_STRING($con,$_POST['department']);

$file = $_FILES['Teach_img'];   //ຮັບຟາຍມາຈາກ input ທີ່ມີຊື່ວ່າimg
$file_name = $_FILES['Teach_img']['name'];   // ຮັບເອົາຊື່ຂອງຟາຍຮູບ
$loc = $_FILES['Teach_img']['tmp_name'];   //ຮັບເອົາທີ່ຢູ່ຂອງຟາຍຮູບ
$new_loc = "images/".$file_name;  //ລະບຸບ່ອນເກັບຟາຍ ພ້ອມກັບຊື່ຟາຍ

$sql = "INSERT INTO teacherDetail VALUES('','$Teach_name','$Teach_lastname','$Teach_dateborn','$gender',$Teach_tel,'$Teach_address','$Year_finished', '$Teach_degree','$Graduation_from', '$username', '$password', '$file_name', '$department')";

mysqli_query($con,$sql);
header('location:teacherDetail.php');
//echo $sql;

?>

