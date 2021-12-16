<?php

include('component/com-kamar.php');

?>

<section class="content-header">
	<h1>Pembersihan Kamar <span class="small">Administrasi pembersihan kamar</span></h1>
</section>

<section class="content">
	<div class="box">
		<div class="box-body">
			<?php if(!empty($kamar_kotor)) { ?>
			<div class="row">
				<?php foreach($kamar_kotor as $kamar_kotor) { ?>
				<div class="col-sm-3">
					<div class="small-box bg-yellow">
						<div class="inner">
							<h3><?php echo $kamar_kotor['nomor_kamar']; ?></h3>
							<p><?php echo $kamar_kotor['nama_kamar_tipe']; ?></p>
						</div>
						<div class="icon">
							<i class="fa fa-bed"></i>
						</div>
						<a class="small-box-footer" href="?module=kamar/kamar-update&kamar=<?php echo $kamar_kotor['id_kamar']; ?>">Pilih Kamar</a>
					</div>
				</div>
				<?php } ?>
			</div>
			<?php } else { ?>
			<div class="alert alert-warning">
				<h4>Mohon Maaf</h4>
				Untuk sementara, tidak ada kamar yang sedang kotor.
			</div>
			<?php } ?>
		</div>
	</div>
</section>