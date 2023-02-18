
<section class="product_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <?php
                $detail = $data['detail'];
                // print_r($detail);
        ?>
        <h2>
          Product Details
        </h2>
      </div>
      <div class="row">
        <div class="col-sm-6 col-lg-4">
          <div class="box">
            <div class="img-box">
              <img src="<?=URL?>asset/frontend/<?= $detail['image'];?>" alt="">
              <a href="" class="add_cart_btn">
                <span>
                  Add To Cart
                </span>
              </a>
            </div>
            <div class="detail-box">
              <h5>
              <?= $detail['product_name']?>
              </h5>
              <div class="product_info">
                <h5>
                  <span>$</span> <?= $detail['price']?>
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
        <div class="col-sm-6 col-lg-4">
        <h5>
            <?= $detail['product_detail']?>
        </h5>
        </div>
      <div class="btn_box">
        <a href="<?= URL ?>index.php/frontend/product" class="view_more-link">
          View More
        </a>
      </div>
    </div>
  </section>


  <!-- end product section -->

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