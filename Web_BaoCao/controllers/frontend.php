
<?php
	class Frontend extends Controller{
		function __construct(){
			parent::__construct();
			echo "This is the frontend ";
		}
		function index(){
			$this->model = new Frontend_Model();
			$data = array();
			// page home
			$data['page'] = "frontend/pages/home";	
			// menu
			$data['menu'] = $this->model->getAllMenu();
			// category
			$data['category'] = $this->model->getCategory();
			// new product
			$data['new_product'] = $this->model->getNewProducts();
			// promotionProduct
			$data['promotionProduct'] = $this->model->getPromotion();
			//bestsellerProduct
			$data['bestsellerProduct'] = $this->model->getBestSeller();
			$this->load->view("frontend/index", $data);
		}
		function product(){
            $data = array();
			// category
			// $data['page'] = "frontend/pages/home";	
			$data['menu'] = $this->model->getAllMenu();
			$data['category'] = $this->model->getCategory();
			$data['product'] = $this->model->getProducts();
			// $this->load->view("frontend/modules/header", $data);
            $this->load->view("frontend/pages/product", $data);
        }
		function aboutus(){
            $data = array();
			$data['menu'] = $this->model->getAllMenu();
			$this->load->view("frontend/modules/header", $data);
            $this->load->view("frontend/pages/aboutus", $data);
        }
		function review(){
            $data = array();
			$data['menu'] = $this->model->getAllMenu();
			$this->load->view("frontend/modules/header", $data);
            $this->load->view("frontend/pages/review", $data);
        }
		function whyus(){
            $data = array();
			$data['menu'] = $this->model->getAllMenu();
			$this->load->view("frontend/modules/header", $data);
            $this->load->view("frontend/pages/whyus", $data);
        }
			// san pham theo danh muc
		function listProducts($catId){
			$data = array();
			$data['menu'] = $this->model->getAllMenu();
            $data['category'] = $this->model->getCategory();
			$this->load->view("frontend/modules/header", $data);
            $data['products'] = $this->model->getProductsByCatId($catId);
            $data['page'] = 'frontend/pages/listProducts';
            $this->load->view('frontend/pages/listProducts', $data);
        }
				//chi tiet san pham
			function detail($id){
				$data['menu'] = $this->model->getAllMenu();
				$this->load->view("frontend/modules/header", $data);
				$data['detail'] = $this->model->getDetail($id);
				$data['page'] = 'frontend/pages/detail';
				$data['category'] = $this->model->getCategory();
				$this->load->view('frontend/pages/detail', $data);
			}
				// register
			function register(){
				$data = array();
				// $data['menu'] = $this->model->getAllMenu();
				// $this->load->view("frontend/modules/header", $data);				
				$data['page'] = 'frontend/pages/register';
				$this->load->view('frontend/pages/register', $data);
			}
			function doRegister(){
				$this->model->doRegister();
				header('Location:../frontend/login');
			}
			//login
			function login(){
				$data = array();
				$data['page'] = "frontend/pages/login";
				$this->load->view('frontend/pages/login', $data);
			}
			// login
			function doLogin(){
				$user = $this->model->doLogin();
				if(count($user)>0){
					$_SESSION['user'] = $user['name'];
					header("Location:../frontend/index");
				}
				else{
					header("Location:../frontend/login");
				}
				// print_r ($user);
			}
			// logout
			function Logout(){
				unset($_SESSION['user']);
				header("Location:../frontend/login");
			}
			// add to cart ( chua hoan thien )
			function AddCart($id=0){
				if (!isset($_SESSION['cart'])) {
					$_SESSION['cart'] = array();
					$_SESSION['amount'] = array();
					$_SESSION['number_of_item'] = 0;
				}
				$K = array_search($id, $_SESSION['cart']);
				if ($K == false) {
					array_push($_SESSION['cart'],$id);
					array_push($_SESSION['amount'],1);
					$_SESSION['number_of_item']++;
	
				}
				else{
					$_SESSION['amount'][$K]++;
				}
				$data = array();
				$data['category'] = $this->model->getCategory();
				$data['menu'] = $this->model->getAllMenu();
				// $data['addcart'] = $this->AddCart();
				$data['page'] = "frontend/pages/cart/cart";
				header("Location:../frontend/index");

				// end addtocart
				$this->load->view("frontend/index", $data);
        	}
			function cart(){
				$data = array();
				// if (!isset($_SESSTION['cart'])) {
				// 	$data['cart'] = null;
				// }
				// else{
				// 	$data['cart'] = $this->model->m_cart();
				// }
				$data['menu'] = $this->model->getAllMenu();
				$data['category'] = $this->model->getCategory();
				$data['page'] = "frontend/pages/cart/cart";
				$this->load->view("frontend/index", $data);

			}
	}
?>