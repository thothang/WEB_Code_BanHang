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
<!---------------------------------------------- Delivery --------------------------------------------------------->
<section class="delivery">
    <div class="container">
        <div class="delivery-top-wrap">
            <div class="delivery-top">
                <div class="delivery-top-cart delivery-top-item">
                    <i class="fas fa-shopping-cart"></i>
                </div>
                <div class="delivery-top-address delivery-top-item">
                    <i class="fas fa-map-marker-alt"></i>
                </div>
                <div class="delivery-top-payment delivery-top-item">
                    <i class="fas fa-money-check-alt"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="delivery-content row">
            <div class="delivery-content-left">
                <p>Vui Lòng Chọn Địa Chỉ Giao Hàng</p>
                <div class="delivery-content-left-dangnhap row">
                    <i class="fas fa-sign-in-alt"></i>
                    <p>Đăng Nhập(nếu bạn đã có tài khoản)</p>
                </div>
                <div class="delivery-content-left-khachle row">
                    <input type="radio" name="loaikhach" checked>
                    <p><span style="font-weight: bold;">Khách lẻ</span> (nếu bạn không muốn lưu lại thông tin)</p>
                </div>
                <div class="delivery-content-left-dangky row">
                    <input type="radio" name="loaikhach">
                    <p><span style="font-weight: bold;">Đăng ký</span> (Tạo mới tài khoản với thông tin bên dưới)</p>
                </div>
                <div class="delivery-content-left-input-top row">
                    <div class="delivery-content-left-input-top-item">
                        <label for="">Họ tên<span style="color: red;">*</span></label>
                        <input type="text">
                    </div>
                    <div class="delivery-content-left-input-top-item">
                        <label for="">Điện thoại<span style="color: red;">*</span></label>
                        <input type="text">
                    </div>
                    <div class="delivery-content-left-input-top-item">
                        <label for="">Tỉnh/Tp<span style="color: red;">*</span></label>
                        <input type="text">
                    </div>
                    <div class="delivery-content-left-input-top-item">
                        <label for="">Quận/Huyện<span style="color: red;">*</span></label>
                        <input type="text">
                    </div>
                </div>
                <div class="delivery-content-left-input-bottom row">
                    <label for="">Địa chỉ<span style="color: red;">*</span></label>
                    <input type="text">
                   
                </div>
                <div class="delivery-content-left-button row">
                    <a href="Cart.php"> <span>&#171;</span><p>Quay lại giỏ hàng</p> </a>
                    <a href="payment.php"><button><p style="font-weight: bold;">THANH TOÁN VÀ GIAO HÀNG</p></button></a>
                </div>
            </div>
            <div class="delivery-content-right">
                <table>
                    <tr>
                        <th>Tên Sản Phẩm</th>
                        <th>Số Lượng</th>
                        <th>Thành Tiền</th>
                    </tr>
                    <tr>
                        <td>Bồ Công Anh</td>
                        <td>1</td>
                        <td><p>150.000<sup>đ</sup></p></td>
                    </tr>
                    <tr>
                        <td>Bột Dây</td>
                        <td>1</td>
                        <td><p>75.000<sup>đ</sup></p></td>
                    </tr>
                    <tr>
                        <td colspan="2" style="font-weight: bold;">Tổng</td>
                        <td colspan="2"><p>225.000<sup>đ</sup></td>
                    </tr>
                    <tr>
                        <td colspan="2" style="font-weight: bold;">Thuế VAT</td>
                        <td colspan="2"><p>25.000<sup>đ</sup></td>
                    </tr>
                    <tr>
                        <td colspan="2" style="font-weight: bold;">Tổng Tiền</td>
                        <td colspan="2"><p>250.000<sup>đ</sup></td>
                    </tr>

                </table>
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