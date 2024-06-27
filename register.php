<!DOCTYPE html>
<html>
<head>
    <title>ລົງທະບຽນ</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" />

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
            font-weight: bold;
            color: #007bff;

        }
    </style>
</head>
<body>
    <div class="container">
    <a href="index.php" class="btn btn-secondary mb-3" style="background-color: #007bff; color: #fff;">
    <i class="fas fa-arrow-left"></i> ກັບຫາໜ້າຫນ້າຫຼັກ </a>
        <h1>ລົງທະບຽນ</h1>
        <form action="save_registration.php" method="post">
            <input type="hidden" name="id" value="">
            <div class="form-group">
                <label for="first_name">ຊື້:</label>
                <input type="text" class="form-control" id="first_name" name="first_name" required>
            </div>
            <div class="form-group">
                <label for="last_name">ນາມສະກຸນ:</label>
                <input type="text" class="form-control" id="last_name" name="last_name" required>
            </div>
            <div class="form-group">
                <label for="room">ຫ້ອງ:</label>
                <input type="text" class="form-control" id="room" name="room" required>
            </div>
            <div class="form-group">
                <label for="student_id">ID:</label>
                <input type="text" class="form-control" id="student_id" name="student_id" required>
            </div>
            <div class="form-group">
                <label for="father_name">ພໍ່:</label>
                <input type="text" class="form-control" id="father_name" name="father_name" required>
            </div>
            <div class="form-group">
                <label for="mother_name">ແມ່:</label>
                <input type="text" class="form-control" id="mother_name" name="mother_name" required>
            </div>
            <div class="form-group">
                <label for="phone">ເບີໂທລະສັບ:</label>
                <input type="text" class="form-control" id="phone" name="phone" required>
            </div>
            <div class="form-group">
                <label for="gender">ເພດ:</label>
                <select class="form-control" id="gender" name="gender" required>
                    <option value="">ເລືອກເພດ</option>
                    <option value="ຊາຍ">ຊາຍ</option>
                    <option value="ຍິງ">ຍິງ</option>
                    <option value="ບໍ່ລະບຸເພດ">ບໍ່ລະບຸເພດ</option>
                </select>
            </div>
            <div class="form-group">
                <label for="dob">ວັນເດືອນປີເກີດ:</label>
                <input type="date" class="form-control" id="dob" name="dob" required>
            </div>
            <div class="form-group">
                <label for="date">ວັນທີ່:</label>
                <input type="date" class="form-control" id="date" name="date" required>
            </div>
            <div class="form-group">
                <label for="year">ສົກຮຽນ:</label>
                <input type="text" class="form-control" id="year" name="year" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">ລົງທະບຽນ</button>
        </form>
        <a href="view_registrations.php" class="btn btn-secondary btn-block mt-3">ຂໍ້ມູນລົງທະບຽນ</a>
        <a href="search_registration.php" class="btn btn-secondary btn-block mt-3">ຄົ້ນຫາຂໍ້ມູນລົງທະບຽນ</a>
    </div>
</body>
</html>