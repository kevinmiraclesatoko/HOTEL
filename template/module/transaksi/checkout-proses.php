<?php

include('component/com-transaksi.php');

include('component/com-hitung-transaksi.php');

?>

<section class="content-header">
	<h1>Check Out <span class="small">proses check-out tamu</span></h1>
</section>

<section class="content">
	<div class="box">
		<?php if(isset($_POST['checkout'])) { ?>
		<div class="alert alert-success">
			<h4>Berhasil</h4>
			Sukses melakukan check-out pada kamar nomor : <?php echo $transaksi_kamar['nomor_kamar']; ?>. 
			<a href="?module=transaksi/checkout"><b>Kembali</b></a>
		</div>
		<?php } else { ?>
		<div class="box-header">
			<h3 class="box-title">KAMAR NOMOR : <b><?php echo $transaksi_kamar['nomor_kamar']; ?></b></h3>
		</div>
		<form action="" method="post">
			<div class="box-body">
				<div class="row">
					<div class="col-sm-3">						
						<div class="alert alert-info">
							<h4><?php echo $transaksi_kamar['nama_kamar_tipe']; ?></h4>
							<ul class="list-unstyled">
								<li>Harga / Malam : <b>Rp <?php echo number_format($transaksi_kamar['harga_malam']); ?></b></li>
								<li>Maximal Orang Dewasa : <b><?php echo $transaksi_kamar['max_dewasa']; ?> Orang</b></li>
								<li>Maximal Anak-anak : <b><?php echo $transaksi_kamar['max_anak']; ?> Orang</b></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="form-group">
							<label># INVOICE</label>
							<input class="form-control" name="nomor_invoice" value="<?php echo $transaksi_kamar['nomor_invoice']; ?>" readonly />
						</div>
						<div class="form-group">
							<label>Nama Tamu</label>
							<input class="form-control" value="<?php echo $transaksi_kamar['prefix'].'. '.$transaksi_kamar['nama_depan'].'&nbsp;'.$transaksi_kamar['nama_belakang']; ?>" readonly />
						</div>
					</div>
					<div class="col-sm-5">
						<div class="form-group">
							<label>Jumlah Tamu</label>
							<div class="row">
								<div class="col-sm-6">
									<input class="form-control" value="<?php echo $transaksi_kamar['jumlah_dewasa'].' Dewasa'; ?>" readonly />
								</div>
								<div class="col-sm-6">
									<input class="form-control" value="<?php echo $transaksi_kamar['jumlah_anak'].' Anak-anak'; ?>" readonly />
								</div>
							</div>
						</div>
						<div class="form-group">
							<label>Tanggal / Waktu Check-In</label>
							<div class="row">
								<div class="col-sm-6">
									<input class="form-control" value="<?php echo $transaksi_kamar['tanggal_checkin']; ?>" readonly />
								</div>
								<div class="col-sm-6">
									<input class="form-control" value="<?php echo $transaksi_kamar['waktu_checkin']; ?>" readonly />
								</div>
							</div>
						</div>
						<div class="form-group">
							<label>Tanggal / Waktu Check-Out</label>
							<div class="row">
								<div class="col-sm-6">
									<input id="checkout" class="form-control" name="tanggal_checkout" data-date-format="yyyy-mm-dd" value="<?php echo $transaksi_kamar['tanggal_checkout']; ?>" />
								</div>
								<div class="col-sm-6">
									<input class="form-control" name="waktu_checkout" value="<?php echo $transaksi_kamar['waktu_checkout']; ?>" />
								</div>
							</div>
						</div>
					</div>
				</div>
				<h3>Rincian Tagihan</h3>
				<hr/>
				<table class="table table-striped">
					<thead>
						<tr>
							<th>Keterangan Layanan / Produk</th>
							<th>Harga</th>
							<th>Qty</th>
							<th>Total</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Room reserved type : <?php echo $transaksi_kamar['nama_kamar_tipe'].' ROOM'; ?></td>
							<td>Rp <?php echo number_format($transaksi_kamar['harga_malam']); ?></td>
							<td><?php echo $durasi.' malam'; ?></td>
							<td>Rp <?php echo number_format($subtotal_kamar); ?></td>
						</tr>
						<?php foreach($transaksi_layanan as $transaksi_layanan) { ?>
						<tr>
							<td><?php echo $transaksi_layanan['nama_layanan']; ?></td>
							<td>Rp <?php echo number_format($transaksi_layanan['harga_layanan']); ?></td>
							<td><?php echo $transaksi_layanan['jumlah'].'&nbsp;'.$transaksi_layanan['satuan']; ?></td>
							<td>Rp <?php echo number_format($transaksi_layanan['total']); ?></td>
						</tr>
						<?php } ?>
						<tr>
							<td rowspan="4"></td>
							<td colspan="2"><b>Sub-Total</b></td>
							<td><b>Rp <?php echo number_format($subtotal); ?></b></td>
						</tr>
						<tr>							
							<td colspan="2">PPn 10%</td>
							<td>Rp <?php echo number_format($ppn); ?></td>
						</tr>
						<tr>							
							<td colspan="2">Jumlah Deposit</td>
							<td class="text-red">Rp <?php echo number_format($transaksi_kamar['deposit']); ?></td>
						</tr>
						<tr>							
							<td colspan="2"><b>Grand Total</b></td>
							<td><b>Rp <?php echo number_format($grand_total); ?></b></td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="box-footer">
				<input type="hidden" name="id_kamar" value="<?php echo $transaksi_kamar['id_kamar']; ?>" />
				<input type="hidden" name="id_transaksi_kamar" value="<?php echo $transaksi_kamar['id_transaksi_kamar']; ?>" />
				<input type="hidden" name="jumlah_pembayaran" value="<?php echo $grand_total; ?>" />

				<button class="btn btn-success" type="submit" name="checkout">Check Out</button>
				<a class="btn btn-primary" href="?report=transaksi-tamu&transaksi=<?php echo $transaksi_kamar['id_transaksi_kamar']; ?>" target="_blank">Cetak Invoice</a>
				<a class="btn btn-warning" href="?module=transaksi/checkin">Batal</a>
			</div>
		</form>
		<?php } ?>
	</div>
</section>