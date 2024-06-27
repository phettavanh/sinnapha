<!DOCTYPE html>
<html>
<head>
    <title>ລາຍຊື່ລົງທະບຽນ</title>
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
        table {
            width: 100%;
            margin-top: 20px;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .btn-edit {
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>ລາຍຊືລົງທະບຽນ</h1>
        <?php
        $file = 'registrations.txt';
        if (file_exists($file) && filesize($file) > 0) {
            $lines = file($file);
            if (count($lines) > 0) {
                echo "<table class='table table-bordered'>";
                echo "<thead>
                        <tr>
                            <th>ຊື່</th>
                            <th>ນາມສະກຸນ</th>
                            <th>ຫ້ອງ</th>
                            <th>ID</th>
                            <th>ພໍ່</th>
                            <th>ແມ່</th>
                            <th>ເບີໂທລະສັບ</th>
                            <th>ເພດ</th>
                            <th>ວັນເດືອນປີເກີດ</th>
                            <th>ວັນທີ່</th>
                            <th>ສົກຮຽນ</th>
                            <th>ຄ່າຮຽນ</th>
                            <th>ແກ້ໄຂ</th>
                        </tr>
                      </thead>";
                echo "<tbody>";
                foreach ($lines as $line) {
                    list($fn, $ln, $rm, $id, $fa, $mo, $ph, $gender, $dob, $dt, $yr, $my) = explode(",", trim($line));
                    echo "<tr>
                            <td>$fn</td>
                            <td>$ln</td>
                            <td>$rm</td>
                            <td>$id</td>
                            <td>$fa</td>
                            <td>$mo</td>
                            <td>$ph</td>
                            <td>$gender</td>
                            <td>$dob</td>
                            <td>$dt</td>
                            <td>$yr</td>
                            <td>$my</td>
                            <td>
                                <a href='edit_registration.php?id=$id' class='btn btn-warning btn-sm btn-edit'>ແກ້ໄຂ</a>
                            </td>
                          </tr>";
                }
                echo "</tbody>";
                echo "</table>";
            } else {
                echo "<p>ບໍມີຂໍ້ມູນລົງທະບຽນ</p>";
            }
        } else {
            echo "<p>ບໍມີຂໍ້ມູນລົງທະບຽນ</p>";
        }
        ?>
        <a href="register.php" class="btn btn-secondary btn-block mt-3">ໄປຫນ້າລົງທະບຽນ</a>
    </div>
</body>
</html>