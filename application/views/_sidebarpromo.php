<aside class="main-sidebar">

      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree">
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="assets/dist/img/user1-128x128.jpg" class="img-circle elevation-2" alt="User Image"> &nbsp&nbsp
            <?php $user = $this->session->get_userdata('user'); ?>
             <a href="#" class="d-block"><?php echo $user['user']['nombre'] . ' ' . $user['user']['apellido'] ?></a>
          </div>
          
        </div>
          <li class="header">Secciones</li>
          <!-- Optionally, you can add icons to the links -->
          <li<?php if (isset($menu_perfil)) echo $menu_perfil; ?>><a href="<?php echo base_url(); ?>administradores/perfil"><i class="fa fa-id-card"></i> <span>Mi Perfil</span></a></li>
          
          <li<?php if (isset($menu_marca)) echo $menu_marca; ?>><a href="<?php echo base_url(); ?>administradores/marcas/"><i class="fab fa-bandcamp"></i> <span>Mis Marcas</span></a></li>
          <li<?php if (isset($menu_tienda)) echo $menu_tienda; ?>><a href="<?php echo base_url(); ?>administradores/tiendas/"><i class="fa fa-shopping-bag"></i> <span>Mis Tiendas</span></a></li>
          <li class="header">Salir</li>
          <li><a href="<?php echo base_url(); ?>login/desconectar"><i class="fa fa-sign-out"></i> <span>Cerrar sesión</span></a></li>
        </ul>
        <!-- /.sidebar-menu -->
      </section>
      <!-- /.sidebar -->
    </aside>