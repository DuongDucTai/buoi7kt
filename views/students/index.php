<!DOCTYPE html>
<html>

<head>
    <title>Danh Sách Sinh Viên</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <div style="text-align: right;">
        Xin chào, <?php echo htmlspecialchars($_SESSION['maSV']) . " - " . htmlspecialchars($_SESSION['hoTen']); ?> |
        <a href="index.php?controller=auth&action=logout">Đăng Xuất</a>
    </div>
    <h2>Danh Sách Sinh Viên</h2>
    <table border="1">
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
                <td><img src="<?php echo htmlspecialchars($row['Hinh']); ?>" width="50" alt="Hình"></td>
                <td><?php echo htmlspecialchars($row['TenNganh']); ?></td>
                <td>
                    <a href="index.php?controller=student&action=edit&maSV=<?php echo urlencode($row['MaSV']); ?>">Sửa</a> |
                    <a href="index.php?controller=student&action=delete&maSV=<?php echo urlencode($row['MaSV']); ?>" onclick="return confirm('Bạn có chắc?')">Xóa</a> |
                    <a href="index.php?controller=student&action=detail&maSV=<?php echo urlencode($row['MaSV']); ?>">Chi tiết</a>
                </td>
            </tr>
        <?php } ?>
    </table>
    <a href="index.php?controller=student&action=create">Thêm Sinh Viên</a>
</body>

</html>