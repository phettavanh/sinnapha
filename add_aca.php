<?php require 'header.php' ?>
<center>
    <h2> ເພີ່ມຂໍ້ມູນສົກຮຽນ </h2>
  </center>
  <form action="addpc_aca.php" method="post" enctype="multipart/form-data">
<div class="container">
  <div class="form-group">
      <label for="st_name">ລຳດັບ:</label>
      <input type="text" class="form-control" placeholder="no" name="aca_id">
    </div>

    <div class="form-group">
      <label for="st_lastname">ສົກຮຽນ:</label>
      <input type="text" class="form-control" placeholder="2022 - 2023" name="aca_name">
    </div>
    <button type="submit" class="btn btn-success">ບັນທຶກ</button>
  </div>
  </form>

  