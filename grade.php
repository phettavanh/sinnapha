<?php require 'header.php';
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT * FROM room" ;
$rs = MYSQLI_QUERY($con,$sql);
if (!$rs) {
    die("Query failed: " . mysqli_error($con));
}
?>

<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');">
	<div class="overlay"></div>
	<div class="container">
		<div class="row no-gutters slider-text align-items-center justify-content-center ">
			<div class="col-md-9 ftco-animate text-center">
				<h1 class="mb-2 bread">ຜົນການຮຽນ</h1>
				<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Courses <i class="ion-ios-arrow-forward"></i></span></p>
			</div>
		</div>
	</div>
</section>


<section class="ftco-section bg-light">
	<div class="container">
		<div class="row">
			<?php while($row = MYSQLI_FETCH_ARRAY($rs)){ ?>
			<div class="col-md-6 course d-lg-flex ftco-animate bg-light">
				<div class="img" style="background-image: url(images/course-1.jpg);"></div>
				<div class="text bg-light p-4">
					<h3><a href="gradeDetail.php?room_id=<?php echo $row['room_id'] ?>">ຫ້ອງ <?php echo $row['room_name'] ?></a></h3>
				</div>
			</div>
			<?php } ?>
		</div>
	</div>
	</div>
	</div>
</section>



<!-- <?php require 'footer.php' ?> -->