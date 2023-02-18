<!-- =============================================New Product============================================ -->
        
  <div class="container">
      <div class="heading_container heading_center">
        <h2>
         New Product
        </h2>
      </div>
      <div class="row">
        <?php
          // print_r($data['new_product'])
          foreach ($data['new_product'] as $newPrd):
        ?>
        <div class="col-sm-6 col-lg-4">
            <div class="box">
              <div class="img-box">
                <img src="<?= URL?>asset/frontend/images/<?= $newPrd['image'];?>" alt="">
                <a href="<?= URL ?>index.php/frontend/AddCart" class="add_cart_btn">
                  <span>
                    Add To Cart
                  </span>
                </a>
              </div>
              <div class="detail-box">
                <h5>
                <?= $newPrd['product_name']; ?>
                </h5>
                <a href="<?= URL ?>index.php/frontend/detail/<?= $newPrd['id']?>" class="add_cart_btn">
                  <span>
                    Detail
                  </span>
                </a>
                <div class="product_info">
                  <h5>
                    <span>$</span> <?= $newPrd['price']; ?>
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
      </div>
      <!-- =============================================Promotion Product============================================ -->
      <div class="heading_container heading_center">
        <h2>
          Promotion Product
        </h2>
      </div>
      <div class="row">
        <?php
          // print_r($data['new_product'])
          foreach ($data['promotionProduct'] as $PrmPrd):
        ?>
        <div class="col-sm-6 col-lg-4">
            <div class="box">
              <div class="img-box">
                <img src="<?= URL?>asset/frontend/images/<?= $PrmPrd['image'];?>" alt="">
                <a href="<?= URL ?>index.php/frontend/AddCart" class="add_cart_btn">
                  <span>
                    Add To Cart
                  </span>
                </a>
              </div>
              <div class="detail-box">
                <h5>
                <?= $PrmPrd['product_name']; ?>
                </h5>
                <a href="<?= URL ?>index.php/frontend/detail/<?= $PrmPrd['id']?>" class="add_cart_btn">
                  <span>
                    Detail
                  </span>
                </a>
                <div class="product_info">
                  <h5>
                    <span>$</span> <?= $PrmPrd['price']; ?>
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
      </div>
            <!-- =============================================Best - selling product============================================ -->
            <div class="heading_container heading_center">
        <h2>
        Best - Selling Product
        </h2>
      </div>
      <div class="row">
        <?php
          // print_r($data['new_product'])
          foreach ($data['bestsellerProduct'] as $BeslPrd):
        ?>
        <div class="col-sm-6 col-lg-4">
            <div class="box">
              <div class="img-box">
                <img src="<?= URL?>asset/frontend/images/<?= $BeslPrd['image'];?>" alt="">
                <a href="<?= URL ?>frontend/AddCart" class="add_cart_btn">
                  <span>
                    Add To Cart
                  </span>
                </a>
              </div>
              <div class="detail-box">
                <h5>
                <?= $BeslPrd['product_name']; ?>
                </h5>
                <a href="<?= URL ?>index.php/frontend/detail/" class="add_cart_btn">
                  <span>
                    Detail
                  </span>
                </a>
                <div class="product_info">
                  <h5>
                    <span>$</span> <?= $BeslPrd['price']; ?>
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
      </div>
      <div class="btn_box">
        <a href="<?= URL ?>index.php/frontend/product" class="view_more-link">
          View More
        </a>
      </div>
  </div>