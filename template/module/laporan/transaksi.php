<?php

include('component/com-laporan.php');

?>

<section class="content-header">
	<h1>Laporan Transaksi Kamar</h1>
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
				<button class="btn btn-success" type="submit" name="laporan-transaksi">Lihat Laporan</button>
			</div>
		</div>
	</form>
	<?php if(isset($_POST['laporan-transaksi'])) { ?>
	<div class="box">
		<div class="box-body">
			<table class="table table-striped">
				<thead>
					<tr>
						<th>Tanggal Transaksi</th>
						<th>Nomor Invoice</th>
						<th>Total Biaya Kamar</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($laporan_transaksi as $laporan_transaksi) { ?>
					<tr>
						<td><?php echo $laporan_transaksi['tanggal']; ?></td>
						<td><?php echo $laporan_transaksi['nomor_invoice']; ?></td>
						<td>Rp <?php echo number_format($laporan_transaksi['total_biaya_kamar']); ?></td>
					</tr>
					<?php } ?>
				</tbody>
				<tfoot>
					<tr>
						<td colspan="3"><span class="lead">Total Pendapatan : <b>Rp <?php echo number_format($total_laporan_transaksi); ?></b></span></td>
					</tr>
				</tfoot>
			</table>
		</div>
	</div>
	<?php } ?>
</section>