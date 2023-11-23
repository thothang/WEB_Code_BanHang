-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2023 at 08:23 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `csdl_thuoctay`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cartegory`
--

CREATE TABLE `tbl_cartegory` (
  `cartegory_id` int(11) NOT NULL,
  `cartegory_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_cartegory`
--

INSERT INTO `tbl_cartegory` (`cartegory_id`, `cartegory_name`) VALUES
(37, 'Xương Khớp - Đau Nhức'),
(38, 'Giảm Cân - Làm Đẹp'),
(39, 'Dạ Dày - Tiêu Hoá'),
(40, 'Huyết Áp - Danh Mục'),
(41, 'Bồi Bổ Cơ Thể'),
(42, 'Giải Độc Gan - Mát Gan'),
(43, 'Mất Ngủ - Stress');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `cartegory_id` int(11) NOT NULL,
  `product_price` varchar(255) NOT NULL,
  `product_textarea_mota` varchar(5000) NOT NULL,
  `product_textarea_thanhphan` varchar(5000) NOT NULL,
  `product_textarea_congdung` varchar(5000) NOT NULL,
  `product_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`product_id`, `product_name`, `cartegory_id`, `product_price`, `product_textarea_mota`, `product_textarea_thanhphan`, `product_textarea_congdung`, `product_img`) VALUES
