<?php
include('component/com-kamar.php');
?>

<section class="content-header">
	<h1>Tambah Kamar <span class="small">Tambah data kamar baru</span></h1>
</section>

<section class="content">
	<?php if(isset($_POST['kamar-add'])) { ?>
	<div class="alert alert-success">
		<h4>Berhasil</h4>
		Anda berhasil melakukan penambahan kamar. 
		<a href="?module=kamar/kamar-add">Tambah kamar lagi</a> / 
		<a href="?module=kamar/kamar-list">Kembali</a>
	</div>
	<?php } else { ?>
	<form action="" method="post">
		<div class="box">
			<div class="box-body">
				<div class="row">
					<div class="col-sm-4">
						<div class="form-group">
							<label>Nomor Kamar</label>
							<input class="form-control" name="nomor_kamar" required />
						</div>
						<div class="form-group">
							<label>Tipe Kamar</label>
							<select class="form-control" name="id_kamar_tipe">
								<option>-- Pilih --</option>
								<?php foreach ($kamar_tipe as $kamar_tipe) { ?>
								<option value="<?php echo $kamar_tipe['id_kamar_tipe']; ?>"><?php echo $kamar_tipe['nama_kamar_tipe']; ?></option>
								<?php } ?>
							</select>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="form-group">
							<label>Maximal Orang Dewasa</label>
							<select class="form-control" name="max_dewasa">
								<option>--Pilih--</option>
								<option value="1">1 Orang </option>
								<option value="2">2 Orang </option>
								<option value="3">3 Orang </option>
								<option value="4">4 Orang </option>
								<option value="5">5 Orang </option>
							</select>
						</div>
						<div class="form-group">
							<label>Maximal Anak-anak</label>
							<select class="form-control" name="max_anak">
								<option>--Pilih--</option>
								<option value="1">1 Orang </option>
								<option value="2">2 Orang </option>
								<option value="3">3 Orang </option>
								<option value="4">4 Orang </option>
								<option value="5">5 Orang </option>
							</select>
						</div>
					</div>
				</div>
			</div>
			<div class="box-footer">
				<button class="btn btn-success" type="submit" name="kamar-add">Tambah Kamar</button>
				<a class="btn btn-warning" href="?module=kamar/kamar-list">Batal</a>
			</div>
		</div>
	</form>
	<?php } ?>
</content>