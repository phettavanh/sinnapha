<?php require 'header.php';

 
	
$sql = "SELECT * FROM room" ;
$rs = MYSQLI_QUERY($con,$sql);
$sql1 = "SELECT * FROM academic" ;
$rs1 = MYSQLI_QUERY($con,$sql1);
?>

<section class="hero-wrap hero-wrap-2 " style="background-image: url('images/bg_2.jpg');">
	<div class="overlay"></div>
	<div class="container" >
		<div class="row no-gutters slider-text align-items-center justify-content-center ">
			<div class="col-md-9 ftco-animate text-center ">	
			<h3 for="aca_id">ສົກຮຽນ:</h3>
      <select name="aca_id" class="form-control" >
      <option value="1">2022 - 2023</option>
      <option value="2">2023 - 2024</option>
       </select>
			</div>
		</div>
	</div>
</section>


<div  class=" bg-light  ">
<?php ($pow = MYSQLI_FETCH_ARRAY($rs1)) ?>
<center><h2><a href="all_student.php?id=<?php echo $pow['aca_id'] ?>">ລາຍງານສະຖິຕິນັກຮຽນທັງໝົດ </a></h2></center> 
<br>
<center><h2 class="mb-2 bread" style="color: black;">ປະຫວັດນັກຮຽນແຕ່ລະຫ້ອງ</h2></center> 

<div class="container" >
<div class="row">
			<?php while($row = MYSQLI_FETCH_ARRAY($rs)){ ?>		
			<div class="col-md-6 course d-lg-flex ftco-animate bg-light">
			<div class="img" style="background-image: url(images/course-1.jpg);"></div>
				<div class="text bg-light p-4 " >
					<center><h3><a href="class.php?room_id=<?php echo $row['room_id'] ?>" style="color: black;">ຫ້ອງ <?php echo $row['room_name'] ?> </a></h3>	</center>					
					</div>
			</div>
					<?php } ?>
			</div>	
	</div>
	</div>
<?php require 'footer.php' ?>

