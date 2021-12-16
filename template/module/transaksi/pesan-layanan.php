<?php

include('component/com-transaksi.php');

?>

<section class="content-header">
	<h1>Room Services <span class="small">Pilih kamar yang akan melakukan pemesanan</span></h1>
</section>

<section class="content">
	<div class="box">
		<div class="box-body">
			<?php if(!empty($tamu_inhouse)) { ?>
			<div class="row">
				<?php foreach($tamu_inhouse as $tamu_inhouse) { ?>
				<div class="col-sm-3">
					<div class="small-box bg-blue">
						<div class="inner">
							<h3><?php echo $tamu_inhouse['nomor_kamar']; ?></h3>
							<p><?php echo $tamu_inhouse['prefix'].'. '.$tamu_inhouse['nama_depan'].'&nbsp;'.$tamu_inhouse['nama_belakang']; ?></p>
						</div>
						<div class="icon">
							<i class="fa fa-bed"></i>
						</div>
						<a class="small-box-footer" href="?module=transaksi/pesan-layanan-add&transaksi=<?php echo $tamu_inhouse['id_transaksi_kamar']; ?>&tamu=<?php echo $tamu_inhouse['id_tamu']; ?>&kamar=<?php echo $tamu_inhouse['id_kamar']; ?>">Masukan Pesanan Layanan</a>
					</div>
				</div>
				<?php } ?>
			</div>
			<?php } else { ?>
			<div class="alert alert-warning">
				<h4>Mohon Maaf</h4>
				Untuk sementara, tidak ada tamu yang sedang menginap.
			</div>
			<?php } ?>
		</div>
	</div>
</section>