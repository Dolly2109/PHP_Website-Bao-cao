<?php
    class Backend extends Controller{
        public function __construct(){
            parent::__construct();
            $this->p = new Paginator();
            echo "Day la controller Backend";
        }
        function index(){
            if (!isset($_SESSION['admin']) || $_SESSION['admin'] == false) {
                header("Location:". URL."index.php/backend/login");
                exit();
            }
            else{
            $data['page'] = "backend/pages/home";
            $this->load->view('backend/index',$data);
            }
        }
        function login(){
            $this->load->view('backend/login');
        }
        function runlogin() {
            $this->model->m_runlogin();
            
        }
        // function index(){
        //     $data = array();
        //     $data['page'] = "backend/pages/home";
        //     $this->load->view('backend/index',$data);
        // }
        // quản lý danh mục
        function catList($page = 1) {
            $cat = $this->model->getRecordByTrash('category', 0);
            $n = count($cat);
            $config = array(
                'base_url' => URL."index.php/backend/catList/",
                'total_rows' => $n,
                'per_page' => 5,
                'cur_page' => $page
            );
            $this->p->init($config);
            $data = array();
            $data['allCat'] = $cat;
            $data['category'] = $this->model->getData('category',$config['per_page'],$page);
            $data['page'] = "backend/pages/category/list";
            $data['paginator'] = $this->p->createLinks();
            $this->load->view("backend/index",$data);
        }
        // thêm
        function catAdd(){
            $data['category'] = $this->model->getRecordByTrash('category', 0);
            $data['page'] = "backend/pages/category/addcat";
            $this->load->view("backend/index", $data);
        }
        // chuyen trang addcat 
        function doCatAdd(){
            $this->model->mCatAdd();
            header("Location:../backend/catList/1");
        }
        // edit category
        function editCat($id){
            $data = array();
            $data['edit'] = $this->model->getOneRecordByTrash('category', $id, 0);
            $data['category'] = $this->model->getRecordByTrash('category', 0);    
            $data['page'] = "backend/pages/category/editcat";    
            $this->load->view("backend/index", $data);
        }
        // chuyen trang editcat
        function doEditCat($id){
            $this->model->mEditCat($id);
            header("Location:".URL."index.php/backend/catList/1");
        }
        // quản lý sản phẩm
        // function proList($page = 1) {
        //     $config = array(
        //         'base_url' => URL."index.php/backend/proList/",
        //         'total_rows' => $n,
        //         'per_page' => 5,
        //         'cur_page' => $page
        //     );
        //     $this->p->init($config);
        //     $data = array();
        //     $data['allCat'] = $cat;
        //     $data['category'] = $this->model->getData('category',$config['per_page'],$page);
        //     $data['page'] = "backend/pages/category/list";
        //     $data['paginator'] = $this->p->createLinks();
        //     $this->load->view("backend/index",$data);
        // }

        // them san pham
        function proAdd(){
            $data['category'] = $this->model->getRecordByTrash('category', 0);
            $data['page'] = "backend/pages/products/addpro";
            $this->load->view("backend/index", $data);
        }

        // dùng chung 
        function fmAddCategory(){
            $data['category'] = $this->model->getRecordByTrash('category', 0);    
            $data['page'] = "backend/pages/category/addcat";
            $data['trash'] = count($this->model->getRecordByTrash('products',1));

            $this->load->view('backend/index', $data);
        }
        function fmAddProduct(){
            $data['category'] = $this->model->getRecordByTrash('category', 0);    
            $data['page'] = "backend/pages/products/addpro";
            $data['trash'] = count($this->model->getRecordByTrash('products',1));

            $this->load->view('backend/index', $data);
        }
        function prdAdd (){
            $data['category'] = $this->model->getRecordByTrash('category', 0);    
            $data['page'] = "backend/pages/produts/upload"; 
            $this->load->view('backend/index', $data);
        }
        ////////////////////////////////////////////////////////////////

        
    }
?>