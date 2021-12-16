<?php

include('component/com-layanan.php');

?>

<section class="content-header">
	<h1>Kategori Layanan <span class="small">Administrasi kategori layanan</span></h1>
</section>

<section class="content">
	<?php if(isset($_POST['layanankat-add'])) { ?>
	<div class="alert alert-success">
		<h4>Berhasil</h4>
		Anda telah berhasil menambah data kategori layanan. <a href="?module=layanan/kategori-list"><b>Kembali</b></a>
	</div>
	<?php } else { ?>
	<div class="row">
		<div class="col-sm-4">
			<div class="box">
				<form action="" method="post">
					<div class="box-header">
						<h3 class="box-title">Tambah Kategori</h3>
					</div>
					<div class="box-body">
						<div class="form-group">
							<label>Nama Kategori Layanan</label>
							<input class="form-control" name="nama_layanan_kategori" required />
						</div>
						<div class="form-group">
							<label>Keterangan</label>
							<textarea class="form-control" name="keterangan" /></textarea>
						</div>
					</div>
					<div class="box-footer">
						<button class="btn btn-success" type="submit" name="layanankat-add">Tambah Kategori</button>
						<button class="btn btn-warning" type="reset">Batal</button>
					</div>
				</form>
			</div>
		</div>
		
		<div class="col-sm-8">
			<div class="box">
				<?php 

				if(!empty($_GET['layanan-kategori'])) { 

					if(isset($_POST['layanankat-update'])) {

				?>

				<div class="alert alert-success">
					<h4>Berhasil</h4>
					Anda telah berhasil melakukan perubahan pada data kategori layanan. <a href="?module=layanan/kategori-list"><b>Kembali</b></a>
				</div>

				<?php } else { ?>
				<form action="" method="post">
					<div class="box-header">
						<h3 class="box-title">Ubah Kategori</h3>
					</div>
					<div class="box-body">
						<div class="form-group">
							<label>Nama Kategori Layanan</label>
							<input class="form-control" name="nama_layanan_kategori" value="<?php echo $layanan_kategori_view['nama_layanan_kategori']; ?>" />
						</div>
						<div class="form-group">
							<label>Keterangan</label>
							<textarea class="form-control" name="keterangan" /><?php echo $layanan_kategori_view['keterangan']; ?></textarea>
						</div>
					</div>
					<div class="box-footer">
						<input type="hidden" name="id_layanan_kategori" value="<?php echo $layanan_kategori_view['id_layanan_kategori']; ?>" />
						<button class="btn btn-success" type="submit" name="layanankat-update">Update Kategori</button>
						<a class="btn btn-danger" href="?module=layanan/kategori-delete&layanan-kategori=<?php echo $layanan_kategori_view['id_layanan_kategori']; ?>">Hapus</a>
						<a class="btn btn-warning" href="?module=layanan/kategori-list">Batal</a>
					</div>
				</form>
				<?php } } else { ?>
				<div class="box-body">
					<table class="table table-striped table-hover">
						<thead>
							<tr>
								<th>Nama Kategori Layanan</th>
								<th>Keterangan</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach($layanan_kategori as $layanan_kategori) { ?>
							<tr>
								<td><?php echo $layanan_kategori['nama_layanan_kategori']; ?></td>
								<td><?php echo $layanan_kategori['keterangan']; ?></td>
								<td>
									<a class="btn btn-xs btn-info" href="?module=layanan/kategori-list&layanan-kategori=<?php echo $layanan_kategori['id_layanan_kategori']; ?>">Update</a>
								</td>
							</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
				<?php } ?>
			</div>
		</div>
	</div>
	<?php } ?>
</section>