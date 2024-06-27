<?php require 'header_student.php' ?>


<?php
$sql = "SELECT * FROM teacherdetail JOIN gender ON teacherdetail.gender_id = gender.gender_id ";
$rs = MYSQLI_QUERY($con, $sql);
// echo $sql;
?>

    <div class="container-xxl py-5 bg-light">
        <div class="container">
     
   

            <?php while ($row = MYSQLI_FETCH_ARRAY($rs)){ ?>
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="img-border">
                        <img class="images-fluid" src="images/<?php echo $row['Teach_img'] ?>" alt="0">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <h3 class="mb-2"> ພະແນກ : <?php echo $row['department'] ?> </h3>
                        <h5 class="display-6 mb-3"> ຊື່ ແລະ ນາມສະກຸນ:
                            <span class="mb-5" id=""><?php echo $row['gender_name'] ?> <?php echo $row['Teach_name'] ?> <?php echo $row['Teach_lastname'] ?></span>
                        </h5>
                        <h5 class="mb-2"> ວັນເດືອນປີເກີດ : <?php echo $row['Teach_dateborn'] ?> </h5>
                        <h5 class="mb-2"> ບ້ານຢູ່ປັດຈຸບັນ : <?php echo $row['Teach_address'] ?> </h5>
                        <h5 class="mb-2"> ເບີໂທລະສັບ : <?php echo $row['Teach_tel'] ?> </h5>
                        <h5 class="mb-2"> ລະດັບການສຶກສາ : <?php echo $row['Teach_degree'] ?> </h5>
                        <h5 class="mb-2"> ຈົບຈາກ : <?php echo $row['Graduation_from'] ?> </h5>
                        <h5 class="mb-2"> ປີຈົບ : <?php echo $row['Year_finished'] ?> </h5>
                       
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>

<?php require 'footer.php' ?>