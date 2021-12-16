<section class="content-header">
	<h1>Perusahaan <span class="small">Administrasi informasi perusahaan</span></h1>
</section>

<section class="content">
	<?php if(isset($_POST['perusahaan-update'])) { ?>
	<div class="alert alert-success">
		<h4>Berhasil</h4>
		Anda berhasil mengubah data informasi perusahaan. <a href="?module=perusahaan/perusahaan"><b>Kembali</b></a>
	</div>
	<?php } else { ?>
	<div class="box">
		<form action="" method="post">
			<div class="box-body">
				<div class="row">
					<div class="col-sm-4">
						<div class="form-group">
							<label>Nama Perusahaan</label>
							<input class="form-control" name="nama_perusahaan" value="<?php echo $perusahaan['nama_perusahaan']; ?>" />
						</div>
						<div class="form-group">
							<label>Nama Hotel</label>
							<input class="form-control" name="nama_hotel" value="<?php echo $perusahaan['nama_hotel']; ?>" />
						</div>
						<div class="form-group">
							<label>Alamat</label>
							<textarea class="form-control" name="alamat_jalan"><?php echo $perusahaan['alamat_jalan']; ?></textarea>
							<br/>
							<div class="row">
								<div class="col-sm-6">
									<input class="form-control" name="alamat_kabupaten" value="<?php echo $perusahaan['alamat_kabupaten']; ?>" />
								</div>
								<div class="col-sm-6">
									<input class="form-control" name="alamat_provinsi" value="<?php echo $perusahaan['alamat_provinsi']; ?>" />
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="form-group">
							<label>Nomor Telepon</label>
							<input class="form-control" name="nomor_telp" value="<?php echo $perusahaan['nomor_telp']; ?>" />
						</div>
						<div class="form-group">
							<label>Nomor Fax</label>
							<input class="form-control" name="nomor_fax" value="<?php echo $perusahaan['nomor_fax']; ?>" />
						</div>
						<div class="form-group">
							<label>Alamat Email</label>
							<input class="form-control" name="email" value="<?php echo $perusahaan['email']; ?>" />
						</div>
						<div class="form-group">
							<label>Website</label>
							<input class="form-control" name="website" value="<?php echo $perusahaan['website']; ?>" />
						</div>
					</div>
				</div>
			</div>
			<div class="box-footer">
				<button class="btn btn-success" type="submit" name="perusahaan-update">Ubah Data Perusahaan</button>
			</div>
		</form>
	</div>
	<?php } ?>
</section>