<?php

include('component/com-layanan.php');

?>

<section class="content-header">
	<h1>Hapus Layanan</h1>
</section>

<section class="content">
	<?php if(isset($_POST['layanankat-del'])) { ?>
	<div class="alert alert-success">
		<h4>Berhasil</h4>
		Anda telah sukses melakukan penghapusan data kategori layanan. <b><a href="?module=layanan/kategori-list">Kembali</a></b>
	</div>
	<?php } else {?>
	<div class="alert alert-warning">
		<h4>Peringatan</h4>
		Apakah anda yakin untuk menghapus kategori layanan <?php echo '<b>'.$layanan_kategori_view['nama_layanan_kategori'].'</b>'; ?> ? (data yang sudah dihapus tidak dapat dikembalikan lagi)
		<br/><br/>
		<form action="" method="post">
			<input type="hidden" name="id_layanan_kategori" value="<?php echo $layanan_kategori_view['id_layanan_kategori']; ?>" />
			<button class="btn btn-success" type="submit" name="layanankat-del">Ya! Hapus</button>
			<a class="btn btn-info" href="?module=layanan/kategori-list">Batal</a>
		</form>
	</div>
	<?php } ?>
</section>