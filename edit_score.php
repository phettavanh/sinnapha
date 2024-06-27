<?php
include 'db.php';
$month_id = $_GET['month'];
$st_id = $_GET['stid'];
$cur_aca_id = $_GET['aca'];
?>
<?php require 'header.php' ?>

  <center>
    <h2>ແກ້ໄຂຜົນການຮຽນນັກຮຽນ</h2>
  </center>

  <?php { ?>
    <div class="container-fluid">
    <form method="post" action="editpc_score.php">
      <input type="hidden" name="aca_id" value="<?=$cur_aca_id?>">
      <input type="hidden" name="month_id" value="<?=$month_id?>">
      <table class="table table-hover">
        <tr>
          <th>Full Name</th>
          <?php
            $sub_id = [];
            $count = 0;
            @$sql_sub = "SELECT * FROM subject ORDER BY sub_id ASC";
            @$rs_sub = mysqli_query($con, $sql_sub);
            while($row = mysqli_fetch_assoc($rs_sub))
            {
              $sub_id[$count] = $row['sub_id'];
              $count++;
              echo '<th>'.$row['sub_name'].'</th>';
            }
          ?>
        </tr>
        <?php

            
            @$sql_score = "SELECT * FROM score s
            WHERE s.aca_id = $cur_aca_id
            AND s.st_id = '$st_id' AND s.month_id = $month_id
            ORDER BY s.sub_id ASC
            ;
            ";
          
            @$rs_score = mysqli_query($con, $sql_score);
            echo mysqli_error($con);
            $score = [];
            while($row_score = mysqli_fetch_assoc($rs_score)){
              $score[$row_score['sub_id']]=$row_score['score'];
           
            }
            
              echo '<tr>';
             @$sql_std = "SELECT * FROM student WHERE st_id = '$st_id'";
             $rs_std = mysqli_query($con, $sql_std);
             $row_std = mysqli_fetch_assoc($rs_std);
              echo '<th>'
              .$row_std['st_name'].' '.$row_std['st_lastname'].
                '<input type="hidden" name="st_id" value="'.$row_std['st_id'].'" />';
              echo '<input type="hidden" name="room_id" value="'.$row_std['room_id'].'"/>';
              '</th>';
              // print_r($sub_id);
              foreach ($sub_id as $key => $value)
              {
                // echo $score[$value];
                // echo $key;
                echo '<td><input type="number" value="'.$score[$value].'" min="0" max="10" name="'.$row_std['st_id'].'['.$value.']"/></td>';
              }
              echo '</tr>';
            
          ?>
      </table>
      <input type="submit" class="btn btn-success" value="ບັນທຶກ">
    </form>
    </div>
  <?php  } ?>
</body>

</html>