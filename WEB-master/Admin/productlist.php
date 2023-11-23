<?php
include "header.php";
include "slider.php";
include "class/product_class.php";

?>
<?php
    $product = new product;
    $show_product = $product -> show_product();
?>


<div class="admin-content-right">
        <div class="admin-content-right-cartegory-list">
                <h1>Danh sách danh mục</h1>
                <table>
                    <tr>
                        <th>Stt</th>
                        <th>ID</th>
                        <th>Têm Sản Phẩm</th>
                        <th>Danh mục</th>
                        <th>Giá</th>
                        <th>Tuỳ biến</th>
                    </tr>
                    <?php
                        if($show_product){$i = 0;
                            while($result = $show_product -> fetch_assoc()){ $i++;
                    ?>
                    <tr>
                        <td><?php echo $i ?></td>
                        <td><?php echo $result['product_id'] ?></td>
                        <td><?php echo $result['product_name'] ?></td>
                        <td><?php echo $result['cartegory_id'] ?></td>
                        <td><?php echo $result['product_price'] ?></td>
                        <td><a href="productdelete.php?product_id=<?php echo $result['product_id'] ?>">Xoá</a></td>
                    </tr>
                    <?php
                        }
                    }
                    ?>
                </table>

            </div>
        </div>
    </section>
</body>
</html>