<?php
require 'db.php';

$room_id = MYSQLI_REAL_ESCAPE_STRING($con, $_POST ['room_id']);
$room_name = MYSQLI_REAL_ESCAPE_STRING($con, $_POST ['room_name']);

    $sql = "UPDATE room SET room_id = $room_id, room_name ='$room_name' where room_id = $room_id";
// echo $sql;

    MYSQLI_QUERY($con,$sql);    //ສັ່ງໃຫ້ SQL ເຮັດວຽກ
    header('location:room.php');  //ຄຳສັ່ງໃຫ້ກັບຄືນມາໜ້າ index.php ໃນຕອນບັນທຶກແລ້ວ
?>