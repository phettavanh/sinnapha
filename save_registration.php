<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = htmlspecialchars($_POST['first_name']);
    $last_name = htmlspecialchars($_POST['last_name']);
    $room = htmlspecialchars($_POST['room']);
    $student_id = htmlspecialchars($_POST['student_id']);
    $father_name = htmlspecialchars($_POST['father_name']);
    $mother_name = htmlspecialchars($_POST['mother_name']);
    $phone = htmlspecialchars($_POST['phone']);
    $gender = htmlspecialchars($_POST['gender']);
    $dob = htmlspecialchars($_POST['dob']);
    $date = htmlspecialchars($_POST['date']);
    $year = htmlspecialchars($_POST['year']);
    
    $id = uniqid();
    
    $entry = "$first_name,$last_name,$room,$student_id,$father_name,$mother_name,$phone,$gender,$dob,$date,$year\n";
    file_put_contents('registrations.txt', $entry, FILE_APPEND);
    
    header("Location: view_registrations.php");
    exit();
} else {
    echo "Invalid request method.";
}
?>