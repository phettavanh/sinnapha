<?php require 'header_student.php';
?>
<?php require 'db.php' ?>
<?php
$sql = "SELECT * FROM academic";
$rs = MYSQLI_QUERY($con, $sql);

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
  </style>
</head>

<body>
<div class="container-fluid">
  <?php
  $rs_cur_aca = mysqli_query($con, "SELECT aca_id FROM academic ORDER BY aca_id DESC LIMIT 1");
  $cur_aca_row = mysqli_fetch_assoc($rs_cur_aca);
  $cur_aca_id = $cur_aca_row['aca_id'];
  $id = MYSQLI_REAL_ESCAPE_STRING($con, $_SESSION['room']);
  $sql = "SELECT DISTINCT st_id, 
          (SELECT CONCAT(st_name, ' ', st_lastname) FROM student WHERE student.st_id = score.st_id) AS fullname
          FROM score 
          WHERE score.room_id = $id AND score.aca_id = $cur_aca_id AND score.st_id = '".$_SESSION['st_id']."'
          ";
  $rs = MYSQLI_QUERY($con, $sql);

  echo mysqli_error($con);
  // echo $sql;
  ?>
  <center>
    <h2> ຜົນການຮຽນ </h2>
  </center>
  <!-- <php }?> -->

  <?php
  if (mysqli_num_rows($rs) > 0) :
  ?>

    <?php
    //  print_r($datas);
    ?>

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
          $count=1;
          while ($row = mysqli_fetch_array($rs)) {
      ?>
            <tr>
              <td><?= $count++;?></td>
              <td><?php echo $row['st_id'] ?></td>
              <td><?php echo $row['fullname'] ?></td>
              <?php
                $sql_score = "SELECT score
                FROM score 
                WHERE st_id = '".$row['st_id']."' AND score.aca_id = $cur_aca_id
                ORDER BY score.sub_id ASC
                ";
                $rsScore = mysqli_query($con, $sql_score);
                echo mysqli_error($con);
                $total=0;
                $rankAvg=[];
                while ($rowScore = mysqli_fetch_array($rsScore)) {
                  $total+=$rowScore['score'];
                  array_push($rankAvg, $total/14); 
              ?>
                <td><?php echo $rowScore['score'] ?></td>
              <?php
                }
              ?>
              

              <td><?=$total?></td>
              <td><?= $total/14?></td>
              <td>1</td>
            </tr>
      <?php
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

</body>
</html>

 <!-- <?php require 'footer.php' ?> -->