<!DOCTYPE html>
<html>
<head>
    <title>ການຄົ້ນຫາ</title>
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
    </style>
</head>
<body>
    <div class="container">
        <h1>ການຄົ້ນຫາ</h1>
        <?php
        if (isset($_GET['query'])) {
            $query = htmlspecialchars($_GET['query']);
            $file = 'registrations.txt';
            $lines = file($file);
            $results = [];

            foreach ($lines as $line) {
                if (stripos($line, $query) !== false) {
                    $results[] = $line;
                }
            }

            if (count($results) > 0) {
                echo "<table class='table table-bordered'>";
                echo "<thead>
                        <tr>
                            <th>ຊື່</th>
                            <th>ນາມສະກຸນ</th>
                            <th>ຫ້ອງ</th>
                            <th>ID</th>
                            <th>ພໍ</th>
                            <th>ແມ່</th>
                            <th>ເບີໂທລະສັບ</th>
                            <th>ເພດ</th>
                            <th>ວັນເດືອນປີເກີດ</th>
                            <th>ວັນທີ່</th>
                            <th>ສົກຮຽນ</th>
                            <th>ແກ້ໄຂ</th>
                        </tr>
                      </thead>";
                echo "<tbody>";
                foreach ($results as $result) {
                    list($fn, $ln, $rm, $id, $fa, $mo, $ph, $gender, $dob, $dt, $yr) = explode(",", trim($result));
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
                            <td>
                                <a href='edit_registration.php?id=$id' class='btn btn-warning btn-sm'>แก้ไข</a>
                            </td>
                          </tr>";
                }
                echo "</tbody>";
                echo "</table>";
            } else {
                echo "<p>ບໍ່ມີລາຍຊື່</p>";
            }
        } else {
            echo "<p>กรุณากรอกข้อมูลค้นหา</p>";
        }
        ?>
        <a href="search_registration.php" class="btn btn-secondary btn-block mt-3">ຄົ້ນຫາໃໝ່</a>
        <a href="register.php" class="btn btn-secondary btn-block mt-3">ກັບໄປຫນ້າລົງທະບຽນ</a>
    </div>
</body>
</html>