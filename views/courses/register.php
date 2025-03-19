<!DOCTYPE html>
<html>

<head>
    <title>Đăng Ký Học Phần</title>
</head>

<body>
    <div style="text-align: right;">
        Xin chào, <?php echo htmlspecialchars($_SESSION['maSV']) . " - " . htmlspecialchars($_SESSION['hoTen']); ?> |
        <a href="index.php?controller=auth&action=logout">Đăng Xuất</a>
    </div>
    <h2>Đăng Ký Học Phần</h2>
    <?php if ($successMessage) echo "<p style='color:green;'>$successMessage</p>"; ?>
    <form method="POST" action="index.php?controller=course&action=register">
        <label>Mã SV:</label><input type="text" name="maSV" required><br>
        <label>Danh sách học phần:</label><br>
        <?php foreach ($hocPhans as $rowHP) { ?>
            <input type="checkbox" name="hocPhan[]" value="<?php echo htmlspecialchars($rowHP['MaHP']); ?>">
            <?php echo htmlspecialchars($rowHP['TenHP']) . " (" . htmlspecialchars($rowHP['SoTinChi']) . " tín chỉ, Số lượng: " . htmlspecialchars($rowHP['SoLuongDuKien']) . ")<br>"; ?>
        <?php } ?>
        <input type="submit" name="register" value="Đăng Ký">
    </form>
    <a href="index.php?controller=student&action=index">Quay lại</a>
</body>

</html>