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


    body{
      margin: 0;
      color: #6a6f8c;
      background: #ffffff;
      font:600 16px/18px 'Open Sans',sans-serif;
    }
  </style>



  <?php
  //   $id = mysqli_real_escape_string($con, $_GET['aca_id']);
  $sql = "SELECT * FROM subject";
  $rs =  mysqli_query($con, $sql);
  ?>

  <center>
    <h2> ຂໍ້ມູນວິຊາຮຽນ </h2>
  </center>
  <div class="container" bg-light>
    <div style="right: 0;"><a href="add_subject.php" class="btn btn-success" style="right: 5 px;" >ADD</a></div>
    <table>
      <tr>
        <th>ລຳດັບ</th>
        <th>ວິຊາຮຽນ</th>
        <th>ໝາຍເຫດ</th>
      </tr>
      <?php while ($row = mysqli_fetch_array($rs)) { ?>
      <tr>
        <td> <?php echo $row['sub_id']; ?></td>
        <td> <?php echo $row['sub_name']; ?></td>

        <td> <a href="edit_subject.php?id=<?php echo $row['sub_id'] ?>" class="btn btn-primary">EDIT</a>
          <a href="delete_subject.php?id=<?php echo $row['sub_id'] ?>" class="btn btn-danger">DEL</a> </td>
      </tr>
        <?php } ?>
    </table>
  </div>




