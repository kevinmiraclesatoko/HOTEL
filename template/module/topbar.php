<header class="main-header">
        <!-- Logo -->
        <a href="index2.html" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>E</b>H</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>ECK</b>Hotel</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a href="#" class="navbar-brand">
            <b><?php echo $perusahaan['nama_hotel']; ?></b>  
            <span class="small"><?php echo $perusahaan['nama_perusahaan']; ?></span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="template/images/<?php echo $_SESSION['images']; ?>" class="user-image" alt="User Image" />
                  <span class="hidden-xs"><?php echo $_SESSION['nama']; ?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="template/images/<?php echo $_SESSION['images']; ?>" class="img-circle" alt="User Image" />
                    <p>
                      <?php echo $_SESSION['nama']; ?>
                      <small><?php echo $_SESSION['jabatan']; ?></small>
                    </p>
                  </li>               
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="logout.php" class="btn btn-default btn-flat">Log Out</a>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
            </ul>
          </div>
        </nav>
      </header>