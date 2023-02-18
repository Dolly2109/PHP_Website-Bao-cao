<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Admin Dolly</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="<?=URL?>asset/backend/assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?=URL?>asset/backend/css/styles.css" rel="stylesheet" />
        <style>
            footer{
                height: 20vh;
                background: #333;
            }

        </style>
    </head>
    <body>
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <div class="border-end bg-white" id="sidebar-wrapper">
                <div class="sidebar-heading border-bottom bg-light">Admin Dolly <br>
                </div>
                <div class="list-group list-group-flush">
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="<?=URL?>index.php/backend/catList/1">Quan ly danh muc</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Quan ly san pham</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Quan ly don hang</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Quan ly nguoi dung</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Quan ly tin tuc</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">More</a>
                </div>
            </div>
            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
                <!-- Top navigation-->
                <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                    <div class="container-fluid">
                        <button class="btn btn-primary" id="sidebarToggle">Show/hide Menu</button>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                                <li class="nav-item active"><a class="nav-link" href="<?=URL?>index.php">Home</a></li>
                                <li class="nav-item"><a class="nav-link" href="#!">Link</a></li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="#!">Action</a>
                                        <a class="dropdown-item" href="#!">Another action</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#!">Something else here</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <!-- Page content-->
                <div class="container-fluid">
                    <h1 class="mt-4">Simple Sidebar</h1>
                    <?php $this->view($data['page'],$data);?>
                </div>
            </div>
        </div>
        <footer>    
        <span>
                        <?php
                            $str= "";
                            if(!isset($_SESSION['user'])){
                              $str = "<a style='color: white' href='". URL ."index.php/backend/login'>
                              <span class='glyphicon glyphicon-user'></span><span>Login <-|</span>";
                            }
                            else{
                              $str = "<a style='color: white' href='". URL ."index.php/backend/login'>
                              <span class='glyphicon glyphicon-user'></span><span>Logout |-></span>";
                            }
                            echo $str;
                        ?>
                      </span>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="<?=URL?>asset/backend/js/scripts.js"></script>
    </body>
</html>
