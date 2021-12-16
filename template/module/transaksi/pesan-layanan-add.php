<?php

include('component/com-tamu.php');

include('component/com-kamar.php');

include('component/com-layanan.php');

include('component/com-transaksi.php'); 

?>

<section class="content-header">
	<h1>Room Services <span class="small">Pilih produk / layanan</span></h1>
</section>

<section class="content">
	<div class="box">
		<div class="box-header">
			<h3 class="box-title">PESANAN KAMAR : 
				<b><?php echo $kamar_view['nomor_kamar']; ?></b> - 
				<b><?php echo $tamu_view['prefix'].'. '.$tamu_view['nama_depan'].'&nbsp;'.$tamu_view['nama_belakang']; ?></b>
			</h3>
			<a class="btn btn-warning pull-right" href="?module=transaksi/pesan-layanan">Batal</a>
		</div>
		<div class="box-body">
			<!-- Pilih Produk Layanan -->
			<?php if(!empty($_GET['layanan-filter'])) { ?>
			<?php if(isset($_POST['pesan-layanan'])) { ?>
			<div class="alert alert-success">
				<h4>Berhasil</h4>
				Anda berhasil menambah pesanan pada kamar <?php echo $kamar_view['nomor_kamar']; ?>. 
				<a href="?module=transaksi/pesan-layanan"><b>Kembali</b></a>
			</div>
			<?php } ?>
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>Nama Produk / Layanan</th>
						<th>Harga</th>
						<th class="col-sm-2">Jumlah Pesanan</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($layanan_filter as $layanan_filter) { ?>
					<form action="" method="post">
						<input type="hidden" name="id_transaksi_kamar" value="<?php echo $transaksi_kamar['id_transaksi_kamar']; ?>" />
						<input type="hidden" name="harga_layanan" value="<?php echo $layanan_filter['harga_layanan']; ?>" />
						<input type="hidden" name="id_layanan" value="<?php echo $layanan_filter['id_layanan']; ?>" />
						<tr>
							<td><?php echo $layanan_filter['nama_layanan']; ?></td>
							<td><?php echo 'Rp '.number_format($layanan_filter['harga_layanan']).' / '.$layanan_filter['satuan']; ?></td>
							<td>
								<div class="row">
									<div class="col-sm-6">
										<input class="form-control" name="jumlah" />
									</div>
									<div class="col-sm-6">
										<?php echo $layanan_filter['satuan']; ?>
									</div>
								</div>
							</td>
							<td>
								<button class="btn btn-xs btn-success" type="submit" name="pesan-layanan">Pesan</button>
							</td>
						</tr>
					</form>
					<?php } ?>
				</tbody>
			</table>
			<?php } else { ?>
			<!-- Pilih Kategori Layanan -->
			<div class="row">
				<?php foreach($layanan_kategori as $layanan_kategori) { ?>
				<div class="col-sm-3">
					<a class="btn btn-lg btn-block btn-primary" href="<?php echo $url; ?>&layanan-filter=<?php echo $layanan_kategori['id_layanan_kategori']; ?>"><?php echo $layanan_kategori['nama_layanan_kategori']; ?></a>
				</div>
				<?php } ?>
			</div>
			<?php } ?>
		</div>
	</div>
</section>