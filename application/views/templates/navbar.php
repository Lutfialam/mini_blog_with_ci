<!-- navbar -->
<div class="navbar-fixed">
  <nav class="teal">
      <div class="container">
          <div class="nav-wrapper">
            <a href="<?= base_url(); ?>" class="brand-logo"><img src="<?= base_url(); ?>img/logo/logo.png" class="logo"></a>
                <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                  <li><a href="<?= base_url(); ?>about">About</a></li>
                  <li><a href="<?= base_url(); ?>home">Home</a></li>
                  <li><a href="<?= base_url(); ?>Bve">OpenBVE</a></li>
                  <li><a href="<?= base_url(); ?>auth">Login</a></li>
                  <?php if( $this->session->userdata('role_id') == 1 ) { ?>
                  <li><a href="<?= base_url(); ?>admin">Dahsboard</a></li>
                  <?php } ?>
                  <?php if( $this->session->userdata('email') ) { ?>
                  <li><a href="<?= base_url(); ?>auth/logout">Logout</a></li>
                  <?php } ?>
              </ul>
          </div>
      </div>
  </nav>
</div>
  <!-- sidenav -->
  <ul class="sidenav teal" id="mobile-demo">
      <li><p class="sidenavp"><a href="<?= base_url(); ?>about" class="white-text">About</a></p></li>
      <li><p class="sidenavp"><a href="<?= base_url(); ?>home" class="white-text">home</a></p></li>
      <li><p class="sidenavp"><a href="<?= base_url(); ?>Bve" class="white-text">OpenBVE</a></p></li>
      <li><p class="sidenavp"><a href="<?= base_url(); ?>auth" class="white-text">Login</a></p></li>
      <?php if( $this->session->userdata('role_id') == 1 ) { ?>
      <li><p class="sidenavp"><a href="<?= base_url(); ?>admin" class="white-text">Dahsboard</a></p></li>
      <?php } ?>
      <?php if( $this->session->userdata('email') ) { ?>
      <li><p class="sidenavp"><a href="<?= base_url(); ?>auth/logout" class="white-text">Logout</a></p></li>
      <?php } ?>
  </ul>
    <!-- end sidenav -->
    <!-- end navbar -->