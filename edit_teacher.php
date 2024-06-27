<?php
 require 'header.php' ;
 require 'db.php';

$id = mysqli_real_escape_string($con,$_GET['id']); 

$sql = "select * from teacherdetail where teach_id = $id";
$rs =  mysqli_query($con , $sql);
$row = mysqli_fetch_array($rs);

?>
<br>
<div class="container bg-light ">
  <form action="editpc_teacher.php" method="post" enctype="multipart/form-data">
  <input type="text" class="form-control" name="id" value="<?php echo $row ['teach_id']?>" hidden>
     <center> <h2>ແກ້ໄຂຂໍ້ມູນຄູ</h2></center>
    <div class="form-group">
      <label for="Teach_name">ຊື່:</label>
      <input type="text" class="form-control"placeholder="Enter name" name="Teach_name" value="<?php echo $row ['Teach_name']?>">
    </div>

    <div class="form-group">
      <label for="Teach_lastname">ນາມສະກຸນ:</label>
      <input type="text" class="form-control"placeholder="Enter lastname" name="Teach_lastname" value="<?php echo $row ['Teach_lastname']?>">
    </div>

    <div class="form-group">
      <label for="Teach_dateborn">ວັນເດືອນປີເກີດ:</label>
      <input type="date" class="form-control"placeholder="Enter Dateborn" name="Teach_dateborn" value="<?php echo $row ['Teach_dateborn']?>">
    </div>

    <div class="form-group">
      <label for="gender">ເພດ:</label>
      <select name="gender" class="form-control" >
       <option value="1"<?php if ($row['gender_id'] == 1) {echo "selected";} ?>>ຍິງ</option>
       <option value="2"<?php if ($row['gender_id'] == 2) {echo "selected";} ?>>ຊາຍ</option>
   </select>
    </div> 

    <div class="form-group">
      <label for="Teach_tel">ເບີໂທລະສັບ:</label>
      <input type="text" class="form-control"placeholder="Enter tel" name="Teach_tel" value="<?php echo $row ['Teach_tel']?>">
    </div>

    <div class="form-group">
      <label for="Teach_address">ທີ່ຢູ່:</label>
      <input type="text" class="form-control"placeholder="Enter address" name="Teach_address" value="<?php echo $row ['Teach_address']?>">
    </div>

    <div class="form-group">
      <label for="Teach_degree">ລະດັບການສຶກສາ:</label>
      <input type="text" class="form-control"placeholder="Enter degree" name="Teach_degree" value="<?php echo $row ['Teach_degree']?>">
    </div>

    <div class="form-group">
      <label for="Graduation_from">ຈົບຈາກ:</label>
      <input type="text" class="form-control"placeholder="Enter Graduation from" name="Graduation_from" value="<?php echo $row ['Graduation_from']?>">
    </div>

    <div class="form-group">
      <label for="Year_finished">ປີຈົບ:</label>
      <input type="number" class="form-control"placeholder="Enter Year Finished" name="Year_finished" value="<?php echo $row ['Year_finished']?>">
    </div>

    <div class="form-group">
      <label for="department">ພະແນກ:</label>
      <input type="text" class="form-control"placeholder="Enter Department" name="department" value="<?php echo $row ['department']?>">
    </div>

    <div class="form-group">
      <label for="Teach_img">photo:</label>
      <input type="file" class="form-control"placeholder="Enter photo" name="Teach_img" value="<?php echo $row ['Teach_img']?>">
    </div>

    <div class="form-group">
      <label for="username">User:</label>
      <input type="text" class="form-control"placeholder="Enter Department" name="username" value="<?php echo $row ['username']?>">
    </div>

    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" class="form-control"placeholder="Enter Department" name="password" value="<?php echo $row ['password']?>">
    </div>

    
    <button class="btn btn-success">ບັນທຶກ</button>
  
  </form>
</div>

</body>
</html>


<!-- <?php require 'footer.php' ?> -->


