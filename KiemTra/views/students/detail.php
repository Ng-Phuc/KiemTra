<!DOCTYPE html>
<html>
<head>
    <title>Chi tiết Sinh Viên</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            width: 80%;
            margin: 40px auto;
            padding: 20px;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .student-info {
            margin-bottom: 20px;
        }
        .student-info p {
            margin-bottom: 10px;
        }
        .student-image {
            text-align: center;
            margin-bottom: 20px;
        }
        .student-image img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
        }
        .back-button {
            text-align: center;
            margin-top: 20px;
        }
        .back-button a {
            text-decoration: none;
            color: #337ab7;
        }
        .back-button a:hover {
            color: #23527c;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Thông tin Sinh Viên</h2>
        <div class="student-info">
            <p>Mã SV: <?php echo $student['MaSV']; ?></p>
            <p>Họ Tên: <?php echo $student['HoTen']; ?></p>
            <p>Giới Tính: <?php echo $student['GioiTinh']; ?></p>
            <p>Ngày Sinh: <?php echo $student['NgaySinh']; ?></p>
            <p>Ngành Học: <?php echo $student['MaNganh']; ?></p>
        </div>
        <div class="student-image">
            <img src="<?php echo $student['Hinh']; ?>" alt="Hình ảnh sinh viên">
        </div>
        <div class="back-button">
            <a href="index.php">Quay lại</a>
        </div>
    </div>
</body>
</html>