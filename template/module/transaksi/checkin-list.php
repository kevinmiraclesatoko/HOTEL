<?php

include('component/com-transaksi.php')

?>

<section class="content-header">
	<h1>Tamu In-House <span class="small">Daftar tamu yang sedang menginap</span></h1>
</section>

<section class="content">
	<div class="box">
		<div class="box-body">
			<?php if(!empty($tamu_inhouse)) { ?>
			<table class="table table-striped">
				<thead>
					<tr>
						<th># Kamar</th>
						<th>Nama Tamu</th>
						<th>Tanggal Check-In</th>
						<th>Tanggal Check-Out</th>
						<th>Jumlah Deposit</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($tamu_inhouse as $tamu_inhouse) { ?>
					<tr>
						<td><?php echo $tamu_inhouse['nomor_kamar']; ?></td>
						<td><?php echo $tamu_inhouse['prefix'].'. '.$tamu_inhouse['nama_depan'].'&nbsp;'.$tamu_inhouse['nama_belakang']; ?></td>
						<td><?php echo $tamu_inhouse['tanggal_checkin']; ?></td>
						<td><?php echo $tamu_inhouse['tanggal_checkout']; ?></td>
						<td>Rp <?php echo number_format($tamu_inhouse['deposit']); ?></td>
						<td><a class="btn btn-xs btn-primary" href="?module=transaksi/checkin-update&transaksi=<?php echo $tamu_inhouse['id_transaksi_kamar']; ?>&kamar=<?php echo $tamu_inhouse['id_kamar']; ?>">Ubah</a></td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
			<?php } else { ?>
			<div class="alert alert-warning">
				<h4>Mohon maaf</h4>
				Untuk sementara tidak ada tamu yang sedang menginap.
			</div>
			<?php } ?>
		</div>
	</div>
</section>