<?php
    class Model {
        function __construct() {
            $this->db = new Database;
            $this->c = $this->db->conn;
        }
        function setQuery($sql){
            return $this->c->query($sql);
        }

        function getAll($sql){
            $result = $this->setQuery($sql);
            $a = array();
            while($row = $result->fetch_assoc()){
                $a[] = $row;
            }
            return $a;
        }

        function getOne($sql){
            $result = $this->setQuery($sql);
            if($result->num_rows == 1){
                $row = $result->fetch_assoc();
                return $row;
            }
        }
        // add tai khoan vao sql to
        function addRecord($table, $params = array()){
            $txtKey = "";
            $txtValue = "";
            $i = 0;
            foreach ($params as $key => $value){
                if($i<count($params) - 1){
                    $txtKey .= $key . " , ";  
                    $txtValue .= "'". $value ."' ,";  
                }
                else{
                    $txtKey .= $key;
                    $txtValue .= "'" . $value ."'"; 
                }
                $i++;
            }
            $sql = "INSERT INTO ". $table ."(". $txtKey .") VALUES
                (". $txtValue .")";
                // print_r($sql);
            $this->setQuery($sql);
        }
        // chỉnh sửa
        function editRecord($table, $id, $params = array()){
            $txtSet = "";
            $i = 0;
            foreach ($params as $key => $value){
                if($i<count($params) - 1){
                    $txtSet .= "$key = '$value', ";  
                }
                else{
                    $txtSet .= "$key = '$value' ";  
                }
                $i++;
            }
            $sql = "UPDATE ". $table ." SET ". $txtSet . " WHERE id = $id ";
            // echo $sql;
            $this->setQuery($sql);
        }
        // xem gio hang
        function m_cart(){
            $c = array(); 
            $n = count($_SESSION['cart']);
            $_SESSION['cart'] = array_values($_SESSION['cart']);
            $_SESSION['amount'] = array_values($_SESSION['amount']);
            for ($i=0; $i < $n; $i++) { 
                $sql = "SELECT * FROM product WHERE id = ".$_SESSION['cart'][$i];
                $list = $this->getOne($sql);
                array_push($c,$list);
            }
            return $c;
        }
        /// backend 
        function getData($table,$limit,$page) {
            $sql = "SELECT * FROM $table WHERE trash = 0 LIMIT ". ($page-1)*$limit . "," . $limit;  
            $result = $this->getAll($sql);
            return $result;
        }
        // in ra dong record
        function getRecordByTrash($table, $trash = 0){
            $sql = "SELECT * FROM $table WHERE trash = $trash";
            $result = $this->getAll($sql);

            return $result;
        }
        function getOneRecordByTrash($table, $id, $trash = 0){
            $sql = "SELECT * FROM $table WHERE trash = $trash AND id = $id";
            $result = $this->getOne($sql);
            return $result;
        }
        function delTempRecord($table, $id){
            $sql = "UPDATE $table SET trash = 1 WHERE id = $id";
            $this->setQuery($sql);
        }

        
    }
?>