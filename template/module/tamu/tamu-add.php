<?php

include('component/com-tamu.php');

?>

<section class="content-header">
	<h1>Tambah Tamu Baru</h1>
</section>

<section class="content">
	<?php if(isset($_POST['tamu-add'])) { ?>
	<div class="alert alert-success">
		<h4>Berhasil</h4>
		Anda telah berhasil melakukan penambahan data tamu baru. 
		<a href="?module=tamu/tamu-add"><b>Tambah Lagi</b></a> / 
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
									<select class="form-control" name="prefix">
										<option value="Mr">Mr</option>
										<option value="Ms">Ms</option>
										<option value="Mrs">Mrs</option>
									</select>
								</div>
								<div class="col-sm-4">
									<input class="form-control" name="nama_depan" placeholder="Nama Depan" required />
								</div>
								<div class="col-sm-4">
									<input class="form-control" name="nama_belakang" placeholder="Nama Belakang" required />
								</div>
							</div>
						</div>
						<div class="form-group">
							<label>Identitas</label>
							<div class="row">
								<div class="col-sm-3">
									<select class="form-control" name="tipe_identitas" />
										<option value="KTP">KTP</option>
										<option value="KTP">SIM</option>
										<option value="KTP">PASSPORT</option>
									</select>
								</div>
								<div class="col-sm-6">
									<input class="form-control" name="nomor_identitas" placeholder="Nomor Identitas" required />
								</div>
							</div>
						</div>
						<div class="form-group">
							<label>Warga Negara</label>
							<div class="row">
								<div class="col-sm-4">
									<input class="form-control" name="warga_negara" />
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-5">
						<div class="form-group">
							<label>Alamat</label>
							<textarea class="form-control" name="alamat_jalan"></textarea>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-sm-6">
									<input class="form-control" name="alamat_kabupaten" placeholder="Kabupaten / Kota" />
								</div>
								<div class="col-sm-6">
									<input class="form-control" name="alamat_provinsi" placeholder="Provinsi" />
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-sm-6">
									<label>Nomor Telp / Handphone</label>
									<input class="form-control" name="nomor_telp" required />
								</div>
								<div class="col-sm-6">
									<label>Email</label>
									<input class="form-control" name="email" />
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="box-footer">
				<button class="btn btn-success" type="submit" name="tamu-add">Tambah Tamu</button>
				<a class="btn btn-warning" href="?module=tamu/tamu-list">Batal</a>
			</div>
		</form>
	</div>
	<?php } ?>
</section>