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

<body>

  <?php
  //   $id = mysqli_real_escape_string($con, $_GET['aca_id']);
  $sql = "SELECT * FROM academic";
  $rs =  mysqli_query($con, $sql);
  ?>


  <center>
    <h2> ຂໍ້ມູນສົກຮຽນ </h2>
  </center>
  <div class="container">
    <div style="right: 0;"><a href="add_aca.php" class="btn btn-success" style="right: 5 px;">ADD</a></div>
    <table>
      <tr>
        <th>ລຳດັບ</th>
        <th>ສົກຮຽນ</th>
        <th>ໝາຍເຫດ</th>
      </tr>
      <?php while ($row = mysqli_fetch_array($rs)) { ?>
      <tr>
        <td> <?php echo $row['aca_id']; ?></td>
        <td> <?php echo $row['aca_name']; ?></td>

        <td> <a href="edit_aca.php?id=<?php echo $row['aca_id'] ?>" class="btn btn-primary  ">EDIT</a>
          <a href="delete_aca.php?id=<?php echo $row['aca_id'] ?>" class="btn btn-danger">DEL</a> </td>
      </tr>
        <?php } ?>
    </table>
  </div>


</body>

</html>