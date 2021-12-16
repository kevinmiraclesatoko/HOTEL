<?php

include('component/com-layanan.php');

?>

<section class="content-header">
	<h1>Update Layanan</h1>
</section>

<section class="content">
	<?php if(isset($_POST['layanan-update'])) { ?>
	<div class="alert alert-success">
		<h4>Berhasil</h4>
		Anda telah melakukan perubahan data layanan. 
		<br/></br/>
		<a class="btn btn-info" href="<?php echo $_SERVER['REQUEST_URI']; ?>">Ubah Lagi</a>
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
							<input class="form-control" name="nama_layanan" value="<?php echo $layanan_view['nama_layanan']; ?>" />
						</div>
						<div class="form-group">
							<label>Kategori Layanan / Produk</label>
							<input class="form-control" value="<?php echo $layanan_view['nama_layanan_kategori']; ?>" disabled />
							<select class="form-control" name="id_layanan_kategori">
								<option value="<?php echo $layanan_view['id_layanan_kategori']; ?>">-- Pilih --</option>
								<?php foreach($layanan_kategori as $layanan_kategori) { ?>
								<option value="<?php echo $layanan_kategori['id_layanan_kategori']; ?>"><?php echo $layanan_kategori['nama_layanan_kategori']; ?></option>
								<?php } ?>
							</select>
						</div>
						<div class="form-group">
							<label>Satuan</label>
							<input class="form-control" name="satuan" value="<?php echo $layanan_view['satuan']; ?>" />
						</div>
						<div class="form-group">
							<label>Harga</label>						
							<input class="form-control" name="harga_layanan" value="<?php echo $layanan_view['harga_layanan']; ?>" />
						</div>
					</div>
				</div>
			</div>
			<div class="box-footer">
				<input type="hidden" name="id_layanan" value="<?php echo $layanan_view['id_layanan']; ?>" />
				<button class="btn btn-success" type="submit" name="layanan-update">Update Layanan</button>
				<a class="btn btn-danger" href="?module=layanan/layanan-delete&layanan=<?php echo $layanan_view['id_layanan']; ?>">Hapus</a>
				<a class="btn btn-warning" href="?module=layanan/layanan-list">Batal</a>
			</div>
		</div>
	</form>
	<?php } ?>
</section>