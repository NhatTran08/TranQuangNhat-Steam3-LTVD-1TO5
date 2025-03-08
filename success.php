<?php
session_start();

// Kiểm tra nếu chưa có session thì thử lấy từ Cookie
if (!isset($_SESSION["username"]) && isset($_COOKIE["username"])) {
    $_SESSION["username"] = $_COOKIE["username"]; // Khôi phục session từ Cookie
}

// Nếu vẫn không có username => quay về login.php
if (!isset($_SESSION["username"])) {
    header("Location: ./login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success</title>
</head>
<body>
    <h2>Đăng nhập thành công!</h2>
    <p>Chào mừng, <?= htmlspecialchars($_SESSION["username"]) ?>!</p>
    <a href="logout.php">Đăng xuất</a>
</body>
</html>
