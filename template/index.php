<!DOCTYPE html>
<html>
  <?php include('module/header.php'); ?>
  
  <body class="skin-blue sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">

      <?php include('module/topbar.php'); ?>

      <!-- =============================================== -->

      <!-- Left side column. contains the sidebar -->
      <?php include('module/sidebar.php'); ?>

      <!-- =============================================== -->

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <?php 

        if(!empty($_GET['module'])) {

          $module=$_GET['module'];
          include('module/'.$module.'.php');
        } else {

          include('module/dashboard.php');
        }

        ?>
        <!-- /.content -->
      </div><!-- /.content-wrapper -->

      <?php include('module/footer.php'); ?>

      <!-- Control Sidebar -->
      <!-- /.control-sidebar -->
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <?php include('module/script.php'); ?>
  </body>
</html>
