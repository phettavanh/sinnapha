<?php require 'db.php'; 
session_start();
if(!isset($_SESSION['st_id'], $_SESSION['room'])){
    header('location:login_user.php');
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

 
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco_navbar ftco-navbar-light" id="ftco-navbar">
	    <div class="container d-flex align-items-center">
	    	<a class="navbar-brand" href="#">ໂຮງຮຽນ ສິນນະພາ</a>
			
	      <div class="collapse navbar-collapse" id="ftco-nav" bg-light>
	        <ul class="navbar-nav ml-auto">
	        	<li class="nav-item "><a href="view_score.php" class="nav-link pl-0"><b>ໜ້າຫຼັກ</b></a></li>
	        	<li class="nav-item"><a href="teacherforst.php" class="nav-link"><b>ອາຈານ</b></a></li>
				<li class="nav-item"><a href="about.php" class="nav-link"><b>ຂໍ້ມູນໂຮງຮຽນ</b></a></li>
				<li class="nav-item"><a href="logout_user.php" class="nav-link"><b>logout</b></a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
