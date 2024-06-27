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
$sql = "SELECT * FROM subject where sub_id = '$id'";
$rs =  mysqli_query($con, $sql);
//echo mysqli_error($con , $sql);
$row = mysqli_fetch_array($rs);
?>

  <center>
    <h2> ຂໍ້ມູນວິຊາຮຽນ </h2>
  </center>
  <form action="editpc_subject.php" method="post" enctype="multipart/form-data">
  <div class="container">
    <table>
     
      <div class="form-group">
      <label for="sub_id">ລຳດັບ:</label>
      <input type="text" class="form-control" name="sub_id" value="<?php echo $row['sub_id'] ?>">
    </div>

    <div class="form-group">
      <label for="sub_name">ວິຊາຮຽນ:</label>
      <input type="text" class="form-control" name="sub_name" value="<?php echo $row['sub_name'] ?>">
    </div>
    <button type="submit" class="btn btn-success">ບັນທຶກ</button>
    </table>
  </div>
  </form>

</body>

</html>