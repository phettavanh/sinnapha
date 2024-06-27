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
  </style>
</head>

<body>
<div class="container-fluid">
  <?php
  $rs_cur_aca = mysqli_query($con, "SELECT aca_id FROM academic ORDER BY aca_id DESC LIMIT 1");
  $cur_aca_row = mysqli_fetch_assoc($rs_cur_aca);
  $cur_aca_id = $cur_aca_row['aca_id'];
  $id = MYSQLI_REAL_ESCAPE_STRING($con, $_GET['room_id']);
  $sql = "SELECT DISTINCT st_id, 
          (SELECT CONCAT(st_name, ' ', st_lastname) FROM student WHERE student.st_id = score.st_id) AS fullname
          FROM score 
          WHERE score.room_id = $id AND score.aca_id = $cur_aca_id
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
              

              <?php
$numbers = array( $total);
rsort($numbers);

$arrlength = count($numbers);
$rank = 1;
   $rt=0;
for($x = 0; $x < $arrlength; $x++) {
    if ($x==0) {
         echo $numbers[$x]."- Rank".($rank);
    }
   elseif ($numbers[$x] != $numbers[($x-1)]) {

            echo $numbers[$x]."- Rank".($rank);
            $rt=$rank;
           }
   else{
        echo $numbers[$x]."- Rank".($rt);
            }
      $rank++;
   echo "<br>";
}
?>

              <td><?=$total?></td>
              <td><?= $total/14?></td>
              <td><?=$numbers?></td>


              <td> <a href="edit_score.php?id=<?php echo $row['st_id'] ?>" class="btn btn-primary btn-sm">EDIT</a>
                <a href="delete_score.php?id=<?php echo $row['st_id'] ?>" class="btn btn-danger btn-sm">DEL</a>
              </td>
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