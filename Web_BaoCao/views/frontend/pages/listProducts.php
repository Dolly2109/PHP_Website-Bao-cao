  <!-- Nav category -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Category </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <?php
					$category = $data['category'];
          // print_r($category);
          foreach($category as $cat):
            if ($cat['parent']==0) {
              ?>
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <?= $cat['category_name'];?>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <?php
							foreach($category as $submenu):
								if ($submenu['parent']==$cat['id']) {
						?>
									<li><a class="dropdown-item" href="<?= URL ?>index.php/frontend/listProducts/
										<?= $submenu['id'] ?>"><?= $submenu['category_name'] ?></a></li>
						<?php
							}
						endforeach;
						?>
            <!-- <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li> -->
          </ul>
          </li>
          <?php
        }
      endforeach;
      ?>
      </ul>
    </div>
  </div>
</nav>
<!-- end category -->
<section class="product_section layout_padding">

  <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Our Products
        </h2>
      </div>
      <div class="row">

        <?php
          // print_r($data['product'])
          foreach ($data['products'] as $listPrd):
        ?>
        <div class="col-sm-6 col-lg-4">
            <div class="box">
              <div class="img-box">
                <img src="<?= URL?>asset/frontend/images/<?= $listPrd['image'];?>" alt="">
                <a href="" class="add_cart_btn">
                  <span>
                    Add To Cart
                  </span>
                </a>
              </div>
              <div class="detail-box">
                <h5>
                <?= $listPrd['product_name']; ?>
                </h5>
                <a href="" class="add_cart_btn">
                  <span>
                    Detail
                  </span>
                </a>
                <div class="product_info">
                  <h5>
                    <span>$</span> <?= $listPrd['price']; ?>
                  </h5>
                  <div class="star_container">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
        </div>

        <?php
          endforeach;
        ?>
        <!-- col -->
      </div>
      <div class="btn_box">
        <a href="" class="view_more-link">
          View More
        </a>
      </div>
    </div>
  </section>

<!-- end about section -->

<!-- info section -->
<?php $this->view("frontend/modules/info",$data); ?>		
<!-- end info_section -->


<!-- footer section -->
<footer class="footer_section">
  <?php $this->view("frontend/modules/footer"); ?>
</footer>
<!-- footer section -->

<!-- jQery -->
<script src="<?= URL?>asset/frontend/js/jquery-3.4.1.min.js"></script>
<!-- bootstrap js -->
<script src="<?= URL?>asset/frontend/js/bootstrap.js"></script>
<!-- custom js -->
<script src="<?= URL?>asset/frontend/js/custom.js"></script>



</body>

</html>