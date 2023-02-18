<?php
	class Frontend_Model extends Model{
		function __construct(){
			parent::__construct();
			echo "This is the frontend model ";
		}
        // lay menu
        function getAllMenu(){
            $sql = "SELECT * FROM menu WHERE status = 1";
            $result = $this->setQuery($sql);
            return $result;
        }
        // category
        function getCategory(){
            $sql = "SELECT * FROM category WHERE status = 1 AND trash = 0";
            $result = $this->getAll($sql);
            return $result; 
        }
        // get products
        function getProducts(){
            $sql = "SELECT * FROM products";
            $result = $this->getAll($sql);
            return $result;
        }
		// cau query lay san pham moi
		function getNewProducts(){
            $sql = "SELECT * FROM products WHERE status = 1 ORDER BY created_at DESC LIMIT 0,9";
            $result = $this->getAll($sql);
            return $result; 
        }
		// cau query lay san pham giam gia
		function getPromotion(){
            $sql = "SELECT * FROM products WHERE sale = 1 LIMIT 0,6";
            $result = $this->getAll($sql);
            return $result;
        }
        //
        function getBestSeller(){
            $sql = "SELECT product_id, product_name, image, price, sum(qty) as total_amount 
                FROM products, order_details 
                WHERE products.id = order_details.product_id 
                GROUP BY product_id
                ORDER BY total_amount DESC LIMIT 0,4";
            $result = $this->getAll($sql);
            return $result;
        }
		// cau query chi tiet san pham
		function getDetail($id){ 
            $sql = "SELECT * FROM products WHERE id = $id ";
            $result = $this->getOne($sql);
            return $result;
        }
        // san pham theo danh much
        function getProductsByCatId($CatId){
            $sql = "SELECT * FROM products WHERE status = 1 AND trash = 0 AND
            product_category = $CatId"; 
            $result = $this->getAll($sql);
            return $result;
        }
        // dang ki tai khoan
        function doRegister(){
            $user = array(
                'name' => $_POST['name'],
                'email' => $_POST['email'],
                'phone' => $_POST['phone'],
                'address' => $_POST['address'],
                'password' => sha1($_POST['pass']),
                'created_at' => date("Y-m-d H:i:s")
            );
            $this->addRecord("users", $user);
        }
        // dang nhap
        function doLogin(){
            $e = $_POST['email'];
            $p = $_POST['pass'];
            $sql = "SELECT * FROM users WHERE status = 1 AND email ='"
                .$e ."' AND password ='" .sha1($p)."'";
            $result = $this->getOne($sql);
            return $result;
        }
        

		
	}
?>