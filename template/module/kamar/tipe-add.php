<?php

include('component/com-kamar.php');

?>

<section class="content-header">
	<h1>Tambah Tipe Kamar <span class="small">Administrasi penambahan tipe kamar baru</span></h1>
</section>

<section class="content">
	<?php if(isset($_POST['kamartipe-add'])){ ?>
	<div class="alert alert-success">
		<h4>Berhasil</h4>
		Anda telah berhasil menambah data Tipe Kamar.
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
							<input class="form-control" name="nama_kamar_tipe" required />
						</div>
						<div class="form-group">
							<label>Harga / Malam</label>
							<input class="form-control" name="harga_malam" required />
						</div>
						<div class="form-group">
							<label>Harga / Orang</label>
							<input class="form-control" name="harga_orang" required />
						</div>
					</div>
					<div class="col-sm-4">
						<label>Keterangan</label>
						<textarea class="form-control" name="keterangan"></textarea>
					</div>
				</div>
			</div>
			<div class="box-footer">
				<button class="btn btn-success" type="submit" name="kamartipe-add">Tambah</button>
				<a class="btn btn-warning" href="?module=kamar/tipe-list">Batal</a>
			</div>	
		</div>
	</form>
	<?php } ?>
</section>