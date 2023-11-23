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
    <!-- product -->


    <section class="product">
        <div class="container">
            <div class="product-top row">
            </div>
            <div class="product-content row">
                <div class="product-content-left row">
                    <div class="product-content-left-big-img">
                        <?php
                            include 'PHP/connect.php';

                            if (!isset($_GET['product_id']) || $_GET['product_id'] == null) {
                                echo "<script> window.location = 'Cartegory.php'</script>";
                            } else {
                                $product_id = $_GET['product_id'];
                            }

                            $sql = "SELECT * FROM tbl_product WHERE product_id = '$product_id'";
                            $result = $conn->query($sql); // Thực hiện truy vấn

                            if ($result->num_rows > 0) {
                                $row = $result->fetch_assoc();
                                echo '<img src="IMAGE/SP/'.$row["product_img"].'" alt="">';
                            } else {
                                echo "Không tìm thấy sản phẩm với ID: $product_id";
                            }
                            ?>

                         </div>
                            <div class="product-content-left-small-img">
                            <?php

                            $sql1 = "SELECT * FROM tbl_product_img_desc WHERE product_id = '$product_id'";
                            $result1 = $conn->query($sql1); // Thực hiện truy vấn

                            if ($result1->num_rows > 0) {
                                while($row1 = $result1->fetch_assoc()) {
                                    echo '<img src="IMAGE/SP/'.$row1["product_img_desc"].'" alt="">';
                                }
                                
                            } else {
                                echo "Không tìm thấy hình ảnh và mô tả cho sản phẩm với ID: $product_id";
                            }
                            ?>
                    </div>
                </div>
                <div class="product-content-right">
                    <div class="product-content-right-product-name">
                        <?php echo'<h1>'.$row["product_name"].'</h1>';?>
                    </div>
                    <div class="product-content-right-product-price">
                    <?php echo'<p>'.$row["product_price"].'<sup>đ</sup></p>';?>
                    </div>
                    <div class="product-content-right-product-quantity">
                        <p style="font-weight: bold;">Số Lượng:</p>
                        <input type="number" min="0" value="1">
                        <p></p>
                    </div>
                    <div class="product-content-right-product-button">
                        <button><i class="fas fa-shopping-cart"></i>
                            <a href=""><p>MUA HÀNG</p></a>
                            
                        </button>
                    </div>

                    <div class="product-content-right-bottom">
                        <div class="product-content-right-bottom-top">
                            &#8744;
                        </div>
                        <div class="product-content-right-bottom-content-big">
                            <div class="product-content-right-bottom-content-title row">
                                <div class="product-content-right-bottom-content-title-item mota">
                                    <p>Mô Tả</p>
                                </div>
                                <div class="product-content-right-bottom-content-title-item thanhphan">
                                    <p>Thành Phần</p>
                                </div>
                                <div class="product-content-right-bottom-content-title-item congdung">
                                    <p>Công Dụng</p>
                                </div>
                            </div>
                            
                            <div class="product-content-right-bottom-content">
                                <div class="product-content-right-bottom-content-mota">
                                <?php echo'<p>'.$row["product_textarea_mota"].'</p>';?>
                                </div>
                                <div class="product-content-right-bottom-content-thanhphan">
                                <?php echo'<p>'.$row["product_textarea_thanhphan"].'</p>';?>
                                </div>
                                <div class="product-content-right-bottom-content-congdung">
                                <?php echo'<p>'.$row["product_textarea_congdung"].'</p>';?>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>








    <!-- footer -->
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

    const bigImg = document.querySelector(".product-content-left-big-img img")
    const smallImg = document.querySelectorAll(".product-content-left-small-img img")
    smallImg.forEach(function(imgItem, x){
        imgItem.addEventListener("click", function(){
            bigImg.src = imgItem.src
        })
    });


    const mota = document.querySelector(".mota")
const thanhphan = document.querySelector(".thanhphan")
const congdung = document.querySelector(".congdung")
if(mota){
    mota.addEventListener("click", function(){
        document.querySelector(".product-content-right-bottom-content-thanhphan").style.display = "none"
        document.querySelector(".product-content-right-bottom-content-congdung").style.display = "none"
        document.querySelector(".product-content-right-bottom-content-mota").style.display = "block"
    })
}
if(thanhphan){
    thanhphan.addEventListener("click", function(){
        document.querySelector(".product-content-right-bottom-content-congdung").style.display = "none"
        document.querySelector(".product-content-right-bottom-content-mota").style.display = "none"
        document.querySelector(".product-content-right-bottom-content-thanhphan").style.display = "block"
    })
}
if(congdung){
    congdung.addEventListener("click", function(){
        document.querySelector(".product-content-right-bottom-content-thanhphan").style.display = "none"
        document.querySelector(".product-content-right-bottom-content-mota").style.display = "none"
        document.querySelector(".product-content-right-bottom-content-congdung").style.display = "block"
    })
    const button = document.querySelector(".product-content-right-bottom-top")
    if(button){
        button.addEventListener("click", function(){
            document.querySelector(".product-content-right-bottom-content-big").classList.toggle("activeB")
        })
    }
}
</script>


</html>