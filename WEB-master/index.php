

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
    <div style=" display: flex;justify-content: center;align-items: center; background-color: #96df98;" class="div-top">
        <div class="row" style="text-align: center;display: inline-block; width: 95%;">
            <div class="col px-1">
                <div id="demo" class="carousel slide" data-ride="carousel">

                    <ul class="carousel-indicators">
                        <li data-target="#demo" data-slide-to="0" class="active"></li>
                        <li data-target="#demo" data-slide-to="1"></li>
                        <li data-target="#demo" data-slide-to="2"></li>
                    </ul>

                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="IMAGE/silde1.png" alt="" width="60%" height="300"
                                class="img-slide img-transition">
                        </div>
                        <div class="carousel-item">
                            <img src="IMAGE/slide2.png" alt="" width="60%" height="300"
                                class="img-slide img-transition">
                        </div>
                        <div class="carousel-item">
                            <img src="IMAGE/slide3.png" alt="" width="60%" height="300"
                                class="img-slide img-transition">
                        </div>
                    </div>

                    <a class="carousel-control-prev" href="#demo" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>

                    <a class="carousel-control-next" href="#demo" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>

                </div>
            </div>
        </div>
    </div>
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
    <section class="app-container-index">
        <div class="container">
            <h1>Giới thiệu về Công Ty Dược liệu</h1>
            <p>Công ty TNHH Dược Liệu được thành lập vào tháng 6 năm 2017. Với lợi thế liên kết với vùng trồng dược liệu sạch tại vùng núi Hòa Bình, nơi đây được thiên nhiên ưu ái với khí hậu ôn hòa, mát mẻ, thuận lợi cho việc trồng các cây dược liệu quý hiếm. Sau nhiều năm nghiên cứu và cấy trồng các giống cây thuốc, chúng tôi đã trở thành đơn vị cung ứng dược liệu hàng đầu tại Việt Nam.</p>
            <p>Các loại dược liệu mà cung cấp đều được áp dụng công nghệ và quy trình sản xuất tiên tiến. Nhờ vậy mà dược tính được giữ lại tốt nhất. Chúng tôi luôn chọn những cây đáp ứng đủ tiêu chí xanh – sạch – khỏe mạnh để đưa đến khách hàng.</p>
            <p>Ngoài ra, Dược liệu cung cấp đầy đủ các loại cây thuốc nam, dược liệu, đồ ngâm rượu với giá thành tốt nhất trên thị trường. Bạn sẽ không còn lo lắng về chi phí vì chúng rất rẻ so với số tiền bạn phải bỏ ra để điều trị bệnh.</p>
            <p>Nhờ sự ủng hộ từ khách hàng và đối tác, Dược Liệu đã tồn tại và phát triển đến ngày hôm nay với nhiều đơn hàng hơn. Từ đó, có cơ hội đưa sản phẩm của mình đến tay khách hàng trên toàn quốc.</p>
            <h1>Sản phẩm tại Dược Liệu</h1>
            <p>Khi bạn tìm kiếm các loại dược liệu, điều bạn quan tâm đầu tiên chính là cơ sở này có uy tín hay không?</p>
            <p>Đến với Dược liệu bạn không chỉ mua được cây thuốc với chất lượng tốt nhất mà còn có được sản phẩm với giá thành rẻ nhất.</p>
            <p>Các nhân viên tại Dược Liệu đều có chuyên môn cao và luôn nhiệt tình với khách hàng. Chúng tôi muốn mỗi khách hàng mà chúng tôi chăm sóc đều nhận được dịch vụ và dược liệu tốt nhất. Đồng thời bạn cũng sẽ được tư vấn để hiểu rõ hơn về từng cây thuốc, tình trạng bệnh và cách sử dụng hợp lý.</p>
            <img src="https://duoclieuthaison.com/wp-content/uploads/2020/07/Thanh-phan-giai-doc-gan-thai-son-1.jpg" alt="">
            <p>Với hơn 3 năm nỗ lực và không ngừng học hỏi để nâng cao chất lượng sản phẩm, Dược Liệu luôn mang đến các sản phẩm đạt tiêu chuẩn Y khoa. Chúng tôi quan niệm sức khỏe luôn là quan trọng nhất. Chính vị vậy, mọi hướng đi của chúng tôi luôn nhắm đến lợi ích của khách hàng.</p>
            <p>Nếu như bạn đang gặp các căn bệnh như: Tiểu đường, mất ngủ, chóng mặt, đau bao tử, nóng trong người,… đừng ngần ngại liên hệ với Dược Liệu nhé. Chúng tôi có các chuyên gia sẽ giúp bạn điều trị bệnh hiệu quả.</p>
            <h1>Tầm nhìn – Sứ mệnh của Dược Liệu</h1>
            <p>Với khẩu hiệu: “Mang dược liệu sạch đến tay khách hàng”, Dược liệu luôn nỗ lực hết sức để tạo ra các sản phẩm vừa đáp ứng tiêu chuẩn, vừa đạt chất lượng cao nhất. Chúng tôi muốn giúp mọi người hiểu được tầm quan trọng của việc bảo vệ sức khỏe của mình và người thân. Hiểu được điều đó, bạn sẽ có cuộc sống lành mạnh, an tâm.</p>
            <p>Tầm nhìn của chúng tôi là đến 2025, Dược Liệu sẽ là đơn vị cung ứng dược liệu hàng đầu tại Việt Nam. Chúng tôi sẽ giúp cho hàng triệu người nâng cao ý thức sử dụng cây thuốc Nam.</p>
            <h1>Tiêu chí hoạt động Dược Liệu</h1>
            <p>-Dược Liệu luôn tôn trọng khách hàng và đề cao sự chuyên nghiệp trong thái độ phục vụ. Các sản phẩm dược liệu luôn đạt chất lượng tốt nhất trước khi đem đến cho khách hàng.</p>
            <p>-Thường xuyên cải tiến, đổi mới công nghệ nhằm cho ra đời nhiều sản phẩm tốt.</p>
            <p>-Dược Liệu luôn đặt khách hàng là trọng tâm trong quá trình phát triển. Chúng tôi hướng tới xây dựng giá trị tốt đẹp cho người dùng và mong muốn mối quan hệ bền đẹp giữa khách hàng với công ty.</p>
            <p>-Xây dựng bộ máy hoạt động và đào tạo đội ngũ giỏi, giàu chuyên môn và đạo đức để hoàn thành công việc tốt nhất.</p>
            <p>-Xây dựng môi trường làm việc năng động, cởi mở để nhân viên làm việc có tâm huyết.</p>
            <p>Nhờ vào sự tin tưởng của quý khách mà công ty Dược Liệu mới tồn tại và phát triển đến ngày hôm nay. Hiểu được điều đó, chúng tôi sẽ không ngừng nỗ lực để phát triển hơn nữa, tạo ra các sản phẩm chất lượng nhằm cải thiện sức khỏe cộng đồng.</p>
            <h1>Chính sách bán hàng tại Dược Liệu</h1>
            <p>1.Trước khi giao tới tận tay khách hàng sản phẩm đã được kiểm định nghiêm ngặt, kĩ lưỡng.</p>
            <p>2.Không sử dụng hóa chất trong quá trình bảo quản, an toàn cho sức khỏe người sử dụng.</p>
            <p>3.Quá trình chế biến đúng theo tiêu chuẩn, đảm bảo dược chất không bị mất đi.</p>
            <p>4.Phát hiện hàng giả, không đúng sản phẩm bồi thường gấp 10 lần giá trị đơn hàng.</p>
            <p>5.Chuyển phát toàn quốc từ 1 – 5 ngày, nhận hàng kiểm tra mới thanh toán.</p>
            <p><span>Chúng tôi cam kết cung cấp sản phẩm đảm bảo, tư vấn hoàn toàn miễn phí. Nhân viên chăm sóc khách hàng của chúng tôi rất hân hạnh được phục vụ quý khách.</span></p>
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