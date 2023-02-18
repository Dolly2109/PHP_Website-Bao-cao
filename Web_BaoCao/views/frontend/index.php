<?php $this->view("frontend/modules/header",$data); ?>
<?php $this->view("frontend/modules/category",$data); ?>

    <!-- slider section -->
    <section class="slider_section ">

      <?php $this->view("frontend/modules/sidebar",$data); ?>		
      
    </section>
    <!-- end slider section -->
  </div>


  <!-- product section -->

  <section class="product_section layout_padding">

    <?php $this->view($data['page'],$data); ?>

  </section>

  <!-- end product section -->

  <!-- about section -->

  <?php $this->view("frontend/modules/view",$data); ?>		
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
  <!-- cart -->
  <script src="<?= URL?>asset/cart/js/util.js"></script> <!-- util functions included in the CodyHouse framework -->
  <script src="<?= URL?>asset/cart/js/main.js"></script> 
  </body>

</html>