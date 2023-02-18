<?php
    class Database{
        // tao ket noi
        function __construct(){        
            $this->conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
            $this->conn->set_charset('utf8');
            if ($this->conn->connect_error) {
                die("Error connecting to database".$this->conn->connect_error);
            }
            echo " Database connected successfully ";
        }
    }
?>