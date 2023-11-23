<?php
include("auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard - Client area</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <div class="form">
        <p>Xin chào, <?php echo $_SESSION['username']; ?>!</p>
        <p>Hân hạnh chào đón bạn! </p>
        <p><a href="logout.php">Đăng xuất</a></p>
    </div>
</body>
</html>
