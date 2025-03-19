<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($title) ? htmlspecialchars($title) : 'Quản Lý Sinh Viên'; ?></title>
    <!-- Thêm Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Thêm CSS tùy chỉnh -->
    <link rel="stylesheet" href="/2180606572_PhanHieuNghia_KT/css/style.css">
</head>

<body>
    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="index.php?controller=student&action=index">Quản Lý Sinh Viên</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?controller=student&action=index">Danh Sách Sinh Viên</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?controller=course&action=register">Đăng Ký Học Phần</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <?php if (isset($_SESSION['maSV'])) { ?>
                        <li class="nav-item">
                            <span class="nav-link">Xin chào, <?php echo htmlspecialchars($_SESSION['maSV']) . " - " . htmlspecialchars($_SESSION['hoTen']); ?></span>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?controller=auth&action=logout">Đăng Xuất</a>
                        </li>
                    <?php } else { ?>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?controller=auth&action=login">Đăng Nhập</a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Nội dung chính -->
    <div class="container mt-4">
        <?php echo $content; ?>
    </div>

    <!-- Footer -->
    <footer class="bg-light text-center py-3 mt-4">
        <p>&copy; 2025 - Duong Duc Tai</p>
    </footer>

    <!-- Thêm Bootstrap JS và Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
</body>

</html>