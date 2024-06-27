<?php require 'header.php' ?>

<style>
    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }
    td,
    th {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
    }

    tr:nth-child(even) {
      background-color: #dddddd;
    }
  </style>

<body>

  <?php
  //   $id = mysqli_real_escape_string($con, $_GET['aca_id']);
  $sql = "SELECT * FROM subject";
  $rs =  mysqli_query($con, $sql);
  ?>

  <center>
    <h2> ຂໍ້ມູນວິຊາຮຽນ </h2>
  </center>
  <form action="addpc_subject.php" method="post" enctype="multipart/form-data">
  <div class="container">
  <div class="form-group">
      <label for="sub_id">ລຳດັບ:</label>
      <input type="text" class="form-control" placeholder="no" name="sub_id">
    </div>

    <div class="form-group">
      <label for="sub_name">ວິຊາຮຽນ:</label>
      <input type="text" class="form-control" placeholder="subject" name="sub_name">
    </div>
    <button type="submit" class="btn btn-success">ບັນທຶກ</button>
  </div>
  </form>

</body>

</html>