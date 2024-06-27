<?php require 'header.php' ?>
<br>
<div class="container">
  <form action="addpc_student.php" method="post" enctype="multipart/form-data">

    <center>
      <h2>ເພີ່ມຂໍ້ມູນນັກຮຽນ</h2>
    </center>

    <div class="form-group">
      <label for="room_id">ຫ້ອງ:</label>
      <select name="room_id" class="form-control">
        <option value="1">ມ1</option>
        <option value="2">ມ2</option>
        <option value="3">ມ3</option>
        <option value="4">ມ4</option>
      </select>
    </div>

    <div class="form-group">
      <label for="aca_id">ສົກຮຽນ:</label>
      <select name="aca_id" class="form-control">
        <option value="1">2022 - 2023</option>
      </select>
    </div>

    <div class="form-group">
      <label for="gender_id">ເພດ:</label>
      <select name="gender_id" class="form-control">
        <option value="1">ຍິງ</option>
        <option value="2">ຊາຍ</option>
      </select>
    </div>

    <div class="form-group">
      <label for="st_id">ລະຫັດ:</label>
      <input type="text" class="form-control" placeholder="Enter ID ( SNP_000x)" name="st_id">
    </div>

    <div class="form-group">
      <label for="st_name">ຊື່:</label>
      <input type="text" class="form-control" placeholder="Enter name" name="st_name">
    </div>

    <div class="form-group">
      <label for="st_lastname">ນາມສະກຸນ:</label>
      <input type="text" class="form-control" placeholder="Enter lastname" name="st_lastname">
    </div>

    <div class="form-group">
      <label for="Teach_dateborn">ວັນເດືອນປີເກີດ:</label>
      <input type="date" class="form-control" placeholder="Enter Dateborn" name="st_dateborn">
    </div>

    <div class="form-group">
      <label for="st_address">ບ້ານຢູ່ປັດຈຸບັນ:</label>
      <input type="text" class="form-control" placeholder="Enter address" name="st_address">
    </div>

    <div class="form-group">
      <label for="st_Ethnicity">ຊົ່ນເຜົ່າ:</label>
      <input type="text" class="form-control" placeholder="Enter Ethnicity" name="st_Ethnicity">
    </div>

    <div class="form-group">
      <label for="st_tel">ເບີໂທລະສັບ:</label>
      <input type="text" class="form-control" placeholder="Enter tel" name="st_tel">
    </div>

    <div class="form-group">
      <label for="Parent">ຊື່ຜູ້ປົກຄອງ:</label>
      <input type="text" class="form-control" placeholder="Enter Parent" name="Parent">
    </div>

    <div class="form-group">
      <label for="Par_tel">ເບີໂທລະສັບຜູ້ປົກຄອງ:</label>
      <input type="text" class="form-control" placeholder="Enter Parent Tel" name="Par_tel">
    </div>

    <button type="submit" class="btn btn-success">ບັນທຶກ</button>
  </form>
</div>

</body>

</html>

<!-- <?php require 'footer.php' ?> -->