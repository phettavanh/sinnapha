<?php
include 'db.php';
$rs_cur_aca = mysqli_query($con, "SELECT aca_id FROM academic ORDER BY aca_id DESC LIMIT 1");
$cur_aca_row = mysqli_fetch_assoc($rs_cur_aca);
$cur_aca_id = $cur_aca_row['aca_id'];
?>
<?php require 'header.php' ?>

  <center>
    <h2 >ເພິ່ມຜົນການຮຽນນັກຮຽນ</h2>
  </center>

  <?php { ?>
    <div class="container-fluid ">
    <form method="post" action="addpc_score.php">
      <input type="hidden" name="room_id" value="<?=$_GET['room_id']?>">
      <div class="row">
        <div class="col-md-3">
          <select name="aca_id" id="" class="form-select">
            <?php
              $rs_aca = mysqli_query($con, "SELECT * FROM academic ORDER BY aca_id DESC");
              while ($row_aca = mysqli_fetch_array($rs_aca)) {
                echo "<option value='$row_aca[aca_id]'>$row_aca[aca_name]</option>";
              }
            ?>
          </select>
        </div>
        <div class="col-md-3">
          <select name="month_id" id="" class="form-select">
            <?php
              $rs_month = mysqli_query($con, "SELECT * FROM month ORDER BY month_id ASC");
              while ($row_month = mysqli_fetch_array($rs_month))
              {
                echo "<option value='$row_month[month_id]'>$row_month[month_name]</option>";
              }
            ?>
          </select>
        </div>
        <div class="col-md-3">
          <select name="teach_id" id="" class="form-select">
            <?php
              $rs_teach = mysqli_query($con, "SELECT * FROM teacherdetail ORDER BY teach_id ASC");
              while ($row_teach = mysqli_fetch_array($rs_teach))
              {
                echo "<option value='$row_teach[teach_id]'>$row_teach[Teach_name] $row_teach[Teach_lastname]</option>";
              }
            ?>
          </select>
        </div>
      </div>
      <table class="table table-hover">
        <tr>
          <th>Full Name</th>
          <?php
            $sub_id = [];
            $count = 0;
            @$sql_sub = "SELECT * FROM subject";
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
            @$room_id = $_GET['room_id'];

            
            @$sql_std = "SELECT * FROM student 
            WHERE room_id = $room_id AND st_id NOT IN (SELECT DISTINCT st_id FROM score WHERE aca_id =" . $cur_aca_id.")
            AND aca_id = $cur_aca_id;
            ";
   
            @$rs_std = mysqli_query($con, $sql_std);
            echo mysqli_error($con);
            while($row = mysqli_fetch_assoc($rs_std))
            {
              echo '<tr>';
             
              echo '<th>'
              .$row['st_name'].' '.$row['st_lastname'].
                '<input type="hidden" name="st_id[]" value="'.$row['st_id'].'" />';
              '</th>';
              foreach ($sub_id as $key => $value)
              {
                echo '<td><input type="number" value="0" min="0" max="10" name="'.$row['st_id'].'['.$value.']"/></td>';
              }
              echo '</tr>';
            }
          ?>
      </table>
      <input type="submit" class="btn btn-success" value="ບັນທຶກ">
    </form>
    </div>
  <?php  } ?>
</body>

</html>