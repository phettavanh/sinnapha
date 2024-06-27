<?php
include 'db.php';
if ($_POST)
{
  // echo '<pre>';
  // print_r($_POST);
  // echo '</pre>';

  $aca_id = $_POST['aca_id'];
  $month_id = $_POST['month_id'];
  $teach_id = $_POST['teach_id'];
  $room_id = $_POST['room_id'];

  mysqli_query($con, "START TRANSACTION");

    foreach ($_POST['st_id'] as $key => $st_id)
    {
        foreach ($_POST[$st_id] as $sub_id => $score)
        {
            $sql_score = "INSERT INTO score(
                score_id,
                score,
                month_id,
                st_id,
                sub_id,
                room_id,
                aca_id,
                teach_id
              ) VALUES($key, $score, $month_id, '$st_id', $sub_id, $room_id, $aca_id, $teach_id)";
           mysqli_query($con, $sql_score);
           echo mysqli_error($con);
        }
        
    }

    mysqli_query($con, "COMMIT");
    
    header('location:grade.php');
    
}
?>