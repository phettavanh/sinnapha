<?php
require 'header.php';
require 'db.php';

$id = mysqli_real_escape_string($con, $_GET['id']);
$sql = "SELECT * FROM student where st_id = '$id'";
$rs =  mysqli_query($con, $sql);
//echo mysqli_error($con , $sql);
$row = mysqli_fetch_array($rs);
?>
<br>
<div class="container">
  <form action="editpc_student.php" method="post" enctype="multipart/form-data">
    <input type="text" class="form-control" name="id" value="<?php echo $row['st_id'] ?>" hidden>
    <center>
      <h2>ແກ້ໄຂຂໍ້ມູນນັກຮຽນ</h2>
    </center>

    <div class="form-group">
      <label for="room_id">ຫ້ອງ:</label>
      <select name="room_id" class="form-control" value="<?php echo $row['room_id'] ?>">
        <option value="1" <?php if ($row['room_id'] == 1) {
                            echo "selected";
                          } ?>>ມ1</option>
        <option value="2" <?php if ($row['room_id'] == 2) {
                            echo "selected";
                          } ?>>ມ2</option>
        <option value="3" <?php if ($row['room_id'] == 3) {
                            echo "selected";
                          } ?>>ມ3</option>
        <option value="4" <?php if ($row['room_id'] == 4) {
                            echo "selected";
                          } ?>>ມ4</option>
      </select>
    </div>

    <div class="form-group">
      <label for="aca_id">ສົກຮຽນ:</label>
      <select name="aca_id" class="form-control" value="<?php echo $row['aca_id'] ?>">
        <option value="1" <?php if ($row['aca_id'] == 1) {
                            echo "selected";
                          } ?>>2022 - 2023</option>
        <option value="2" <?php if ($row['aca_id'] == 2) {
                            echo "selected";
                          } ?>>2023 - 2024</option>
      </select>
    </div>

    <div class="form-group">
      <label for="st_id">ລະຫັດ:</label>
      <input type="text" class="form-control" placeholder="Enter ID" name="st_id" value="<?php echo $row['st_id'] ?>">
    </div>

    <div class="form-group">
      <label for="gender">ເພດ:</label>
      <select name="gender" class="form-control">
        <option value="1" <?php if ($row['gender_id'] == 1) {
                            echo "selected";
                          } ?>>ຍິງ</option>
        <option value="2" <?php if ($row['gender_id'] == 2) {
                            echo "selected";
                          } ?>>ຊາຍ</option>
      </select>
    </div>

    <div class="form-group">
      <label for="st_name">ຊື່:</label>
      <input type="text" class="form-control" placeholder="Enter name" name="st_name" value="<?php echo $row['st_name'] ?>">
    </div>

    <div class="form-group">
      <label for="st_lastname">ນາມສະກຸນ:</label>
      <input type="text" class="form-control" placeholder="Enter lastname" name="st_lastname" value="<?php echo $row['st_lastname'] ?>">
    </div>

    <div class="form-group">
      <label for="Teach_dateborn">ວັນເດືອນປີເກີດ:</label>
      <input type="date" class="form-control" placeholder="Enter Dateborn" name="st_dateborn" value="<?php echo $row['st_dateborn'] ?>">
    </div>

    <div class="form-group">
      <label for="st_address">ບ້ານຢູ່ປັດຈຸບັນ:</label>
      <input type="text" class="form-control" placeholder="Enter address" name="st_address" value="<?php echo $row['st_address'] ?>">
    </div>

    <div class="form-group">
      <label for="st_Ethnicity">ຊົ່ນເຜົ່າ:</label>
      <input type="text" class="form-control" placeholder="Enter Ethnicity" name="st_Ethnicity" value="<?php echo $row['st_Ethnicity'] ?>">
    </div>

    <div class="form-group">
      <label for="st_tel">ເບີໂທລະສັບ:</label>
      <input type="text" class="form-control" placeholder="Enter tel" name="st_tel" value="<?php echo $row['st_tel'] ?>">
    </div>

    <div class="form-group">
      <label for="Parent">ຊື່ຜູ້ປົກຄອງ:</label>
      <input type="text" class="form-control" placeholder="Enter Parent" name="Parent" value="<?php echo $row['Parent'] ?>">
    </div>

    <div class="form-group">
      <label for="Par_tel">ເບີໂທລະສັບຜູ້ປົກຄອງ:</label>
      <input type="text" class="form-control" placeholder="Enter Parent Tel" name="Par_tel" value="<?php echo $row['Par_tel'] ?>">
    </div>

    <button type="submit" class="btn btn-success">ບັນທຶກ</button>

  </form>
</div>

</body>

</html>

<!-- <?php require 'footer.php' ?> -->