<!DOCTYPE html>
<html>
<head>
    <title>ຄົ້ນຫານັກຮຽນ</title>
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
        <h1>ຄົ້ນຫານັກຮຽນ</h1>
        <form action="search_results.php" method="get">
            <div class="form-group">
                <label for="query">ຄົ້ນຫາ:</label>
                <input type="text" class="form-control" id="query" name="query" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">ຄົ້ນຫາ</button>
        </form>
    </div>
</body>
</html>