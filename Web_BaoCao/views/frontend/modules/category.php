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