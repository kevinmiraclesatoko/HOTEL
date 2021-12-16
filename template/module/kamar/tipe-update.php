<?php

include('component/com-kamar.php');

?>

<section class="content-header">
	<h1>Tambah Tipe Kamar <span class="small">Administrasi penambahan tipe kamar baru</span></h1>
</section>

<section class="content">
	<?php if(isset($_POST['kamartipe-update'])){ ?>
	<div class="alert alert-success">
		<h4>Berhasil</h4>
		Anda telah berhasil mengubah data Tipe Kamar.
		<a href="?module=kamar/tipe-list"><b>Kembali</b></a>
	</div>
	<?php } else { ?>
	<form action="" method="post">
		<div class="box">
			<div class="box-body">
				<div class="row">
					<div class="col-sm-4">
						<div class="form-group">
							<label>Nama Tipe Kamar</label>
							<input class="form-control" name="nama_kamar_tipe" value="<?php echo $kamar_tipe_view['nama_kamar_tipe']; ?>" />
						</div>
						<div class="form-group">
							<label>Harga / Malam</label>
							<input class="form-control" name="harga_malam" value="<?php echo $kamar_tipe_view['harga_malam']; ?>" />
						</div>
						<div class="form-group">
							<label>Harga / Orang</label>
							<input class="form-control" name="harga_orang" value="<?php echo $kamar_tipe_view['harga_orang']; ?>" />
						</div>
					</div>
					<div class="col-sm-4">
						<label>Keterangan</label>
						<textarea class="form-control" name="keterangan"><?php echo $kamar_tipe_view['keterangan']; ?></textarea>
					</div>
				</div>
			</div>
			<div class="box-footer">
				<input type="hidden" name="id_kamar_tipe" value="<?php echo $kamar_tipe_view['id_kamar_tipe']; ?>" />
				<button class="btn btn-success" type="submit" name="kamartipe-update">Update</button>
				<a class="btn btn-danger" href="?module=kamar/tipe-delete&kamar-tipe=<?php echo $kamar_tipe_view['id_kamar_tipe']; ?>">Hapus</a>
				<a class="btn btn-warning" href="?module=kamar/tipe-list">Batal</a>
			</div>	
		</div>
	</form>
	<?php } ?>
</section>