<?php
session_start();
require_once '../config/database.php'; // Kết nối database

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $MaSV = $_POST['MaSV'];

    $stmt = $conn->prepare("SELECT * FROM sinhvien WHERE MaSV = ?");
    $stmt->bind_param("s", $MaSV);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        $_SESSION['MaSV'] = $MaSV; // Lưu session đăng nhập
        header("Location: index.php"); // Chuyển hướng về trang chính
        exit();
    } else {
        echo "<script>alert('Mã Sinh Viên không tồn tại!'); window.location.href='login.php';</script>";
    }
}
?>
