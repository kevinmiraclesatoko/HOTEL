<?php

include('component/com-kamar.php');

//include('component/com-booking.php');

?>

<section class="content-header">
	<h1>Reservasi Kamar</h1>
</section>

<section class="content">
	<div class="box">
		<div class="box-body">
			<?php if(!empty($_GET['kamar'])) { ?>
			<form action="" method="post">
				<div class="row">
					<div class="col-sm-3">
						<div class="small-box bg-aqua">
							<div class="inner">
								<h3><?php echo $kamar_view['nomor_kamar']; ?></h3>
								<p><?php echo $kamar_view['nama_kamar_tipe']; ?></p>
							</div>
							<div class="icon">
								<i class="fa fa-bed"></i>
							</div>
						</div>
						<a class="btn btn-warning btn-block" href="?module=transaksi/booking">BATAL</a>
					</div>
					<div class="col-sm-3">
						<legend>Pilih Tanggal Booking</legend>
						<div class="form-group">
							<label>Tanggal Check In</label>
							<input id="checkin" class="form-control" name="start" required />
						</div>
						<div class="form-group">
							<label>Tanggal Check Out</label>
							<input id="checkout" class="form-control" name="end" required />
						</div>
					</div>
				</div>
			</form>
			<?php } else { ?>
			<div class="row">
				<?php foreach($kamar as $kamar) { ?>
				<div class="col-sm-3">
					<div class="small-box bg-aqua">
						<div class="inner">
							<h3><?php echo $kamar['nomor_kamar']; ?></h3>
							<p><?php echo $kamar['nama_kamar_tipe']; ?></p>
						</div>
						<div class="icon">
							<i class="fa fa-bed"></i>
						</div>
						<a class="small-box-footer" href="<?php echo $url; ?>&kamar=<?php echo $kamar['id_kamar']; ?>">Lihat Selengkapnya</a>
					</div>
				</div>
				<?php } ?>
			</div>
			<?php } ?>
		</div>
	</div>
</section>