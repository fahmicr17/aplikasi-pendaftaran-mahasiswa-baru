  <!-- Sidebar -->
  

<ul class="navbar-nav bg-info sidebar sidebar-dark accordion" id="accordionSidebar">
      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
          <div class="sidebar-brand-icon rotate-n-15">
              <i class="fas fa-code "></i>
          </div>
          <div class="sidebar-brand-text mx-2" style="font-family: Lucida Bright ;font-size: 20px; margin-right: 20px" >stmik web</div>
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
                ";
        $menu = $this->db->query($queryMenu)->result_array();
        ?>
      <!--AKHIR -->

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
         
          ";
            $subMenu = $this->db->query($queryMenu)->result_array();
            ?>
          <?php foreach ($subMenu as $sm) : ?>
              <?php if ($title == $sm['title']) : ?>
                  <li class="nav-item active "style="font-family: Lucida Bright ;font-size: 12px;">
                  <?php else : ?>
                  <li class="nav-item">
                  <?php endif; ?>
                  <a class="nav-link" href="<?= base_url($sm['url']); ?>">
                      <i class="<?= $sm['icon']; ?>"></i>
                      <span><?= $sm['title']; ?></span></a>
                  </li>
              <?php endforeach; ?>
              <hr class="sidebar-divider">
          <?php endforeach; ?>
        








          <!-- Nav Item - Tables -->
          <li class="nav-item">
              <a class="nav-link" href="<?= base_url('auth/logout'); ?>">
                  <i class="fas fa-fw fa-sign-out-alt"></i>
                  <span>Logout</span>
              </a>
          </li>
          <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>

  </ul>
  </nav>