(1, 'Bồ Công Anh', 43, '150.000', 'MÔ TẢ\r\nNếu để ý bạn sẽ thấy bồ công anh là loài hoa mọc dại rất phổ biến ở nhiều vùng miền nước ta, nhiều nhất là các tỉnh miền núi phía Bắc. Không chỉ mang vẻ đẹp hoang dại mạnh mẽ, bồ công anh còn được biết đến với nhiều lợi ích giành cho sức khỏe con người. Bài viết dưới đây, hãy cùng chúng tôi làm rõ tác dụng giải độc gan, thanh lọc cơ thể của thảo dược này.\r\nBồ công anh có tên khoa học là Lactuca thuộc họ Cúc, còn được biết được biết đến với tên gọi khác như cây diếp trời, cây mũi mác hay cây diếp hoang… Tuy nhiên, ở Việt Nam, tên bồ công anh vẫn thân thuộc và hữu dụng nhất. Đây là loại cây thân thảo, như bụi cỏ dại thấp khoảng 50 -70 cm. Lá mọc so le nhau, hoa màu vàng rực rỡ. Loài thực vật này thường ra hoa vào tháng 6 và kết quả vào tháng 9 hàng năm.', 'Thành phần của bồ công anh \r\nThảo dược là loại thực vật lành tính, có thể sử dụng để làm thức ăn trong món salad bởi trong lá chứa nhiều protein hơn rau bina (rau chân vịt). Lá bồ công anh rất giàu canxi, sắt, magiê, phốt pho, kali và các loại vitamin khác.\r\nTrong Đông y, cây thuốc có tác dụng thanh nhiệt, giải độc, lợi thấp thông lâm. Đây là một vị thuốc đầu bảng trong lĩnh vực thanh nhiệt giải độc của Đông y do tác dụng tiêu độc kháng viêm mà không gây tác dụng phụ. Đây còn được ví như thuốc kháng sinh thực vật.', 'Công dụng của bồ công anh\r\nBộ phận dùng làm thuốc từ bồ công anh gần như là tất cả các bộ phận. Do đó nhiều người thu hái nguyên cây về, bỏ đất, rửa sạch, để ráo rồi cắt nhỏ, phơi hoặc sấy khô. Cũng có người chỉ lấy phần lá về phơi khô làm thuốc.\r\nTheo nghiên cứu y học, chất nhựa và chất đắng của dược liệu là từ nhiều hoạt chất tạo nên, các thành phần này mang đến nhiều lợi ích cho sức khỏe người dùng. Đặc biệt là các công dụng mát gan, đẹp da và giải độc gan từ loài hoa dại này.\r\nBồ công anh mát gan, giải độc gan\r\nCó chứa nhiều hoạt chất kháng khuẩn, chống viêm và tăng cường đào thải các độc tố trong gan, tính mát từ cây thuốc còn giúp thanh nhiệt cơ thể, rất hiệu quả trong việc giải độc gan.\r\n\r\nKhông chỉ thế vị thảo dược này còn giúp đào thải axit uric gây ra bệnh Gout ở người và giảm thiểu tích tụ mỡ thừa giúp điều trị hiệu quả bệnh gan nhiễm mỡ.\r\n\r\nBồ công anh trị mụn, làm đẹp da\r\nUống trà bồ công anh mỗi ngày là giải pháp giúp bạn chăm sóc da từ bên trong vô cùng hiệu quả, lại đơn giản không mất nhiều công sức, tiền bạc. Các hoạt chất có trong thảo dược giúp thanh nhiệt cơ thể, mát gan đẩy lùi tình trạng mụn, giúp làn da luôn căng bóng, mịn màng.\r\n\r\nVà rất nhiều công dụng khác từ bồ công anh\r\nNgoài tác dụng mát gan, đẹp da và giải độc gan, thảo dược này còn mang đến nhiều công dụng khác, bao gồm:\r\n\r\nCải thiện chức năng thận: giúp lợi tiểu, thanh lọc cơ thể, ngăn ngừa sỏi đường tiết niệu, sỏi thận\r\nNgăn ngừa, phòng chống ung thư: chiết xuất thảo dược có chứa hoạt chất taraxacum officinale có khả năng ngăn chặn sự phát triển của các khối u, tế bào gây ung thư\r\nGiảm cân: sử dụng trà bồ công anh mỗi ngày là giải pháp giúp chị em phụ nữ giảm cân giữ dáng và kiểm soát cân nặng vừa an toàn, vừa hiệu quả\r\nCải thiện chức năng tiêu hóa, nhuận tràng, điều trị chứng ăn uống khó tiêu\r\nGiúp xương chắc khỏe: dược liệu có chứa nhiều khoáng chất thiết yếu cần thiết cho xương như canxi, photpho, magie giúp xương chắc khỏe, đồng thời ngăn ngừa loãng xương ở người cao tuổi\r\nLợi sữa: phụ nữ cho con bú sử dụng vị thuốc này có thể thông sữa, lợi sữa cho bé bú\r\nDùng trà bồ công anh hỗ trợ điều trị tiểu đường\r\nLàm lành các vết thương ngoài da do côn trùng đốt\r\nĐiều trị đau dạ dày\r\nChống suy nhược cơ thể\r\nGiảm đau mắt', 'Bo-cong-anh.png'),
(2, 'Cây Xạ Đen', 43, '150.000', 'MÔ TẢ:<br>\r\nUng thư đang trở thành nỗi ám ảnh trong tâm trí mỗi người. Theo Tổ chức Y tế thế giới (WHO), các chuyên gia dự đoán rằng có tới 14 triệu ca mắc mới và 8 triệu ca tử vong vào năm 2018. Tại Việt Nam, mỗi năm có 126 000 ca mắc mới, 96 000 trường hợp tử vong. Ung thư phổi chiếm tỷ chết nhiều nhất, sau đó tới ung thư vú và ung thư đại tràng.<br>\r\n\r\nCác vùng có tỷ lệ chết vì Ung thư chủ yếu là những nơi không khí bị ô nhiễm, số còn lại là do sự hạn chế về thuốc men và sự phát hiện muộn. Vậy bạn đã làm cách nào để không vướng vào án tử của Ung thư?', 'Thành phần trong cây xạ đen:\r\nTheo nghiên cứu của các bác sỹ Đông Y Bệnh viện Trung ương Quân đội 108, thành phần trong cây xạ đen chứa:\r\n\r\nFlavonoid có tác dụng chống oxy hóa, ức chế sự phát triển của tế bào xấu.<br>\r\nQuinnon kết hợp với Flavanoid hóa lỏng các tế bào Ung thư, hỗ trợ ngăn chặn sự phát triển của các khối u, bướu\r\nNgoài ra xạ đen có một số hoạt chất enzyme có tác dụng quý khác.', 'Tác dụng của cây xạ đen:<br>\r\nCông dụng cây xạ đen trong điều trị các loại bệnh đã được chúng minh qua các nghiên cứu chuyên sâu.\r\n\r\nXạ đen phòng ngừa và hỗ trợ điều trị Ung thư\r\nXạ đen có chứa hợp chất Flavanoid giúp chống lại sự oxi hóa, ức chế sự phát triển của các gốc tự do, sự lão hóa tế bào. Hoạt chất này góp phần không nhỏ trong quá trình ức chế các tế bào khổng lồ, các tế bào lạ xuất hiện trong cơ thể, hạn chế sự lan rộng của Ung thư.\r\n\r\nTác dụng của cây xạ đen hỗ trợ và điều trị các khối U bướu\r\nHoạt chất Quinnon kết hợp với Flavanoid hóa lỏng tế bào, ngăn chặn sự phát triển của các khối u, kể cả u bướu ác tính. Đặc biệt, cây thuốc nam cũng giúp các khối u lành tính, u xơ u nang tiêu giảm đi trong quá trình sử dụng.\r\n\r\nỔn định huyết áp, đặc biệt là huyết áp cao\r\nSử dụng cây thuốc hàng ngày mang lại huyết áp ổn định cho mọi người. Đặc biệt đối với những người huyết áp cao, thảo dược hỗ trợ điều trị rất tốt. Tuy nhiên, những người huyết áp thấp không vì thế mà không sử dụng được cây thuốc này. Để ổn định huyết áp của những người huyết áp thấp, bổ sung vài lát gừng vào xạ đen, bạn có thể sử dụng hoàn toàn bình thường.\r\n\r\nTăng cường chức năng gan, giải độc gan\r\nCác hoạt chất có trong cây thuốc còn giúp hỗ trợ điều trị viêm gan, xơ gan, men gan cao theo cơ chế giải độc gan và kháng viêm, chống lại các bệnh thứ phát. Gan nhiễm mỡ hoặc máu nhiễm mỡ cũng không có cơ hội phát triển khi cơ thể đã được bổ sung đề kháng bằng cách sử dụng trà xạ đen hàng ngày.\r\n\r\nTác dụng của cây xạ đen hỗ trợ điều trị mất ngủ, kém ăn\r\nXạ đen tốt cho những người thường xuyên mất ngủ, suy nhược cơ thể hoặc thiếu máu. Ngoài ra, xạ đen cũng giúp tăng cường tuần hoàn máu, hỗ trợ điều trị chứng hoa mắt chóng mặt.', 'Cay-xa-den.png'),
(3, 'Chè Dây', 43, '175.000', 'MÔ TẢ<br>\r\nCây chè dây là cây gì?<br>\r\nTừ xa xưa chè dây đã được tin tưởng như một loại thảo dược hỗ trợ điều trị hữu hiệu mà điển hình là về bệnh lý dạ dày. Loài thực vật hai lá mầm này xuất hiện trong rất nhiều nghiên cứu khoa học với công năng diệt vi trùng, vi khuẩn, giảm độ axit dạ dày, cắt cơn đau do viêm loét tá tràng. Ngoài ra cây chè dây cũng giúp hỗ trợ ổn định huyết áp, giải độc gan, tác dụng kháng viêm, làm liền các vết viêm loét.<br>\r\nChè dây mang lại tác dụng hỗ trợ điều trị bệnh lý dạ dày ngoài mong đợi. Hiện nay có rất nhiều người bị ảnh hưởng không nhỏ tới chất lượng cuộc sống bởi các cơn đau dạ dày. Lo ngại rằng các món ăn cay nóng, khó tiêu hóa sẽ làm cho dạ dày bị đau trở lại. Tuy nhiên, sự tồn tại của chè dây rất từ nhiều thập kỉ qua để chứng minh rằng viêm loét dạ dày, tá tràng đều có thể hỗ trợ điều trị được.', 'Thành phần trong chè dây<br>\r\nTheo nghiên cứu của PGS.TS Vũ Nam và cộng sự, trong chè dây có các thành phần như:<br>\r\n\r\nFlavanoid giúp chống lại sự oxy hóa, ức chế sự phát triển của các tế bào xấu, giúp kháng viêm, dập tắt sự phát triển của các gốc tự do.<br>\r\nChè dây cũng chứa hai loại đường Glucase và Rhamnese.<br>\r\nNghiên cứu về tính an toàn, dược liệu không chứa các hoạt chất có độc nên khá an toàn trong quá trình sử dụng.', 'Công dụng điều trị của chè dây<br>\r\nTheo kinh nghiệm dân gian truyền lại, chè dây có giá trị rất quý về mặt dược liệu. Chè dây có tác dụng thanh nhiệt, giải độc, tiêu viêm, đặc biệt hỗ trợ điều trị viêm loét dạ dày, đau bao tử.<br>\r\n\r\nKế thừa các kinh nghiệm dân gian, các nhà khoa học Việt Nam đã công bố rất nhiều công dụng của chè dây:<br>\r\n\r\nHỗ trợ và điều trị viêm loét dạ dày, viêm loét tá tràng, viêm hang vị dạ dày.<br>\r\nHỗ trợ điều trị ợ hơi, đau rát thượng vị, ợ chua.<br>\r\nGiúp an thần, hỗ trợ điều trị mất ngủ, giúp ổn định huyết áp, hỗ trợ điều trị huyết áp cao, giải độc trong cơ thể.<br>\r\nHỗ trợ điều trị tiêu viêm, giảm đau, làm liền sẹo, làm lành vết loét diệt vi khuẩn HP, giảm quá trình viêm dạ dày, hành tá tràng.<br>\r\nNgoài việc sử dụng chè dây để hỗ trợ điều trị bệnh dạ dày, người tiêu dùng nên kết hợp sinh hoạt lối sống lành mạnh, tránh ăn đồ cay nóng, các loại thức ăn khó tiêu hóa để đạt hiệu quả tốt nhất.\r\n\r\n', 'Che-day.png'),
(4, 'Cần Sa', 41, '200.000', 'Cần sa là một loại ma túy được chế từ hoa và lá khô của cây cần sa Cannabis Sativa. Giới trẻ còn gọi loại cần sa này với những cái tên như “bồ đà”, “tài mà”... và được sử dụng dưới dạng hút (hút vape, ống điếu), dạng hít hoặc trộn vào đồ uống, thức ăn, thuốc lá.... để phục vụ nhu cầu cá nhân hoặc giải trí.', 'Thành phần chính của cần sa là hoạt chất THC (Tetra Hydro Cannabinol) thường có trong lá và các bộ phận ra hoa của cây cần sa. THC khi được hấp thu vào cơ thể sẽ kích thích não bộ, giải phóng hormone dopamine khiến người sử dụng có cảm giác hưng phấn, lâng lâng, khoái cảm và ham muốn tình dục.', '2.1. Ảnh hưởng về não bộ, tâm thần<br>\r\nNếu hút cần sa ngắn hạn, THC sẽ di chuyển từ phổi vào máu, lên não và lan ra toàn bộ cơ thể. THC kích hoạt các thụ thể tế bào não dẫn đến triệu chứng “phê” với các biểu hiện như:<br>\r\n\r\nThay đổi giác quan (vd: nhìn thấy màu sáng hơn)<br>\r\nThay đổi nhận thức về thời gian.<br>\r\nThay đổi tâm trạng.<br>\r\nSuy yếu khả năng vận động.<br>\r\nKhó tập trung suy nghĩ và giải quyết vấn đề.<br>\r\nSuy giảm trí nhớ.<br>\r\nẢo giác, ảo tưởng (nếu dùng liều cao).<br>\r\nRối loạn tâm thần (ảnh hưởng cao nhất).<br>\r\nMất động lực làm việc.<br>\r\nGiảm trí nhớ, xao nhãng và thiếu tập trung, khó tiếp thu điều mới.<br>\r\nGiảm ham muốn tình dục.<br>\r\nẢnh hưởng về tâm lý (nhất là những người có tiền sử rối loạn trầm cảm, tâm thần phân liệt...).<br>\r\nNếu sử dụng cần sa trong thời gian dài sẽ gây ảnh hưởng đến chức năng não bộ và sức khỏe tâm thần là tất yếu:<br>\r\n\r\nMột số người có thể phát triển các bệnh tâm thần như: ảo giác, hoang tưởng, rối loạn suy nghĩ.<br>\r\nGia tăng các vấn đề về sức khỏe tinh thần như lo âu, trầm cảm, suy nghĩ tự tử ở thanh thiếu niên.<br>\r\nSo với các loại ma túy tổng hợp, cần sa tuy có mức lệ thuộc và tác hại thấp hơn nhưng lại là bước khởi đầu dẫn đến tình trạng nghiện ngập.<br>\r\n\r\n\r\n2.2. Ảnh hưởng tới sức khỏe thể chất\r\nNgoài ra, người sử dụng cần sa cũng có thể gặp phải những vấn đề sức khỏe thể chất như:<br>\r\n\r\nDễ ho và khạc đờm hàng ngày: Tăng nguy cơ viêm phế quản, nhiễm trùng phổi và các bệnh lý về đường hô hấp khác.<br>\r\nBuồn nôn và nôn nghiêm trọng. Một số người có thể phát triển hội chứng Hyperemesis Cannabinoid gây buồn nôn, nôn mửa và mất nước thường xuyên.<br>\r\nRối loạn nhịp tim, tăng nguy cơ bị đau tim.<br>\r\nSuy giảm số lượng và chất lượng tinh trùng (đối với nam giới).<br>\r\nRối loạn kinh nguyệt (đối với nữ giới).', 'Can-sa.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product_img_desc`
--

CREATE TABLE `tbl_product_img_desc` (
  `product_id` int(11) NOT NULL,
  `product_img_desc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_product_img_desc`
--

INSERT INTO `tbl_product_img_desc` (`product_id`, `product_img_desc`) VALUES
(1, 'Bo-cong-anh.png'),
(1, 'Bo-cong-anh-1.png'),
(1, 'Bo-cong-anh-2.png'),
(1, 'Bo-cong-anh-3.png'),
(2, 'Cay-xa-den.png'),
(2, 'Cay-xa-den-1.png'),
(2, 'Cay-xa-den-2.png'),
(3, 'Che-day.png'),
(3, 'Che-day-1.png'),
(3, 'che-day-2.png'),
(4, 'Can-sa.png'),
(4, 'Can-sa-1.png'),
(4, 'Can-sa-2.png'),
(4, 'Can-sa-3.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `create_datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `create_datetime`) VALUES
(1, 'admin', 'tn28112017@gmail.com', 'admin', '2023-05-13 11:22:22'),
(2, 'admin', 'tn28112017@gmail.com', '123', '2023-05-13 11:26:17'),
(3, 'admin2', 'tn28112017@gmail.com', 'admin', '2023-05-13 23:42:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_cartegory`
--
ALTER TABLE `tbl_cartegory`
  ADD PRIMARY KEY (`cartegory_id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_cartegory`
--
ALTER TABLE `tbl_cartegory`
  MODIFY `cartegory_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
