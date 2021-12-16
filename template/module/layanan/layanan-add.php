<?php

include('component/com-layanan.php');

?>

<section class="content-header">
	<h1>Tambah Layanan</h1>
</section>

<section class="content">
	<?php if(isset($_POST['layanan-add'])) { ?>
	<div class="alert alert-success">
		<h4>Berhasil</h4>
		Anda telah melakukan penambahan data layanan. 
		<br/></br/>
		<a class="btn btn-info" href="?module=layanan/layanan-add">Tambah Lagi</a>
		<a class="btn btn-info" href="?module=layanan/layanan-list">Kembali</a>
	</div>
	<?php } else { ?>
	<form action="" method="post">
		<div class="box">
			<div class="box-body">
				<div class="row">
					<div class="col-sm-4">
						<div class="form-group">
							<label>Nama Layanan / Produk</label>
							<input class="form-control" name="nama_layanan" />
						</div>
						<div class="form-group">
							<label>Kategori Layanan / Produk</label>
							<select class="form-control" name="id_layanan_kategori">
								<option>-- Pilih --</option>
								<?php foreach($layanan_kategori as $layanan_kategori) { ?>
								<option value="<?php echo $layanan_kategori['id_layanan_kategori']; ?>"><?php echo $layanan_kategori['nama_layanan_kategori']; ?></option>
								<?php } ?>
							</select>
						</div>
						<div class="form-group">
							<label>Satuan</label>
							<input class="form-control" name="satuan" />
						</div>
						<div class="form-group">
							<label>Harga</label>
							<input class="form-control" name="harga_layanan" />
						</div>
					</div>
				</div>
			</div>
			<div class="box-footer">
				<button class="btn btn-success" type="submit" name="layanan-add">Tambah Layanan</button>
				<a class="btn btn-warning" href="?module=layanan/layanan-list">Batal</a>
			</div>
		</div>
	</form>
	<?php } ?>
</section>