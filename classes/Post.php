<?php
    require_once "Db.php";
    class Post extends Db
    {
        public function SelectAll()
        {
            $query = "SELECT * FROM art";
            $result = $this->connect()->query($query)->fetchAll();
            return $result;
        }

        public function SelectCategory($category)
        {
            $query = "SELECT * FROM art WHERE category='$category'";
            $result = $this->connect()->query($query)->fetchAll();
            return $result;
        }

        public function SelectPostByID($id)
        {
            $query = "SELECT * FROM art WHERE art_id='$id'";
            $result = $this->connect()->query($query)->fetchAll();
            return $result[0];
        }

        public function Dump($data)
        {
            echo "<pre>", print_r($data), "</pre>";
        }
    }

?>