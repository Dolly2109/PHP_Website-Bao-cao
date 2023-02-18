<?php
	class Backend_Model extends Model{
		function __construct(){
			parent::__construct();
			echo "This is the backend model ";
		}
		function m_runlogin() {
			$u = $_POST['email'];
			$p = sha1($_POST['pass']);
			$sql = "SELECT * FROM users WHERE status = 1 AND email = '$u' AND 
					password = '$p' AND role = 'admin'";
			$r = $this->getOne($sql);
			// return $r;
			if (count($r) > 0) {
				$_SESSION['admin'] = $u;
				header("Location:". URL ."index.php/backend/index");
			}
			else{
				header("Location:" .URL ."index.php/backend/login");
			}
			// print_r ($r);
		}
        // phương thức thêm sản phẩm
		function mCatAdd(){ 
            $cat = array(
                'category_name' => $_POST['cat_name'],
                'parent' => $_POST['parent'],
                'status' => $_POST['status']
            );
            $this->addRecord('category', $cat);
        }
        // phương thức chỉnh sản phẩm
		function mEditCat($id){
            $cat = array(
                'category_name' => $_POST['cat_name'],
                'parent' => $_POST['parent'],
                'status' => $_POST['status']
            );
            $this->editRecord('category', $id, $cat);
        }
        function m_addProduct(){
            $pro = array();
            $pro['product_name'] = $_POST['name'];
            $pro['product_category'] = $_POST['category'];
            $pro['price'] = $_POST['price'];
            $pro['product_detail'] = $_POST['editor1'];
            $pro['status'] = $_POST['status'];
            $pro['created_at'] = $_POST['Y-m-d H:i:s'];
            $this->addRecord('product', $pro);
            return 1;
        }
    }
?>