<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="IMAGE/MainLogo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/MainPage.css">
    <title>Cay Thuoc Nam</title>
</head>

<body>
   
<header>
        <div class="logo">
            <a href="index.php"><img src="IMAGE/MainLogo.png" alt="" height="50px" width="70px"></a>
        </div>
        <div class="menu">
            <li><a href="index.php">Trang Chủ</a></li>
            <li><a href="Cartegory.php">Sản Phẩm</a>
            <?php
                    include 'PHP/connect.php';

                    // Thực hiện truy vấn lấy dữ liệu từ CSDL
                    $sql = "SELECT * FROM tbl_cartegory";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        echo '<div class="cartegory-right-content row">';
                        echo '<ul class="sub-menu">';
                        // Lặp qua các hàng dữ liệu
                        while($row = $result->fetch_assoc()) {
                            
                            echo '<li><a href="">'. $row["cartegory_name"].'</a></li>'; 
                           
                        }
                      
                        echo '</ul>';
                    } 
                    $conn->close();
                ?>
               
            </li>
        </div>
        <div class="orthers">
            <li><input placeholder="Tìm Kiếm" type="text"> <i class="fas fa-search"></i></li>
            <li><a href="Cart.php"><i class="fas fa-cart-plus"></a></i></li>
            <li><a href="Login_Register/login.php"><i class="fa-solid fa-user"></i></a></li>
        </div>
    </header>
<!---------------------------------------------- cart --------------------------------------------------------->






<section class="cart">
    <div class="container">
        <div class="cart-top-wrap">
            <div class="cart-top">
                <div class="cart-top-cart cart-top-item">
                    <i class="fas fa-shopping-cart cart-top-item"></i>
                </div>
                <div class="cart-top-address cart-top-item">
                    <i class="fas fa-map-marker-alt"></i>
                </div>
                <div class="cart-top-payment cart-top-item">
                    <i class="fas fa-money-check-alt"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="cart-content row">
            <div class="cart-content-left">
                <table>
                    <tr>
                        <th>Sản Phẩm</th>
                        <th>Tên Sản Phẩm</th>
                        <th>Số lượng</th>
                        <th>Thành Tiền</th>
                        <th>Xoá</th>
                    </tr>
                    <tr>
                        <td>
                            <img src="IMAGE/SP/Bo-cong-anh.png" alt="">
                        </td>
                        <td>
                            <p>Bồ Công Anh</p>
                        </td>
                        <td>
                            <input type="number" min="1" value="1">
                        </td>
                        <td>
                            <p>150.000<sup>đ</sup></p>
                        </td>
                        <td>
                            <span>X</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img src="IMAGE/SP/Che-day.png" alt="">
                        </td>
                        <td>
                            <p>Chè Dây</p>
                        </td>
                        <td>
                            <input type="number" min="1" value="1">
                        </td>
                        <td>
                            <p>50.000<sup>đ</sup></p>
                        </td>
                        <td>
                            <span>X</span>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="cart-content-right">
                <table>
                    <tr>
                        <th colspan="2">Tổng Tiền Giỏ Hàng</th>
                    </tr>
                    <tr>
                        <td>Tổng Sản Phẩm</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>Tổng Tiền Hàng</td>
                        <td><p>300.000<sup>đ</sup></p></td>
                    </tr>
                    <tr>
                        <td>Tạm Tính</td>
                        <td><p style="color: black; font-weight: bold;">300.000<sup>đ</sup></p></td>
                    </tr>
                </table>
                <div class="cart-content-right-button">
                    <a href="delivery.php"><button>Thanh Toán</button></a>
                </div>
                <div class="cart-content-right-dangnhap">
                    <p>Hãy <a href="">Đăng Nhập</a> tài khoản của bạn để tích điểm thành viên</p>
                </div>
            </div>
        </div>
    </div>
</section>



















<div class="border-bottom">
    </div>
    <div class="footer-top">
        <li><a href="IMAGE/MainLogo.png"></a></li>
        <li><a href="https://www.facebook.com/100030450396901/">Liên Hệ</a></li>
        <li><a href="https://www.facebook.com/100030450396901/">Tuyển Dụng</a></li>
        <li><a href="">Giới Thiệu</a></li>
        <li>
            <a href="https://www.facebook.com/profile.php?id=100024832020852" class="fab fa-facebook"></a>
            <a href="https://studio.youtube.com/channel/UCVYspzJwBKi7nrjCiuT7Wbg/editing/images"
                class="fab fa-youtube"></a>
            <a href="https://twitter.com/tn28112017" class="fab fa-twitter"></a>
        </li>
    </div>
    <div class="footer-center">
        <p> Trồng và cung cấp sản phẩm cây thuốc, dược liệu. Chúng tôi luôn đảm bảo nguồn dược liệu sạch và an toàn đến
            tay khách hàng.<br>
            <br>
            VỀ CHÚNG TÔI <br>
            Công ty TNHH Dược Liệu<br>
            Số Điện Thoại: <b>0335332438</b> <br>
            Mã số thuế: 0801215631<br>
            Email: tn28112017@gmail.com<br>
            Đại diện pháp luật: Nguyễn Xuân Nhân<br>
        </p>
    </div>

    <div class="footer-bottom">
        <p>Bản quyền 2023 © Thông tin trên website chỉ mang tính chất tham khảo, khi sử dụng vui lòng hỏi ý kiến bác sĩ.
        </p>
    </div>
</body>
<script>
    const header = document.querySelector("header")
    window.addEventListener("scroll", function () {
        x = window.pageYOffset
        if (x > 0) {
            header.classList.add("sticky")
        }
        else {
            header.classList.remove("sticky")
        }
    })
</script>

</html>