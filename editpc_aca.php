<?php
require 'db.php';

$aca_id = MYSQLI_REAL_ESCAPE_STRING($con, $_POST ['aca_id']);
$aca_name = MYSQLI_REAL_ESCAPE_STRING($con, $_POST ['aca_name']);


    $sql = "UPDATE academic SET aca_id = $aca_id, aca_name ='$aca_name' where aca_id = $aca_id";
// echo $sql;

    MYSQLI_QUERY($con,$sql);    //ສັ່ງໃຫ້ SQL ເຮັດວຽກ
    header('location:academic.php');  //ຄຳສັ່ງໃຫ້ກັບຄືນມາໜ້າ index.php ໃນຕອນບັນທຶກແລ້ວ
?>