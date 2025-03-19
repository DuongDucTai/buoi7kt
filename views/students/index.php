<!DOCTYPE html>
<html>

<head>
    <title>Danh Sách Sinh Viên</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <div class="header">
        <div class="user-info">
            Xin chào, <?php echo htmlspecialchars($_SESSION['maSV']) . " - " . htmlspecialchars($_SESSION['hoTen']); ?> |
            <a href="index.php?controller=auth&action=logout" class="btn btn-logout">Đăng Xuất</a>
        </div>
    </div>

    <h2>Danh Sách Sinh Viên</h2>
    
    <button class="btn btn-add" onclick="window.location.href='index.php?controller=student&action=create'">
        Thêm Sinh Viên
    </button>

    <table class="table">
        <tr>
            <th>Mã SV</th>
            <th>Họ Tên</th>
            <th>Giới Tính</th>
            <th>Ngày Sinh</th>
            <th>Hình</th>
            <th>Ngành</th>
            <th>Hành động</th>
        </tr>
        <?php foreach ($sinhViens as $row) { ?>
            <tr>
                <td><?php echo htmlspecialchars($row['MaSV']); ?></td>
                <td><?php echo htmlspecialchars($row['HoTen']); ?></td>
                <td><?php echo htmlspecialchars($row['GioiTinh']); ?></td>
                <td><?php echo htmlspecialchars($row['NgaySinh']); ?></td>
                <td>
                    <img src="<?php echo htmlspecialchars($row['Hinh']); ?>" width="50" height="50" class="student-img" alt="Hình">
                </td>
                <td><?php echo htmlspecialchars($row['TenNganh']); ?></td>
                <td>
                    <a href="index.php?controller=student&action=edit&maSV=<?php echo urlencode($row['MaSV']); ?>" class="btn btn-edit">Sửa</a>
                    <a href="index.php?controller=student&action=delete&maSV=<?php echo urlencode($row['MaSV']); ?>" class="btn btn-delete" onclick="return confirm('Bạn có chắc?')">Xóa</a>
                    <a href="index.php?controller=student&action=detail&maSV=<?php echo urlencode($row['MaSV']); ?>" class="btn btn-detail">Chi tiết</a>
                </td>
            </tr>
        <?php } ?>
    </table>
   
</body>

</html>
<?php
$content = ob_get_clean();
require_once __DIR__ . '/../layouts/main.php';
?>
