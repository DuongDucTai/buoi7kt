<!DOCTYPE html>
<html>

<head>
    <title>Chi Tiết Sinh Viên</title>
</head>

<body>
    <div style="text-align: right;">
        Xin chào, <?php echo htmlspecialchars($_SESSION['maSV']) . " - " . htmlspecialchars($_SESSION['hoTen']); ?> |
        <a href="index.php?controller=auth&action=logout">Đăng Xuất</a>
    </div>
    <h2>Thông Tin Chi Tiết</h2>
    <p>Mã SV: <?php echo htmlspecialchars($sinhVien['MaSV']); ?></p>
    <p>Họ Tên: <?php echo htmlspecialchars($sinhVien['HoTen']); ?></p>
    <p>Giới Tính: <?php echo htmlspecialchars($sinhVien['GioiTinh']); ?></p>
    <p>Ngày Sinh: <?php echo htmlspecialchars($sinhVien['NgaySinh']); ?></p>
    <p>Hình: <img src="<?php echo htmlspecialchars($sinhVien['Hinh']); ?>" width="50" alt="Hình"></p>
    <p>Ngành: <?php echo htmlspecialchars($sinhVien['MaNganh']); ?></p>
    <a href="index.php?controller=student&action=index">Quay lại</a>
</body>

</html>
<?php
$content = ob_get_clean();
require_once __DIR__ . '/../layouts/main.php';
?>