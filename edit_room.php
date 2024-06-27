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
require 'db.php';

$id = mysqli_real_escape_string($con, $_GET['id']);
$sql = "SELECT * FROM room where room_id = '$id'";
$rs =  mysqli_query($con, $sql);
//echo mysqli_error($con , $sql);
$row = mysqli_fetch_array($rs);
?>

  <center>
    <h2> ແກ້ໄຂຂໍ້ມູນຫ້ອງຮຽນ </h2>
  </center>
  <form action="editpc_room.php" method="post" enctype="multipart/form-data">
  <div class="container">
  <div class="form-group">
      <label for="room_id">ລຳດັບ:</label>
      <input type="text" class="form-control" name="room_id" value="<?php echo $row['room_id'] ?>">
    </div>

    <div class="form-group">
      <label for="room_name">ຫ້ອງຮຽນ:</label>
      <input type="text" class="form-control" name="room_name" value="<?php echo $row['room_name'] ?>">
    </div>
    <button type="submit" class="btn btn-success">ບັນທຶກ</button>
  </div>
  </form>

</body>

</html>