<!DOCTYPE html>
<html>

<head>
    <title>Sửa Thông Tin Sinh Viên</title>
</head>

<body>
    <div style="text-align: right;">
        Xin chào, <?php echo htmlspecialchars($_SESSION['maSV']) . " - " . htmlspecialchars($_SESSION['hoTen']); ?> |
        <a href="index.php?controller=auth&action=logout">Đăng Xuất</a>
    </div>
    <h2>Sửa Thông Tin Sinh Viên</h2>
    <form method="POST" action="index.php?controller=student&action=update&maSV=<?php echo urlencode($sinhVien['MaSV']); ?>">
        <input type="hidden" name="maSV" value="<?php echo htmlspecialchars($sinhVien['MaSV']); ?>">
        <label>Họ Tên:</label><input type="text" name="hoTen" value="<?php echo htmlspecialchars($sinhVien['HoTen']); ?>" required><br>
        <label>Giới Tính:</label>
        <select name="gioiTinh">
            <option value="Nam" <?php if ($sinhVien['GioiTinh'] == 'Nam') echo 'selected'; ?>>Nam</option>
            <option value="Nữ" <?php if ($sinhVien['GioiTinh'] == 'Nữ') echo 'selected'; ?>>Nữ</option>
        </select><br>
        <label>Ngày Sinh:</label><input type="date" name="ngaySinh" value="<?php echo htmlspecialchars($sinhVien['NgaySinh']); ?>" required><br>
        <label>Đường dẫn Hình:</label><input type="text" name="hinh" value="<?php echo htmlspecialchars($sinhVien['Hinh']); ?>"><br>
        <label>Ngành:</label>
        <select name="maNganh">
            <?php foreach ($nganhHocs as $nganh) { ?>
                <option value="<?php echo htmlspecialchars($nganh['MaNganh']); ?>" <?php if ($nganh['MaNganh'] == $sinhVien['MaNganh']) echo 'selected'; ?>>
                    <?php echo htmlspecialchars($nganh['TenNganh']); ?>
                </option>
            <?php } ?>
        </select><br>
        <input type="submit" value="Cập nhật">
    </form>
    <a href="index.php?controller=student&action=index">Quay lại</a>
</body>

</html>
<?php
$content = ob_get_clean();
require_once __DIR__ . '/../layouts/main.php';
?>