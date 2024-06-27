<?php
require 'db.php';

$sub_id = MYSQLI_REAL_ESCAPE_STRING($con, $_POST ['sub_id']);
$sub_name = MYSQLI_REAL_ESCAPE_STRING($con, $_POST ['sub_name']);

    $sql = "UPDATE subject SET sub_id = $sub_id, sub_name ='$sub_name' where sub_id = $sub_id";
// echo $sql;

    MYSQLI_QUERY($con,$sql);    //ສັ່ງໃຫ້ SQL ເຮັດວຽກ
    header('location:subject.php');  //ຄຳສັ່ງໃຫ້ກັບຄືນມາໜ້າ index.php ໃນຕອນບັນທຶກແລ້ວ
?>