<!DOCTYPE html>
<html>
  <?php include('module/header.php'); ?>
  
  <body onload="window.print();">
    <!-- Site wrapper -->
    <div class="wrapper">
      <section class="invoice">
        <h2 class="page-header">
          <?php echo $perusahaan['nama_hotel']; ?> 
          <span class="small"><?php echo $perusahaan['nama_perusahaan']; ?></span>
          <span class="lead text-red pull-right"><b>INVOICE</b></span>
        </h2>
        <h6>
          <?php echo $perusahaan['alamat_jalan'].', '.$perusahaan['alamat_kabupaten'].' - '.$perusahaan['alamat_provinsi']; ?>
          <br/><b>Telp :</b> <?php echo $perusahaan['nomor_telp']; ?> -  <b>Fax :</b> <?php echo $perusahaan['nomor_fax']; ?> -  <b>Email :</b> <?php echo $perusahaan['email']; ?>
          <br/><b><?php echo $perusahaan['website']; ?></b>
        </h6>
        <br/>
        <br/>

        <!-- Report Content -->
        <?php 
        
        $report=$_GET['report'];
        include('report/'.$report.'.php');
        
        ?>
        <!-- end:Report -->
      </section>
    </div>

    <!-- jQuery 2.1.4 -->
    <?php include('module/script.php'); ?>
  </body>
</html>
