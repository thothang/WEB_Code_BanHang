<?php
include "header.php";
include "slider.php";
include "class/product_class.php";
?>
<?php
    $product = new product;
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        // var_dump($_POST,$_FILES);
        // echo '<pre>';
        // echo print_r($_FILES['product_img_desc']['name']);
        // echo '<pre>';
        $insert_product = $product -> insert_product($_POST,$_FILES);
    }
?>
        <div class="admin-content-right">
            <div class="admin-content-right-product-add">
                <h1>Thêm Sản Phẩm</h1>
                <form action="" method="POST" enctype="multipart/form-data">
                    <label for="">Nhập tên sản phẩm<span style="color: red;">*</span></label>
                    <input name="product_name" required type="text" placeholder="Nhập tên sản phẩm">
                    <label for="">Chọn danh mục<span style="color: red;">*</span></label>
                    <select name="cartegory_id" name="" id="">
                        <option value ="#">--Chọn--</option>
                        <?php
                            $show_cartegory = $product -> show_cartegory();
                            if($show_cartegory){
                                while($result = $show_cartegory -> fetch_assoc()){
                        ?>

                        <option value="<?php echo $result['cartegory_id']?>"><?php echo $result['cartegory_name']?></option>

                        <?php
                            }
                        }
                        ?>
                    </select>
                    <label for="">Nhập giá sản phẩm<span style="color: red;">*</span></label>
                    <input name="product_price" required type="text" placeholder="Giá sản phẩm">
                    <label for="">Nhập mô tả<span style="color: red;">*</span></label>
                    <textarea name="product_textarea_mota" required  name="" id="" cols="30" rows="10" placeholder="Mô tả"></textarea>
                    <label for="">Nhập thành phần<span style="color: red;">*</span></label>
                    <textarea name="product_textarea_thanhphan" required  name="" id="" cols="30" rows="10" placeholder="Mô tả"></textarea>
                    <label for="">Nhập công dụng<span style="color: red;">*</span></label>
                    <textarea name="product_textarea_congdung" required  name="" id="" cols="30" rows="10" placeholder="Mô tả"></textarea>
                    <label for="">Ảnh sản phẩm<span style="color: red;">*</span></label>
                    <input name="product_img" type="file">
                    <label for="">Ảnh mô tả<span style="color: red;">*</span></label>
                    <input name="product_img_desc[]" multiple type="file">
                    <button type="submit">Thêm</button>
                </form>
            </div>
        </div>
    </section>
</body>
</html>