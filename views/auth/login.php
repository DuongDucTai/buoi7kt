<!DOCTYPE html>
<html>

<head>
    <title>Đăng Nhập</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <h2>Đăng Nhập</h2>
    <?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
    <form method="POST" action="index.php?controller=auth&action=login">
        <label>Mã Sinh Viên:</label><br>
        <input type="text" name="maSV" required><br>
        <input type="submit" value="Đăng Nhập">
    </form>
</body>

</html>
<?php
$content = ob_get_clean();
require_once __DIR__ . '/../layouts/main.php';
?>


