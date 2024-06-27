<?php require 'header.php' ?>
<br>

  

<div class="container bg-light ">
  <form action="addpc_teacher.php" method="post" enctype="multipart/form-data">

     <center> <h2>ເພີ່ມຂໍ້ມູນຄູ</h2></center>
    <div class="form-group">
      <label for="Teach_name">ຊື່:</label>
      <input type="text" class="form-control"placeholder="Enter name" name="Teach_name">
    </div>

    <div class="form-group">
      <label for="Teach_lastname">ນາມສະກຸນ:</label>
      <input type="text" class="form-control"placeholder="Enter lastname" name="Teach_lastname">
    </div>

    <div class="form-group">
      <label for="Teach_dateborn">ວັນເດືອນປີເກີດ:</label>
      <input type="date" class="form-control"placeholder="Enter Dateborn" name="Teach_dateborn">
    </div>

    <div class="form-group">
      <label for="gender">ເພດ:</label>
      <select name="gender" class="form-control" >
       <option value="1">ຍິງ</option>
       <option value="2">ຊາຍ</option>
   </select>
    </div> 

    <div class="form-group">
      <label for="Teach_tel">ເບີໂທລະສັບ:</label>
      <input type="text" class="form-control"placeholder="Enter tel" name="Teach_tel">
    </div>

    <div class="form-group">
      <label for="Teach_address">ທີ່ຢູ່:</label>
      <input type="text" class="form-control"placeholder="Enter address" name="Teach_address">
    </div>

    <div class="form-group">
      <label for="Teach_degree">ລະດັບການສຶກສາ:</label>
      <input type="text" class="form-control"placeholder="Enter degree" name="Teach_degree">
    </div>

    <div class="form-group">
      <label for="Graduation_from">ຈົບຈາກ:</label>
      <input type="text" class="form-control"placeholder="Enter Graduation from" name="Graduation_from">
    </div>

    <div class="form-group">
      <label for="Year_finished">ປີຈົບ:</label>
      <input type="number" class="form-control"placeholder="Enter Year Finished" name="Year_finished">
    </div>

    <div class="form-group">
      <label for="department">ພະແນກ:</label>
      <input type="text" class="form-control"placeholder="Enter Department" name="department">
    </div>

    <div class="form-group">
      <label for="Teach_img">photo:</label>
      <input type="file" class="form-control"placeholder="Enter photo" name="Teach_img">
    </div>

    <div class="form-group">
      <label for="username">User:</label>
      <input type="text" class="form-control"placeholder="Enter Department" name="username">
    </div>

    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" class="form-control"placeholder="Enter Department" name="password">
    </div>
    
    <button type="submit" class="btn btn-success">ບັນທຶກ</button>
  </form>
</div>


</html>

<!-- <?php require 'footer.php' ?> -->