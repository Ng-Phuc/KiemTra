<!DOCTYPE html>
<html>
<head>
    <title>Thêm Sinh Viên</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <h2>Thêm Sinh Viên</h2>
        <form action="index.php?action=store" method="post">
            <div class="mb-3">
                <label for="MaSV" class="form-label">Mã Sinh Viên</label>
                <input type="text" class="form-control" id="MaSV" name="MaSV" required>
            </div>
            <div class="mb-3">
                <label for="HoTen" class="form-label">Họ Tên</label>
                <input type="text" class="form-control" id="HoTen" name="HoTen" required>
            </div>
            <div class="mb-3">
                <label for="GioiTinh" class="form-label">Giới Tính</label>
                <select class="form-control" id="GioiTinh" name="GioiTinh">
                    <option value="Nam">Nam</option>
                    <option value="Nữ">Nữ</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="NgaySinh" class="form-label">Ngày Sinh</label>
                <input type="date" class="form-control" id="NgaySinh" name="NgaySinh" required>
            </div>
            <div class="mb-3">
                <label for="Hinh" class="form-label">Hình Ảnh (URL)</label>
                <input type="text" class="form-control" id="Hinh" name="Hinh">
            </div>
            <div class="mb-3">
                <label for="MaNganh" class="form-label">Ngành Học</label>
                <input type="text" class="form-control" id="MaNganh" name="MaNganh" required>
            </div>
            <button type="submit" class="btn btn-primary">Lưu</button>
            <a href="index.php?action=index" class="btn btn-secondary">Quay lại</a>
        </form>
    </div>
</body>
</html>
