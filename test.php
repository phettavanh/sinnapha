<?php
    include 'db.php';
    if($_POST){
        print_r($_POST);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        
        $sql = "SELECT * FROM subject";
        $rs_sub = mysqli_query($con, $sql);
        echo '<form method="post">';
            echo 'st_id <input name="st_id">';
            echo 'teacher_id <input name="techer_id">';
            echo 'room_id <input name="room_id">';
            echo 'aca_id <input name="aca_id">';
            echo 'month_id <input name="month_id"> <br><hr>';
            while($row = mysqli_fetch_assoc($rs_sub)):
                echo $row['sub_name'].'<input type="text" name="sub_id[]" value="'.$row['sub_id'].'">';
                echo '<input type="text" name="score[]"><br><hr>';
            endwhile;
            echo '<button>Sava</button>';
        echo '</form>';
    ?>
</body>
</html>