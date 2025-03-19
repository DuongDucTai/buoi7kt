<!DOCTYPE html>
<html>

<head>
    <title>Thêm Sinh Viên</title>
</head>

<body>
    <div style="text-align: right;">
        Xin chào, <?php echo htmlspecialchars($_SESSION['maSV']) . " - " . htmlspecialchars($_SESSION['hoTen']); ?> |
        <a href="index.php?controller=auth&action=logout">Đăng Xuất</a>
    </div>
    <h2>Thêm Sinh Viên</h2>
    <form method="POST" action="index.php?controller=student&action=store">
        <label>Mã SV:</label><input type="text" name="maSV" required><br>
        <label>Họ Tên:</label><input type="text" name="hoTen" required><br>
        <label>Giới Tính:</label>
        <select name="gioiTinh">
            <option value="Nam">Nam</option>
            <option value="Nữ">Nữ</option>
        </select><br>
        <label>Ngày Sinh:</label><input type="date" name="ngaySinh" required><br>
        <label>Đường dẫn Hình:</label><input type="text" name="hinh" value="/Content/images/default.jpg"><br>
        <label>Ngành:</label>
        <select name="maNganh">
            <?php foreach ($nganhHocs as $nganh) { ?>
                <option value="<?php echo htmlspecialchars($nganh['MaNganh']); ?>">
                    <?php echo htmlspecialchars($nganh['TenNganh']); ?>
                </option>
            <?php } ?>
        </select><br>
        <input type="submit" value="Thêm">
    </form>
    <a href="index.php?controller=student&action=index">Quay lại</a>
</body>

</html>