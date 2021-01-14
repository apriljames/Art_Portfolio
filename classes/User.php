<?php
    require_once "Db.php";
    class User extends Db
    {
        public function SelectUserByUsername($name)
        {
            $query = "SELECT * FROM users WHERE username='$name'";
            $result = $this->connect()->query($query)->fetchAll();
            return $result[0];
        }

        public function Dump($data)
        {
            echo "<pre>", print_r($data), "</pre>";
        }
    }

?>