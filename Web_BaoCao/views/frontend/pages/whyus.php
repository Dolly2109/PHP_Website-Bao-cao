  <!-- why us section -->
<html>
    <body>
      
    <section class="why_us_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Why Choose Us
        </h2>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="box ">
            <div class="img-box">
              <img src="<?= URL?>asset/frontend/images/w1.png" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Fast Delivery
              </h5>
              <p>
                variations of passages of Lorem Ipsum available
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="box ">
            <div class="img-box">
              <img src="<?= URL?>asset/frontend/images/w2.png" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Free Shiping
              </h5>
              <p>
                variations of passages of Lorem Ipsum available
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="box ">
            <div class="img-box">
              <img src="<?= URL?>asset/frontend/images/w3.png" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Best Quality
              </h5>
              <p>
                variations of passages of Lorem Ipsum available
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end why us section -->
    <!-- info section -->
    <?php
    $this->view("frontend/modules/info",$data);
  ?>

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

