<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Đăng kí</title>
    <link rel="stylesheet" href="CSS/style.css"/>
</head>
<body>
<?php
require('db.php');

    date_default_timezone_set('Asia/Ho_Chi_Minh');


if (isset($_REQUEST['username'])) {
    $username = $_REQUEST['username'];
    $email    = $_REQUEST['email'];
    $password = $_REQUEST['password'];
    $create_datetime = date("Y-m-d H:i:s");
    $query    = "INSERT into `users` (username, password, email, create_datetime)
                 VALUES ('$username', '$password', '$email', '$create_datetime')";
    $result   = mysqli_query($con, $query);
    if ($result) {
        echo "<div class='form'>
              <h3>Đăng kí thành công!</h3><br/>
              <p class='link'>Bấm vào đây để <a href='login.php'>đăng nhập</a></p>
              </div>";
    } else {
        echo "<div class='form'>
              <h3>Có sai sót thông tin!</h3><br/>
              <p class='link'>Đăng kí lại nhé! <a href='registration.php'>registration</a>Đăng kí</p>
              </div>";
    }
} else {
?>
    <form class="form" action="" method="post">
        <h1 class="login-title">Đăng kí</h1>
        <input type="text" class="login-input" name="username" placeholder="Tên đăng nhập" required />
        <input type="text" class="login-input" name="email" placeholder="Địa chỉ Email">
        <input type="password" class="login-input" name="password" placeholder="Mật khẩu">
        <input type="submit" name="submit" value="Đăng kí" class="login-button">
        <p class="link">Nếu đã có tài khoản hãy <a href="login.php">Đăng nhập.</a></p>
    </form>
<?php
}
?>

</body>
</html>
