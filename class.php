<?php require 'header.php' ?>


<!DOCTYPE html>
<html>

<head>
  <style>
    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 110%;
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
    body{
      margin: 0;
      color: #6a6f8c;
      background: #ffffff;
      font:600 16px/18px 'Open Sans',sans-serif;
    }
  </style>
</head>

<body>
  <?php
  
  $room_id = mysqli_real_escape_string($con, $_GET['room_id']);
    $sql = "SELECT * FROM student join gender on gender.gender_id = student.gender_id where room_id = $room_id";
    $rs = MYSQLI_QUERY($con, $sql);
  ?>

  <center>
    <h2> ປະຫວັດນັກຮຽນ ຫ້ອງ ມ<?php echo $room_id ?></h2>
  </center>
  <div class="container">
  <div style="right: 0;" ><a href="add_student.php" class="btn btn-success" style="right: 5 px;" >ADD</a></div>
  <table>
    <tr>
      <th>ລຳດັບ</th>
      <th>ລະຫັດ</th>
      <th>ເພດ</th>
      <th>ຊື່ </th>
      <th>ນາມສະກຸນ</th>
      <th>ວັນເດືອນປີເກີດ</th>
      <th>ບ້ານຢູ່ປັດຈຸບັນ</th>
      <th>ຊົນເຜົ່າ</th>
      <th>ເບີໂທລະສັບ</th>
      <th>ຊື່ຜູ້ປົກຄອງ</th>
      <th>ເບີໂທລະສັບຜູ້ປົກຄອງ</th>
      <th>ໝາຍເຫດ</th>
    </tr>
    <?php {
      $datas = array();
      if (mysqli_num_rows($rs) > 0) {
        $count = 1;
        while ($row = mysqli_fetch_array($rs)) {
    ?>
      <tr>
        <td><?= $count++; ?></td>
        <td><?php echo $row['st_id'] ?></td>
        <td><?php echo $row['gender_name'] ?></td>
        <td><?php echo $row['st_name'] ?></td>
        <td><?php echo $row['st_lastname'] ?></td>
        <td><?php echo $row['st_dateborn'] ?></td>
        <td><?php echo $row['st_address'] ?></td>
        <td><?php echo $row['st_Ethnicity'] ?></td>
        <td><?php echo $row['st_tel'] ?></td>
        <td><?php echo $row['Parent'] ?></td>
        <td><?php echo $row['Par_tel'] ?></td>
        
        <td> 
          <a href="register.php?id=<?php echo $row['st_id'] ?>" class="btn btn-warning" style="color: #ffffff;">Register</a>
            <a href="edit_student.php?id=<?php echo $row['st_id'] ?>"class="btn btn-primary " >EDIT</a>
            <a href="delete_student.php?id=<?php echo $row['st_id'] ?>"class="btn btn-danger">DEL</a>
            
          </td>

      </tr>
      <?php
                }
              }
            }
           ?>

  </table>
  </div>
</body>

</html>