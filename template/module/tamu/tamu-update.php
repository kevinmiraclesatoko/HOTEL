<?php

include('component/com-tamu.php');

?>

<section class="content-header">
	<h1>Tambah Tamu Baru</h1>
</section>

<section class="content">
	<?php if(isset($_POST['tamu-update'])) { ?>
	<div class="alert alert-success">
		<h4>Berhasil</h4>
		Anda telah berhasil melakukan perubahan data tamu. 
		<a href="?module=tamu/tamu-list"><b>Kembali</b></a>
	</div>
	<?php } else { ?>
	<div class="box">
		<form action="" method="post">
			<div class="box-body">
				<div class="row">
					<div class="col-sm-6">
						<div class="form-group">
							<label>Nama Tamu</label>
							<div class="row">
								<div class="col-sm-3">
									<input class="form-control" name="prefix" value="<?php echo $tamu_view['prefix']; ?>" readonly />
								</div>
								<div class="col-sm-4">
									<input class="form-control" name="nama_depan" value="<?php echo $tamu_view['nama_depan']; ?>" />
								</div>
								<div class="col-sm-4">
									<input class="form-control" name="nama_belakang" value="<?php echo $tamu_view['nama_belakang']; ?>" />
								</div>
							</div>
						</div>
						<div class="form-group">
							<label>Identitas</label>
							<div class="row">
								<div class="col-sm-3">
									<input class="form-control" name="tipe_identitas" value="<?php echo $tamu_view['tipe_identitas']; ?>" readonly />
								</div>
								<div class="col-sm-6">
									<input class="form-control" name="nomor_identitas" value="<?php echo $tamu_view['nomor_identitas']; ?>" />
								</div>
							</div>
						</div>
						<div class="form-group">
							<label>Warga Negara</label>
							<div class="row">
								<div class="col-sm-4">
									<input class="form-control" name="warga_negara" value="<?php echo $tamu_view['warga_negara']; ?>" />
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-5">
						<div class="form-group">
							<label>Alamat</label>
							<textarea class="form-control" name="alamat_jalan"><?php echo $tamu_view['alamat_jalan']; ?></textarea>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-sm-6">
									<input class="form-control" name="alamat_kabupaten" value="<?php echo $tamu_view['alamat_kabupaten']; ?>" />
								</div>
								<div class="col-sm-6">
									<input class="form-control" name="alamat_provinsi" value="<?php echo $tamu_view['alamat_provinsi']; ?>" />
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-sm-6">
									<label>Nomor Telp / Handphone</label>
									<input class="form-control" name="nomor_telp" value="<?php echo $tamu_view['nomor_telp']; ?>" />
								</div>
								<div class="col-sm-6">
									<label>Email</label>
									<input class="form-control" name="email" value="<?php echo $tamu_view['email']; ?>" />
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="box-footer">
				<input type="hidden" name="id_tamu" value="<?php echo $tamu_view['id_tamu']; ?>" />
				<button class="btn btn-success" type="submit" name="tamu-update">Update Tamu</button>
				<a class="btn btn-danger" href="?module=tamu/tamu-delete&tamu=<?php echo $tamu_view['id_tamu']; ?>">Hapus</a>
				<a class="btn btn-warning" href="?module=tamu/tamu-list">Batal</a>
			</div>
		</form>
	</div>
	<?php } ?>
</section>