<?php

require'db.php';


    $re_id = htmlspecialchars($_POST['re-id']);
    $st_id = htmlspecialchars($_POST['st_id']);
    $gender = htmlspecialchars($_POST['gender']);
    $st_name = htmlspecialchars($_POST['st_name']);
    $st_dateborn = htmlspecialchars($_POST['st_dateborn']);
    $st_ethnicity= htmlspecialchars($_POST['st_ethnicity']);
    $st_tel = htmlspecialchars($_POST['st_tel']);
    $Parent= htmlspecialchars($_POST['Parent']);
    $Par_tel = htmlspecialchars($_POST['Par_tel']);
    $room_id= htmlspecialchars($_POST['room_id']);
    $aca_id= htmlspecialchars($_POST['aca_id']);
    $money = htmlspecialchars($_POST['money']);
    $id = uniqid();
    
    $sql = "INSERT INTO register VALUES(
'$re_id','$st_id','$gender','$st_name','$st_lastname','$st_dateborn','$st_ethnicity','$st_tel','$Parent','$Par_tel', $room_id, $aca_id,money)";
    
    mysqli_query($con,$sql);
echo mysqli_error ($con);
header('location:student.php');
//echo $sql;


 
?>