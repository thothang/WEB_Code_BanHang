<?php
    include "database.php"
?>
<?php

    class product{
        private $db;

        public function __construct(){
            $this -> db = new Database();
        }

        public function show_cartegory(){
            $query = "select * from tbl_cartegory order by cartegory_id desc";
            $result = $this -> db ->select($query);
            return $result;
        }

        public function show_product(){
            $query = "select * from tbl_product order by product_id desc";
            $result = $this -> db ->select($query);
            return $result;
        }

        public function get_product($product_id){
            $query = "select * from tbl_product where product_id = '$product_id'";
            $result = $this -> db ->select($query);
            return $result;
        }


        public function insert_product(){
            $product_name = $_POST['product_name'];
            $cartegory_id = $_POST['cartegory_id'];
            $product_price = $_POST['product_price'];
            $product_textarea_mota = $_POST['product_textarea_mota'];
            $product_textarea_thanhphan = $_POST['product_textarea_thanhphan'];
            $product_textarea_congdung = $_POST['product_textarea_congdung'];
            $product_img = $_FILES['product_img']['name'];
            move_uploaded_file($_FILES["product_img"]['tmp_name'],"uploads/".$_FILES['product_img']['name']);
            $query = "insert into tbl_product(product_name,cartegory_id,product_price,product_textarea_mota,product_textarea_thanhphan,product_textarea_congdung,product_img) values ('$product_name','$cartegory_id','$product_price','$product_textarea_mota','$product_textarea_thanhphan','$product_textarea_congdung','$product_img')";
            $result = $this -> db ->insert($query);
            if($result){
                $query = "select * from tbl_product order by product_id desc limit 1";
                $result = $this -> db ->select($query)->fetch_assoc();
                $product_id = $result['product_id'];
                $filename = $_FILES['product_img_desc']['name'];
                $filltmp = $_FILES['product_img_desc']['tmp_name'];

                foreach($filename as $key => $value){
                    move_uploaded_file($filltmp[$key],"uploads/".$value);
                    $query = "insert into tbl_product(product_name,cartegory_id,product_price,product_textarea_mota,product_textarea_thanhphan,product_textarea_congdung,product_img) values ('$product_name','$cartegory_id','$product_price','$product_textarea_mota','$product_textarea_thanhphan','$product_textarea_congdung','$product_img')";
                    $query = "insert into tbl_product_img_desc (product_id,product_img_desc) values ('$product_id','$value') ";
                    $result = $this -> db ->insert($query);
                }
            }

            header("Location: productlist.php");
            return $result;
        }

        public function delete_product($product_id){
            $query = "delete from tbl_product where product_id = '$product_id'";
            $result = $this -> db ->delete($query);
            header("Location: productlist.php");
            return $result;
        }
    }
?>