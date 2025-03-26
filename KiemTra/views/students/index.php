<!DOCTYPE html>
<html>
<head>
    <title>Quản lý Sinh Viên</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <h2>Danh sách Sinh Viên</h2>
        <a href="index.php?action=create" class="btn btn-primary mb-2">Thêm Sinh Viên</a>
        <table class="table table-bordered">
            <tr>
                <th>Mã SV</th>
                <th>Họ Tên</th>
                <th>Giới Tính</th>
                <th>Ngày Sinh</th>
                <th>Hình Ảnh</th>
                <th>Ngành Học</th>
                <th>Hành Động</th>
            </tr>
            <?php foreach ($students as $student) : ?>
                <tr>
                    <td><?php echo $student['MaSV']; ?></td>
                    <td><?php echo $student['HoTen']; ?></td>
                    <td><?php echo $student['GioiTinh']; ?></td>
                    <td><?php echo $student['NgaySinh']; ?></td>
                    <td><img src="<?php echo $student['Hinh']; ?>" width="50"></td>
                    <td><?php echo $student['MaNganh']; ?></td>
                    <td>
                    <a href="index.php?action=edit&id=<?php echo urlencode($student['MaSV']); ?>" class="btn btn-warning btn-sm">Sửa</a>
                    <a href="index.php?action=delete&id=<?php echo urlencode($student['MaSV']); ?>" 
                        class="btn btn-danger btn-sm"
                        onclick="return confirm('Bạn có chắc chắn muốn xóa sinh viên này không?');">
                        Xóa
                    </a>    
                    <a href="index.php?action=detail&id=<?php echo urlencode($student['MaSV']); ?>" class="btn btn-info btn-sm">Chi tiết</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>
</html>