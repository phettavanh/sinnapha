<?php
require 'db.php';

$teach_id = MYSQLI_REAL_ESCAPE_STRING($con, $_POST ['id']);
$Teach_name = MYSQLI_REAL_ESCAPE_STRING($con, $_POST ['Teach_name']);
$Teach_lastname = MYSQLI_REAL_ESCAPE_STRING($con, $_POST ['Teach_lastname']);
$Teach_dateborn = MYSQLI_REAL_ESCAPE_STRING($con, $_POST ['Teach_dateborn']);
$gender = MYSQLI_REAL_ESCAPE_STRING($con, $_POST ['gender']);
$Teach_tel = MYSQLI_REAL_ESCAPE_STRING($con, $_POST ['Teach_tel']);
$Teach_address = MYSQLI_REAL_ESCAPE_STRING($con, $_POST ['Teach_address']);
$Teach_degree = MYSQLI_REAL_ESCAPE_STRING($con, $_POST ['Teach_degree']);
$Graduation_from = MYSQLI_REAL_ESCAPE_STRING($con, $_POST ['Graduation_from']);
$Year_finished = MYSQLI_REAL_ESCAPE_STRING($con, $_POST ['Year_finished']);
$department = MYSQLI_REAL_ESCAPE_STRING($con, $_POST ['department']);
$username = MYSQLI_REAL_ESCAPE_STRING($con, $_POST ['username']);
$password = MYSQLI_REAL_ESCAPE_STRING($con, $_POST ['password']);
//$room_photo = MYSQLI_REAL_ESCAPE_STRING($con, $_POST ['room_photo']);

//echo $room_number.$room_type.$room_price.$room_photo;

$size = $_FILES['Teach_img']['size'];
if($size > 0){
    $file = $_FILES['Teach_img'];  //ຮັບຟາຍມາຈາກ input ທີ່ມີຊື່ວ່າ img
    $file_name = $_FILES['Teach_img']['name']; //ຮັບຊື່ເອົາຟາຍຮູບ
    $loc = $_FILES['Teach_img']['tmp_name']; //ຮັບເອົາທີ່ຢູ້່ຂອງຟາຍຮູບ
    $new_loc = "images/".$file_name; //ລະບຸບ່ອນເກັບຟາຍ ພ້ອມກັບຊື່ຟາຍ
    move_uploaded_file($loc,$new_loc);    //ຄຳສັ່ງດຶງຟາຍຮູບຈາກໂຟນເດີ້ທີ່ອັບໂຫລດເຂົ້າມາໃນຄອມ ໃຫ້ເຂົ້າມາໃນໂຟນເດີ້ຮູບ image ໃນໂປແກຮມ
    $sql = "UPDATE teacherdetail SET Teach_name ='$Teach_name', Teach_lastname ='$Teach_lastname', Teach_dateborn='$Teach_dateborn', gender_id='$gender', Teach_tel='$Teach_tel', Teach_address='$Teach_address', Year_finished='$Year_finished', Teach_degree='$Teach_degree', Graduation_from='$Graduation_from', username='$username', password ='$password', Teach_img='$file_name', department='$department' where teach_id = $teach_id";
} else{
    $sql = "UPDATE teacherdetail SET Teach_name ='$Teach_name', Teach_lastname ='$Teach_lastname', Teach_dateborn='$Teach_dateborn', gender_id='$gender', Teach_tel='$Teach_tel', Teach_address='$Teach_address', Year_finished='$Year_finished', Teach_degree='$Teach_degree', Graduation_from='$Graduation_from', username='$username', password ='$password', department='$department' where teach_id = $teach_id";
}

    MYSQLI_QUERY($con,$sql);    //ສັ່ງໃຫ້ SQL ເຮັດວຽກ
    header('location:teacherDetail.php');  //ຄຳສັ່ງໃຫ້ກັບຄືນມາໜ້າ index.php ໃນຕອນບັນທຶກແລ້ວ
?>