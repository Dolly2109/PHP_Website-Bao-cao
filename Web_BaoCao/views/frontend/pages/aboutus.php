
<body class="sub_page">

  <section class="about_section">
    <div class="container-fluid  ">
      <div class="row">
        <div class="col-md-5 ml-auto">
          <div class="detail-box pr-md-3">
            <div class="heading_container">
              <h2>
                We Provide Best For You
              </h2>
            </div>
            <p>
              Totam architecto rem beatae veniam, cum officiis adipisci soluta perspiciatis ipsa, expedita maiores quae accusantium. Animi veniam aperiam, necessitatibus mollitia ipsum id optio ipsa odio ab facilis sit labore officia!
              Repellat expedita, deserunt eum soluta rem culpa. Aut, necessitatibus cumque. Voluptas consequuntur vitae aperiam animi sint earum, ex unde cupiditate, molestias dolore quos quas possimus eveniet facilis magnam? Vero, dicta.
            </p>
            <a href="">
              Read More
            </a>
          </div>
        </div>
        <div class="col-md-6 px-0">
          <div class="img-box">
            <img src="<?= URL?>asset/frontend/images/about-img.jpg" alt="">
          </div>
        </div>
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