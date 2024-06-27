<?php require 'header.php';
?>
<?php require 'db.php' ?>
<?php
$sql = "SELECT * FROM academic";
$rs = MYSQLI_QUERY($con, $sql);

?>

<section class="home-slider owl-carousel bg-light">
	<div class="slider-item" style="background-image:url(images/poster2.jpg) ; ">

	</div>
</section>


<section class="ftco-services ftco-no-pb">
	<div class="container-wrap">
		<div class="row no-gutters">
			<div class="col-md-3 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-primary">
				<div class="media block-6 d-block text-center">
					<div class="icon d-flex justify-content-center align-items-center">
						<span class="flaticon-teacher"></span>
					</div>
					<div class="media-body p-2 mt-3">
					<h3 class="heading" class="breadcrumbs" class="mr-2"> <a href="register.php"><font style="color:white"> ລົງທະບຽນ </font></h3>
					</div>
				</div>
			</div>
			
			<div class="col-md-3 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-tertiary">
				<div class="media block-6 d-block text-center">
					<div class="icon d-flex justify-content-center align-items-center">
						<span class="flaticon-reading"></span>
					</div>
					<div class="media-body p-2 mt-3">
					<h3 class="heading" class="mr-2"> <a href="teacherDetail.php"><font style="color:white"> ຂໍ້ມູນຄູອາຈານ </font></h3>
					</div>
				</div>
			</div>
			<div class="col-md-3 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-fifth">
				<div class="media block-6 d-block text-center">
					<div class="icon d-flex justify-content-center align-items-center">
						<span class="flaticon-books"></span>
					</div>
					<div class="media-body p-2 mt-3">
					<h3 class="heading" class="breadcrumbs" class="mr-2"> <a href="grade.php"><font style="color:white"> ຜົນການຮຽນ </font></h3>
					</div>
				</div>
			</div>
			<div class="col-md-3 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-quarternary">
				<div class="media block-6 d-block text-center">
					<div class="icon d-flex justify-content-center align-items-center">
						<span class="flaticon-diploma"></span>
					</div>
					<div class="media-body p-2 mt-3">
					<h3 class="heading" class="breadcrumbs" class="mr-2"> <a href="about.php"><font style="color:white"> ຂໍ້ມູນໂຮງຮຽນ </font></h3>
					</div>
				</div>
			</div>
<br> 
<br> 
<br> 
			<!-- <div class="col-md-3 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-quarternary">
				<div class="media block-6 d-block text-center"></div>
					<div class="media-body p-2 mt-3">
					<h3 class="heading" class="breadcrumbs" class="mr-2"> <a href="subject.php"><font style="color:white"> ວິຊາຮຽນ </font></h3>
					</div>
				</div>

				<div class="col-md-3 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-quarternary">
				<div class="media block-6 d-block text-center"></div>
					<div class="media-body p-2 mt-3">
					<h3 class="heading" class="breadcrumbs" class="mr-2"> <a href="room.php"><font style="color:white"> ຫ້ອງຮຽນ </font></h3>
					</div>
				</div>

				<div class="col-md-3 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-quarternary">
				<div class="media block-6 d-block text-center"></div>
					<div class="media-body p-2 mt-3">
					<h3 class="heading" class="breadcrumbs" class="mr-2"> <a href="academic.php"><font style="color:white"> ສົກຮຽນ </font></h3>
					</div>
				</div>

				<div class="col-md-3 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-quarternary">
				<div class="media block-6 d-block text-center"></div>
					<div class="media-body p-2 mt-3">
					<h3 class="heading" class="breadcrumbs" class="mr-2"> <a href="logout.php"><font style="color:white"> ອອກຈາກລະບົບ </font></h3>
					</div>
				</div> -->

			</div>
		</div>
	</div>
</section>




</body>
</html>

 <?php require 'footer.php' ?>