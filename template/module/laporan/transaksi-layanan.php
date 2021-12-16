<?php

include('component/com-laporan.php');

?>

<section class="content-header">
	<h1>Laporan Transaksi Produk / Layanan</h1>
</section>

<section class="content">
	<form action="" method="post">
		<div class="row">
			<div class="col-sm-3">
				<div class="form-group">
					<input id="checkin" data-date-format="yyyy-mm-dd" class="form-control" name="tanggal-start" placeholder="Dari Tanggal" />
				</div>
			</div>
			<div class="col-sm-3">
				<div class="form-group">
					<input id="checkout" data-date-format="yyyy-mm-dd" class="form-control" name="tanggal-end" placeholder="Sampai Tanggal" />
				</div>
			</div>
			<div class="col-sm-3">
				<button class="btn btn-success" type="submit" name="laporan-layanan">Lihat Laporan</button>
			</div>
		</div>
	</form>
	<?php if(isset($_POST['laporan-layanan'])) { ?>
	<div class="box">
		<div class="box-body">
			<table class="table table-striped">
				<thead>
					<tr>
						<th>Tanggal / Waktu</th>
						<th>Operator</th>
						<th>Nomor Kamar</th>
						<th>Produk / Layanan</th>
						<th>Harga Satuan</th>
						<th>Jumlah</th>
						<th>Total</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($laporan_layanan as $laporan_layanan) { ?>
					<tr>
						<td><?php echo $laporan_layanan['tanggal'].' - '.$laporan_layanan['waktu']; ?></td>
						<td><?php echo $laporan_layanan['nama']; ?></td>
						<td><?php echo $laporan_layanan['nomor_kamar']; ?></td>
						<td><?php echo $laporan_layanan['nama_layanan']; ?></td>
						<td>Rp <?php echo number_format($laporan_layanan['harga_layanan']); ?></td>
						<td><?php echo $laporan_layanan['jumlah'].'&nbsp;'.$laporan_layanan['satuan']; ?></td>
						<td>Rp <?php echo number_format($laporan_layanan['total']); ?></td>
					</tr>
					<?php } ?>
				</tbody>
				<tfoot>
					<tr>
						<td colspan="3"><span class="lead">Total Pendapatan : <b>Rp <?php echo number_format($total_laporan_layanan); ?></b></span></td>
					</tr>
				</tfoot>
			</table>
		</div>
	</div>
	<?php } ?>
</section>