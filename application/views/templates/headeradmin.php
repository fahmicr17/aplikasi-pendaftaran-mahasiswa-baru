  <!-- Sidebar -->
  <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
          <div class="sidebar-brand-icon rotate-n-15">
              <i class="fas fa-code"></i>
          </div>
          <div class="sidebar-brand-text mx-3">admin web</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- QUERY MENU -->
      <?php
        $role_id = $this->session->userdata('role_id');
        $queryMenu = "SELECT  `user_menu`.`id`, `menu`
                FROM  `user_menu` JOIN `user_acsess_menu`
                ON     `user_menu`.`id` = `user_acsess_menu`.`menu_id`
                WHERE   `user_acsess_menu`.`role_id` = $role_id
                ORDER BY `user_acsess_menu`.`menu_id` ASC
                ";
        $menu = $this->db->query($queryMenu)->result_array();

        ?>
      <!--AKHIR-->

      <!-- LOOPING MENU -->
      <?php foreach ($menu as $m) : ?>
          <div class="sidebar-heading">
              <?= $m['menu']; ?>
          </div>
          <?php
            $menuId = $m['id'];
            $queryMenu = "SELECT *
          FROM  `user_sub_menu` JOIN `user_menu`
          ON     `user_sub_menu`.`menu_id` = `user_menu`.`id`
          WHERE   `user_sub_menu`.`menu_id` = $menuId
          AND  `user_sub_menu`.`is_active` = 1
         
          ";
            $subMenu = $this->db->query($queryMenu)->result_array();
            ?>
          <?php foreach ($subMenu as $sm) : ?>
              <li class="nav-item">
                  <a class="nav-link" href="<?= base_url($sm['url']); ?>">
                      <i class="<?= $sm['icon']; ?>"></i>
                      <span><?= $sm['title']; ?></span></a>
              </li>
          <?php endforeach; ?>
          <hr class="sidebar-divider">
      <?php endforeach; ?>


      <!-- Nav Item - Dashboard -->




      <!-- Heading -->
      <div class="sidebar-heading">
          Menu
      </div>



      <!-- Nav Item - Tables -->
      <li class="nav-item">
          <a class="nav-link" href="<?= base_url('user/Information'); ?>">
              <i class="fab fa-fw fa-searchengin"></i>
              <span>Information</span></a>
      </li>
      <!-- Divider -->
      <hr class="sidebar-divider">


      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Nav Item - Tables -->
      <li class="nav-item">
          <a class="nav-link" href="<?= base_url('user/edit'); ?>">
              <i class="fas fa-fw fa-user-edit"></i>
              <span>Edit Profile</span>
          </a>
      </li>
      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Nav Item - Tables -->
      <li class="nav-item">
          <a class="nav-link" href="<?= base_url('user/edit'); ?>">
              <i class="fas fa-fw fa-user-edit"></i>
              <span>Edit Profile</span>
          </a>
      </li>
      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Nav Item - Tables -->
      <li class="nav-item">
          <a class="nav-link" href="<?= base_url('user/pengumuman'); ?>">
              <i class="fas fa-fw fa-bullhorn"></i>
              <span>Pengumuman</span>
          </a>
      </li>


      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Nav Item - Tables -->
      <li class="nav-item">
          <a class="nav-link" href="<?= base_url('auth/logout'); ?>">
              <i class="fas fa-fw fa-sign-out-alt"></i>
              <span>Logout</span>
          </a>
      </li>

  </ul>
  </nav>



  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>
  </ul>