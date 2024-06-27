<?php require 'db.php'; 
session_start();
if(!isset($_SESSION['username'], $_SESSION['password'])){
    header('location:login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

	<title>Kiddos - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">
    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

  <img class="logo" src="images/sinnapha-logo.jpg" style="width: 60px; height: 60px; float: left; margin-left: 5%; margin-top: 15px; " alt="logo_images">
	<nav class="navbar navbar-expand-lg navbar-dark bg-light ftco_navbar ftco-navbar-light" id="ftco-navbar" >
  <a class="navbar-brand" href="about.php"   >ໂຮງຮຽນ ສິນນະພາ</a>

	    <div class="container d-flex align-items-center">
			
	      <div class="collapse navbar-collapse" id="ftco-nav" >
	        <ul class="navbar-nav ml-auto" bg-light>
	        	<li class="nav-item "><a href="index.php" class="nav-link pl-0"><b>ໜ້າຫຼັກ</b></a></li>
				<li class="nav-item"><a href="student.php" class="nav-link"><b>ນັກຮຽນ</b></a></li>
	        	<li class="nav-item"><a href="teacherDetail.php" class="nav-link"><b>ອາຈານ</b></a></li>
            <li class="nav-item"><a href="register.php" class="nav-link"><b>ລົງທະບຽນ</b></a></li>
	        	<li class="nav-item"><a href="grade.php" class="nav-link"><b>ຜົນຄະແນນ</b></a></li>
				<li class="nav-item"><a href="subject.php" class="nav-link"><b>ວິຊາຮຽນ</b></a></li>
				<li class="nav-item"><a href="room.php" class="nav-link"><b>ຫ້ອງຮຽນ</b></a></li>
				<li class="nav-item"><a href="academic.php" class="nav-link"><b>ສົກຮຽນ</b></a></li>
				<li class="nav-item"><a href="about.php" class="nav-link"><b>ຂໍ້ມູນໂຮງຮຽນ</b></a></li>
				<li class="nav-item"><a href="logout.php" class="nav-link"><b>logout</b></a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
