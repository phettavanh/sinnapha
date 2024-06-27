<?php require 'header.php' ?>


<!DOCTYPE html>
<html>

<head>
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
     $aca_id = mysqli_real_escape_string($con, $_GET['id']);
    $sql = "SELECT * FROM student join gender on gender.gender_id = student.gender_id join academic on student.aca_id = academic.aca_id where academic.aca_id = $aca_id";
    $sql1 = "SELECT * FROM academic  where aca_id = $aca_id";
    $rs = MYSQLI_QUERY($con, $sql);
    $rs1 = MYSQLI_QUERY($con, $sql1);
    $pow = MYSQLI_FETCH_ARRAY($rs1);
  ?>

  <center>   
    <h2> ລາຍງານສະຖິຕິນັກຮຽນທັງໝົດ ຂອງສົກຮຽນ <?php echo $pow['aca_name'] ?></h2>
  </center>
  <div class="container">
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
      <th>ຫ້ອງ</th>
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
        <td><?php echo $row['room_id'] ?></td>
      </tr>

      <?php
                }
              }
            }
           ?>
  
            
           ?>
  </table>
  </div>
</body>

</html>