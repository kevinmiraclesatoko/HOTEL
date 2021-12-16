<?php

include('component/com-transaksi.php');

include('component/com-kamar.php');

?>

<section class="content-header">
	<h1>Check Out <span class="small">Pilih kamar yang terpakai</span></h1>
</section>

<section class="content">
	<div class="box">
		<div class="box-body">
			<?php if(!empty($tamu_inhouse)) { ?>
			<div class="row">
				<?php foreach($tamu_inhouse as $tamu_inhouse) { ?>
				<div class="col-sm-3">
					<div class="small-box bg-red">
						<div class="inner">
							<h3><?php echo $tamu_inhouse['nomor_kamar']; ?></h3>
							<p><?php echo $tamu_inhouse['prefix'].'. '.$tamu_inhouse['nama_depan'].'&nbsp;'.$tamu_inhouse['nama_belakang']; ?></p>
						</div>
						<div class="icon">
							<i class="fa fa-bed"></i>
						</div>
						<a class="small-box-footer" href="?module=transaksi/checkout-proses&transaksi=<?php echo $tamu_inhouse['id_transaksi_kamar']; ?>">Pilih Kamar</a>
					</div>
				</div>
				<?php } ?>
			</div>
			<?php } else { ?>
			<div class="alert alert-warning">
				<h4>Mohon Maaf</h4>
				Untuk sementara, tidak ada kamar yang terpakai.
			</div>
			<?php } ?>
		</div>
	</div>
</section>