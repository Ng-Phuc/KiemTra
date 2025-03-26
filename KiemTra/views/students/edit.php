<form action="index.php?action=update&id=<?php echo $student['MaSV']; ?>" method="POST">
    <input type="hidden" name="MaSV" value="<?php echo $student['MaSV']; ?>">
    <label>Họ Tên:</label>
    <input type="text" name="HoTen" value="<?php echo $student['HoTen']; ?>" required><br>

    <label>Giới Tính:</label>
    <select name="GioiTinh">
        <option value="Nam" <?php if ($student['GioiTinh'] == 'Nam') echo 'selected'; ?>>Nam</option>
        <option value="Nữ" <?php if ($student['GioiTinh'] == 'Nữ') echo 'selected'; ?>>Nữ</option>
    </select><br>

    <label>Ngày Sinh:</label>
    <input type="date" name="NgaySinh" value="<?php echo $student['NgaySinh']; ?>" required><br>

    <label>Hình Ảnh:</label>
    <input type="text" name="Hinh" value="<?php echo $student['Hinh']; ?>"><br>

    <label>Ngành Học:</label>
    <input type="text" name="MaNganh" value="<?php echo $student['MaNganh']; ?>" required><br>

    <button type="submit">Cập nhật</button>
</form>
