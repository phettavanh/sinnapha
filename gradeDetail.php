<?php
require 'header.php';
$month = '1';
$rs_cur_aca = mysqli_query($con, "SELECT aca_id FROM academic ORDER BY aca_id DESC LIMIT 1");
$cur_aca_row = mysqli_fetch_assoc($rs_cur_aca);
$cur_aca_id = $cur_aca_row['aca_id'];
if ($_POST) {
  $month = $_POST['month_id'];
  $cur_aca_id = $_POST['aca_id'];
}
?>
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
  <div class="container-fluid">
    <?php

    $id = MYSQLI_REAL_ESCAPE_STRING($con, $_GET['room_id']);
    $sql = "SELECT DISTINCT st_id, 
          (SELECT CONCAT(st_name, ' ', st_lastname) FROM student WHERE student.st_id = score.st_id) AS fullname
          FROM score 
          WHERE score.room_id = $id AND (score.aca_id = $cur_aca_id AND month_id = $month)
          ";
    $rs = MYSQLI_QUERY($con, $sql);

    echo mysqli_error($con);
    // echo $sql;
    ?>
    <center>
      <h2> ຜົນຄະແນນ ຫ້ອງ ມ <?= $_GET['room_id'] ?></h2>
    </center>
    <!-- <php }?> -->

    <a href="add_score.php?room_id=<?= $_GET['room_id'] ?>" class="btn btn-success">ADD</a>
    <?php
    if (mysqli_num_rows($rs) > 0) :
    ?>

      <hr>
      <p>ຄັດຈ້ອນຂໍ້ມູນ</p>
      <form method="post" action="">
        <div class="row">
          <div class="col-md-2">
            <select name="aca_id" id="" class="form-control">
              <?php
              $rs_aca = mysqli_query($con, "SELECT * FROM academic ORDER BY aca_id DESC");
              while ($row_aca = mysqli_fetch_array($rs_aca)) {
                echo "<option " . ($cur_aca_id == $row_aca['aca_id'] ? 'selectd' : '') . " value='$row_aca[aca_id]'>$row_aca[aca_name]</option>";
              }
              ?>
            </select>
          </div>
          <div class="col-md-2">
            <select name="month_id" id="" class="form-control">
              <?php
              $rs_month = mysqli_query($con, "SELECT * FROM month ORDER BY month_id ASC");

              while ($row_month = mysqli_fetch_array($rs_month)) {
                echo "<option " . ($month == $row_month['month_id'] ? 'selected' : '') . " value='" . $row_month['month_id'] . "'>$row_month[month_name]</option>";
              }
              ?>
            </select>
          </div>

          <div class="col-md-2">
            <input type="submit" value="ຄົ້ນຫາ" class="btn btn-warning">
          </div>
        </div>
      </form>
      <hr>
      <table class="table table-hover" style="font-size: smaller;">
        <tr>
          <th>ລຳດັບ</th>
          <th>ລະຫັດ</th>
          <th>ຊື່ ແລະ ນາມສະກຸນ</th>
          <?php
          @$sql_sub = "SELECT * FROM subject ORDER BY sub_id ASC";
          @$rs_sub = mysqli_query($con, $sql_sub);
          while ($row = mysqli_fetch_assoc($rs_sub)) {
            echo '<th>' . $row['sub_name'] . '</th>';
          }
          ?>
          <th>ລວມ</th>
          <th>ສະເລ່ຍ</th>
          <th>ຈັດທີ</th>
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
                <td><?php echo $row['fullname'] ?></td>
                <?php
                $rankAvg = [];
                $sql_rank = "SELECT
                st_id,
                RANK() OVER (ORDER BY score DESC) AS score_rank
                FROM score
                WHERE score.aca_id = $cur_aca_id AND month_id = $month
                GROUP BY st_id
                ORDER BY score_rank;";

                $rank_rs = mysqli_query($con, $sql_rank);
                echo mysqli_error($con);
                while($rank_row = mysqli_fetch_assoc($rank_rs)){
        
                  $rankAvg[$rank_row['st_id']]=$rank_row['score_rank'];
                }


                $sql_score = "SELECT score
                FROM score 
                WHERE st_id = '" . $row['st_id'] . "' AND (score.aca_id = $cur_aca_id AND month_id = $month)
                ORDER BY score.sub_id ASC
                ";
                $rsScore = mysqli_query($con, $sql_score);
                if (mysqli_num_rows($rsScore) == 0) {
                  echo 'ກະລຸນາເລືອກສົກຮຽນ ແລະ ເດືອນ';
                } else {
                  $total = 0;
                  
                  while ($rowScore = mysqli_fetch_array($rsScore)) {
                    $total += $rowScore['score'];
                    array_push($rankAvg, $total / 14);
                ?>
                    <td><?php echo $rowScore['score'] ?></td>
                  <?php
                  }
                  ?>

                  <td><?= $total ?></td>
                  <td><?= $total / 14 ?></td>
                  <td><?= $rankAvg[$row['st_id']] ?></td>


                  <td> <a href="edit_score.php?stid=<?php echo $row['st_id'] ?>&month=<?= $month ?>&aca=<?= $cur_aca_id ?>" class="btn btn-primary btn-sm">EDIT</a>
                    <a href="delete_score.php?id=<?php echo $row['st_id'] ?>" class="btn btn-danger btn-sm">DEL</a>
                  </td>
              </tr>
      <?php
                }
              }
            }
          } ?>

      </table>
    <?php
    else :
      echo 'ຍັງບໍ່ມີຄະແນນ';
    endif;
    ?>
  </div>
</body>

</html>