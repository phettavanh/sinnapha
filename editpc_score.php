<?php
include 'db.php';
if ($_POST)
{
  $aca_id = $_POST['aca_id'];
  $month_id = $_POST['month_id'];
  $st_id = $_POST['st_id'];
  $room_id = $_POST['room_id'];
 

  mysqli_query($con, "START TRANSACTION");

    foreach ($_POST[$_POST['st_id']] as $sub_id => $score)
    {
            $sql_score = "UPDATE score SET
                score = $score
                WHERE
                month_id = $month_id AND
                sub_id = $sub_id AND
                st_id = '$st_id' AND
                aca_id = $aca_id";

          ;

           mysqli_query($con, $sql_score);
           echo mysqli_error($con);
        
        
    }

    mysqli_query($con, "COMMIT");
    header('Location:edit_score.php?stid='.$st_id.'&month='.$month_id.'&aca='.$aca_id);
    
}
?>