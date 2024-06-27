<?php
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $id = $_GET['id'];
    $file = 'registrations.txt';
    if (file_exists($file)) {
        $lines = file($file);
        foreach ($lines as $line) {
            list($fn, $ln, $rm, $student_id, $fa, $mo, $ph, $gr, $dob, $dt, $yr, $my) = explode(",", trim($line));
            if ($student_id == $id) {
                $first_name = $fn;
                $last_name = $ln;
                $room = $rm;
                $father_name = $fa;
                $mother_name = $mo;
                $phone = $ph;
                $gender = $gr;
                $dob = $dob;
                $date = $dt;
                $year = $yr;
                $money = $my;
                break;
            }
        }
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['student_id'])) {
    $file = 'registrations.txt';
    $lines = file($file);
    $new_lines = [];
    foreach ($lines as $line) {
        list($fn, $ln, $rm, $student_id, $fa, $mo, $ph, $gr, $dob, $dt, $yr, $my) = explode(",", trim($line));
        if ($student_id == $_POST['student_id']) {
            $fn = htmlspecialchars($_POST['first_name']);
            $ln = htmlspecialchars($_POST['last_name']);
            $rm = htmlspecialchars($_POST['room']);
            $fa = htmlspecialchars($_POST['father_name']);
            $mo = htmlspecialchars($_POST['mother_name']);
            $ph = htmlspecialchars($_POST['phone']);
            $gr = htmlspecialchars($_POST['gender']);
            $dob = htmlspecialchars($_POST['dob']);
            $dt = htmlspecialchars($_POST['date']);
            $yr = htmlspecialchars($_POST['year']);
            $my = htmlspecialchars($_POST['money']);
        }
        $new_lines[] = "$fn,$ln,$rm,$student_id,$fa,$mo,$ph,$gr,$dob,$dt,$yr,$my";
    }
    file_put_contents($file, implode("\n", $new_lines));
    header("Location: view_registrations.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>ແກ້ໄຂຂໍ້ມູນ</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f4f4f4;
        }
        .container {
            margin-top: 50px;
            padding: 20px;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>ແກ້ໄຂຂໍ້ມູນ</h1>
        <form action="edit_registration.php" method="post">
            <input type="hidden" name="student_id" value="<?= htmlspecialchars($id) ?>">
            <div class="form-group">
                <label for="first_name">ຊື່:</label>
                <input type="text" class="form-control" id="first_name" name="first_name" value="<?= htmlspecialchars($first_name) ?>" required>
            </div>
            <div class="form-group">
                <label for="last_name">ນາມສະກຸນ:</label>
                <input type="text" class="form-control" id="last_name" name="last_name" value="<?= htmlspecialchars($last_name) ?>" required>
            </div>
            <div class="form-group">
                <label for="room">ຫ້ອງ:</label>
                <input type="text" class="form-control" id="room" name="room" value="<?= htmlspecialchars($room) ?>" required>
            </div>
            <div class="form-group">
                <label for="father_name">ພໍ:</label>
                <input type="text" class="form-control" id="father_name" name="father_name" value="<?= htmlspecialchars($father_name) ?>" required>
            </div>
            <div class="form-group">
                <label for="mother_name">ແມ່:</label>
                <input type="text" class="form-control" id="mother_name" name="mother_name" value="<?= htmlspecialchars($mother_name) ?>" required>
            </div>
            <div class="form-group">
                <label for="phone">ເບີໂທລະສັບ:</label>
                <input type="text" class="form-control" id="phone" name="phone" value="<?= htmlspecialchars($phone) ?>" required>
            </div>
            <div class="form-group">
                <label for="gender">ເພດ:</label>
                <select class="form-control" id="gender" name="gender" required>
                    <option value="ຊາຍ" <?= ($gender == 'ຊາຍ') ? 'selected' : '' ?>>ຊາຍ</option>
                    <option value="ຍິງ" <?= ($gender == 'ຍິງ') ? 'selected' : '' ?>>ຍິງ</option>
                    <option value="ບໍ່ລະບຸເພດ" <?= ($gender == 'ບໍ່ລະບຸເພດ') ? 'selected' : '' ?>>ບໍ່ລະບຸເພດ</option>
                </select>
            </div>
            <div class="form-group">
                <label for="dob">ວັນເດືອນປີເກີດ:</label>
                <input type="date" class="form-control" id="dob" name="dob" value="<?= htmlspecialchars($dob) ?>" required>
            </div>
            <div class="form-group">
                <label for="date">ວັນທີ່:</label>
                <input type="date" class="form-control" id="date" name="date" value="<?= htmlspecialchars($date) ?>" required>
            </div>
            <div class="form-group">
                <label for="year">ສົກຮຽນ:</label>
                <input type="text" class="form-control" id="year" name="year" value="<?= htmlspecialchars($year) ?>" required>
            </div>
            <div class="form-group">
                <label for="money">ຈຳນວນເງິນ:</label>
                <input type="text" class="form-control" id="money" name="money" required readonly value="200.000 KIP" required>
                </div>
            <button type="submit" class="btn btn-primary btn-block">ບັນທຶກແກ້ໄຂ</button>
        </form>
    </div>
</body>
</html>