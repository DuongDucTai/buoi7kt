<!DOCTYPE html>
<html>

<head>
    <title>Đăng Ký Học Phần</title>
    <style>
        .hocphan-list {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            gap: 5px;
        }

        .hocphan-item {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .hocphan-item input {
            width: 16px;
            height: 16px;
        }
    </style>
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
        <label>Danh sách học phần:</label>
        <div class="hocphan-list">
            <?php foreach ($hocPhans as $rowHP) { ?>
                <div class="hocphan-item">
                    <input type="checkbox" name="hocPhan[]" value="<?php echo htmlspecialchars($rowHP['MaHP']); ?>">
                    <span><?php echo htmlspecialchars($rowHP['TenHP']) . " (" . htmlspecialchars($rowHP['SoTinChi']) . " tín chỉ, Số lượng: " . htmlspecialchars($rowHP['SoLuongDuKien']) . ")"; ?></span>
                </div>
            <?php } ?>
        </div>
        <button type="submit" name="register" class="btn btn-register">Đăng Ký</button>
    </form>
    <a href="index.php?controller=student&action=index">Quay lại</a>
</body>

</html>
<?php
$content = ob_get_clean();
require_once __DIR__ . '/../layouts/main.php';
?>