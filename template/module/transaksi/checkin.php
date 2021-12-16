<?php

include('component/com-kamar.php');

?>

<section class="content-header">
	<h1>Check In <span class="small">Pilih kamar yang tersedia</span></h1>
</section>

<section class="content">
	<div class="box">
		<div class="box-body">
			<?php if(!empty($kamar_tersedia)) { ?>
			<div class="row">
				<?php foreach($kamar_tersedia as $kamar_tersedia) { ?>
				<div class="col-sm-3">
					<div class="small-box bg-green">
						<div class="inner">
							<h3><?php echo $kamar_tersedia['nomor_kamar']; ?></h3>
							<p><?php echo $kamar_tersedia['nama_kamar_tipe']; ?></p>
						</div>
						<div class="icon">
							<i class="fa fa-bed"></i>
						</div>
						<a class="small-box-footer" href="?module=transaksi/checkin-add&kamar=<?php echo $kamar_tersedia['id_kamar']; ?>">Pilih Kamar</a>
					</div>
				</div>
				<?php } ?>
			</div>
			<?php } else { ?>
			<div class="alert alert-warning">
				<h4>Mohon Maaf</h4>
				Untuk sementara, tidak ada kamar yang tersedia.
			</div>
			<?php } ?>
		</div>
	</div>
</section>