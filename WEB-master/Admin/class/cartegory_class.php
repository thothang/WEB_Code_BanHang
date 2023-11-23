<?php
    include "database.php"
?>
<?php

    class cartegory{
        private $db;

        public function __construct(){
            $this -> db = new Database();
        }
        public function insert_cartegory($cartegory_name){
            $query = "insert into tbl_cartegory(cartegory_name) values ('$cartegory_name')";
            $result = $this -> db ->insert($query);
            header("Location: cartegorylist.php");
            // return $result;
        }

        public function show_cartegory(){
            $query = "select * from tbl_cartegory order by cartegory_id desc";
            $result = $this -> db ->select($query);
            return $result;
        }
        public function get_cartegory($cartegory_id){
            $query = "select * from tbl_cartegory where cartegory_id = '$cartegory_id'";
            $result = $this -> db ->select($query);
            return $result;
        }

        public function update_cartegory($cartegory_name,$cartegory_id){
            $query = "update tbl_cartegory set cartegory_name = '$cartegory_name' where cartegory_id = '$cartegory_id'";
            $result = $this -> db ->update($query);
            header("Location: cartegorylist.php");
            return $result;
        }

        public function delete_cartegory($cartegory_id){
            $query = "delete from tbl_cartegory where cartegory_id = '$cartegory_id'";
            $result = $this -> db ->delete($query);
            header("Location: cartegorylist.php");
            return $result;
        }
    }
?>