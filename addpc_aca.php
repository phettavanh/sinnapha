<?php

require'db.php';

$aca_id = MYSQLI_REAL_ESCAPE_STRING($con,$_POST['aca_id']);
$aca_name = MYSQLI_REAL_ESCAPE_STRING($con,$_POST['aca_name']);


$sql = "INSERT INTO academic VALUES($aca_id,'$aca_name')";


mysqli_query($con,$sql);
echo mysqli_error ($con);
header('location:academic.php');
echo $sql;

?>

