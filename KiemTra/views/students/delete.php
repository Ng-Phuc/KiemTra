<!DOCTYPE html>
<html>
<head>
    <title>Xóa Sinh Viên</title>
</head>
<body>
    <h2>Bạn có chắc chắn muốn xóa sinh viên này không?</h2>
    <form method="POST" action="index.php?action=destroy&id=<?php echo $_GET['id']; ?>">
        <button type="submit">Xóa</button>
        <a href="index.php">Hủy</a>
    </form>
</body>
</html>