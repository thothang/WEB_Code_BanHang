<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="CSS/style.css"/>
</head>
<body>
<?php
    require('db.php');
    session_start();
    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);   
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $query    = "SELECT * FROM `users` WHERE username='$username'
                     AND password='$password'";
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['username'] = $username;
            header("Location: ../index.php");
        } else {
            echo "<div class='form'>
                  <h3>Sai tên đăng nhập hoặc mật khẩu!</h3><br/>
                  <p class='link'>Bấm vào đây để <a href='login.php'>thử lại</a></p>
                  </div>";
        }
    } else {
?>
    <form class="form" method="post" name="login">
        <h1 class="login-title">Đăng nhập</h1>
        <input type="text" class="login-input" name="username" placeholder="Tên đăng nhập" autofocus="true"/>
        <input type="password" class="login-input" name="password" placeholder="Mật khẩu"/>
        <input type="submit" value="Đăng nhập" name="submit" class="login-button"/>
        <p class="link">Chưa có tài khoản? <a href="registration.php">Đăng kí</a></p>
    </form>
<?php
    }
?>
</body>
</html>
