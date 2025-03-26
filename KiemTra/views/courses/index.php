<!DOCTYPE html>
<html>
<head>
    <title>Danh sách Học Phần</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <h2>Danh sách Học Phần</h2>
        <table class="table table-bordered">
            <tr>
                <th>Mã Học Phần</th>
                <th>Tên Học Phần</th>
                <th>Số Tín Chỉ</th>
                <th>Hành Động</th>
            </tr>
            <?php foreach ($courses as $course) : ?>
                <tr>
                    <td><?php echo $course['MaHP']; ?></td>
                    <td><?php echo $course['TenHP']; ?></td>
                    <td><?php echo $course['SoTinChi']; ?></td>
                    <td>
                        <a href="index.php?action=register&id=<?php echo urlencode($course['MaHP']); ?>" class="btn btn-success btn-sm">Đăng Ký</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>
</html>
