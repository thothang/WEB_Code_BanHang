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
    <!-------------------------------------------- cartegory ---------------------------->
    <section class="cartegory">
        <div class="container">
           
        </div>
        <div class="container">
            <div class="row">

            <?php
                    include 'PHP/connect.php';

                    // Thực hiện truy vấn lấy dữ liệu từ CSDL
                    $sql = "SELECT * FROM tbl_cartegory ORDER BY cartegory_id DESC";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        echo '<div class="cartegory-left">';
                        echo '<ul>';
                        // Lặp qua các hàng dữ liệu
                        while($row = $result->fetch_assoc()) {
                            echo '<li class="cartegory-left-li"><a href="">'. $row["cartegory_name"].'</a></li>'; 
                        }
                      
                        echo '</ul>';
                        echo '</div>';
                    } 
                    $conn->close();
                ?>

               
                <div class="cartegory-right row">
                    <div class="cartegory-right-top-item">
                        <p>Mất Ngủ - Stress</p>
                    </div>
                    <div class="cartegory-right-top-item">
                        <select name="" id="">
                            <option value="">Sắp Xếp</option>
                            <option value="">Giá Cao Đến Thấp</option>
                            <option value="">Giá Thấp Đến Cao</option>
                        </select>
                    </div>

                    
                    <?php
                    include 'PHP/connect.php';

                    // Thực hiện truy vấn lấy dữ liệu từ CSDL
                    $sql = "SELECT * FROM tbl_product";
                    $result = $conn->query($sql);
                
                    if ($result->num_rows > 0) {
                        // Bắt đầu div cha
                        echo '<div class="cartegory-right-content row">';
                
                        // Lặp qua các hàng dữ liệu
                        while($row = $result->fetch_assoc()) {
                            // Bắt đầu div con
                            echo '<div class="cartegory-right-content-item">';
                            // Kiểm tra và hiển thị ảnh
                          
                            echo '<a href="Product.php?product_id='.$row["product_id"].'"><img src="IMAGE/SP/'.$row["product_img"].'" alt="">';

                            // Hiển thị các cột của hàng dữ liệu
                            echo '<h1>' . $row["product_name"].'</h1>';
                            echo '<p>' . $row["product_price"].'<sup>đ</sup></p></a>';
                
                            // Kết thúc div con
                            echo '</div>';
                        }
                
                        // Kết thúc div cha
                        echo '</div>';
                    } else {
                        echo "Không tìm thấy sản phẩm nào.";
                    }
                
                    // Ngắt kết nối CSDL
                    $conn->close();
                ?>

                    
                    <div class="cartegory-right-bottom row">
                        <div class="cartegory-right-bottom-item">
                            <p>Hiển Thị 2 <span>|</span> 4 Sản Phẩm</p>
                        </div>
                        <div class="cartegory-right-bottom-item">
                            <p><span>« 1 2 3 4 5 »</span> Trang Cuối</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-------------------------------------------- footer----------------------------------->
    <div class="border-bottom">
    </div>
    </section>
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
            header.classList.re("sticky")
        }
    })
</script>

</html>