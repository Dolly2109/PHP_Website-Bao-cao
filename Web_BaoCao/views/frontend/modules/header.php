<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <link rel="icon" href="images/fevicon.png" type="image/gif" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Dolly</title>

  <!-- drop navbar -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
  <!-- bootstrap core css -->
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="<?= URL?>asset/frontend/css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet"> <!-- range slider -->

  <!-- font awesome style -->
  <link href="<?= URL?>asset/frontend/css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="<?= URL?>asset/frontend/css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="<?= URL?>asset/frontend/css/responsive.css" rel="stylesheet" />
  
  <!-- javascript -->
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <!-- add to cart -->
  <script>document.getElementsByTagName("html")[0].className += " js";</script>
  <link rel="stylesheet" href="<?= URL?>asset/cart/css/style.css">
</head>

<body>

  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
    <div class="header_top">
        <div class="container-fluid">
          <div class="top_nav_container">
            <div class="contact_nav">
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  Call : +84 352412318
                </span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>
                  Email : nqlit2109@gmail.com
                </span>
              </a>
            </div>
            <from class="search_form">
              <input type="text" class="form-control" placeholder="Search here...">
              <button class="" type="submit">
                <i class="fa fa-search" aria-hidden="true"></i>
              </button>
            </from>
            <div class="user_option_box">
              <a href="<?= URL ?>index.php/frontend/register" class="account-link">
                <i class="fa fa-user" aria-hidden="true"></i>
                <span>
                  My Account 
                </span>
              </a>
              <h4 style="color: white">
				            (Hi!
					        <?php
						        if(isset($_SESSION['user'])){
							        echo $_SESSION['user'].')';
						          }
					        ?>
		            </h4>
                <a href="" class="cart-link">
                <i class="fa " aria-hidden="true"></i>
                    <span>
                        <?php
                            $str= "";
                            if(!isset($_SESSION['user'])){
                              $str = "<a style='color: white' href='". URL ."index.php/frontend/login'>
                              <span class='glyphicon glyphicon-user'></span><span>Login <-|</span>";
                            }
                            else{
                              $str = "<a style='color: white' href='". URL ."index.php/frontend/logout'>
                              <span class='glyphicon glyphicon-user'></span><span>Logout |-></span>";
                            }
                            echo $str;
                        ?>
                      </span>
              </a>
              <a href="<?= URL ?>index.php/frontend/cart" class="cart-link">
                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                <span>
                  Cart
                </span>
              </a>
            </div>
          </div>

        </div>
      </div>
      <div class="header_bottom">
        <div class="container-fluid">
          <nav class="navbar navbar-expand-lg custom_nav-container ">
            <a class="navbar-brand" href="<?=URL;?>index.php">
              <span>
                Dolly
              </span>
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class=""> </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ">
                <?php
                    // print_r($data['menu']);
                    $menu = $data['menu'];
                    foreach($menu as $data) :
                      if ($data['menu_name'] == 'Home') {
                      ?>
                        <li class="nav-item active">
                          <a class="nav-link" href="<?=URL;?>index.php/<?=$data['menu_link']?>">Home <span class="sr-only">(current)</span></a>
                        </li>
                      <?php
                      }
                      else{
                        ?>
                        <li class="nav-item">
                          <a class="nav-link" href="<?= URL ?>index.php/<?=$data['menu_link']?>"><?=$data['menu_name']?></a>
                        </li>
                    <?php
                        }
                  endforeach;
                ?>             
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </header>
    <!-- end header section -->
