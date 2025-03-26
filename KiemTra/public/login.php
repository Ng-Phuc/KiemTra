<?php
session_start();
require_once '../config/database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $maSV = $_POST['maSV'];

    try {
        // Chuẩn bị truy vấn với PDO
        $stmt = $conn->prepare("SELECT * FROM sinhvien WHERE MaSV = :maSV");
        $stmt->bindParam(":maSV", $maSV, PDO::PARAM_STR);
        $stmt->execute();

        $student = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($student) {
            $_SESSION['MaSV'] = $student['MaSV']; // Lưu session
            header("Location: main.php"); // Chuyển hướng sau khi đăng nhập
            exit();
        } else {
            $error = "Mã sinh viên không tồn tại!";
        }
    } catch (PDOException $e) {
        $error = "Lỗi kết nối cơ sở dữ liệu: " . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>ĐĂNG NHẬP</h2>
        <?php if (isset($error)) echo "<div class='alert alert-danger'>$error</div>"; ?>
        <form method="POST" action="">
            <div class="mb-3">
                <label class="form-label">Mã SV</label>
                <input type="text" class="form-control" name="maSV" required>
            </div>
            <button type="submit" class="btn btn-primary">Đăng Nhập</button>
        </form>
    </div>
</body>
</html>
