<?php

include('component/com-layanan.php');

?>

<section class="content-header">
	<h1>Hapus Layanan</h1>
</section>

<section class="content">
	<?php if(isset($_POST['layanan-del'])) { ?>
	<div class="alert alert-success">
		<h4>Berhasil</h4>
		Anda telah sukses melakukan penghapusan data layanan. <b><a href="?module=layanan/layanan-list">Kembali</a></b>
	</div>
	<?php } else {?>
	<div class="alert alert-warning">
		<h4>Peringatan</h4>
		Apakah anda yakin untuk menghapus layanan <?php echo '<b>'.$layanan_view['nama_layanan'].'</b>'; ?> ? (data yang sudah dihapus tidak dapat dikembalikan lagi)
		<br/><br/>
		<form action="" method="post">
			<input type="hidden" name="id_layanan" value="<?php echo $layanan_view['id_layanan']; ?>" />
			<button class="btn btn-success" type="submit" name="layanan-del">Ya! Hapus</button>
			<a class="btn btn-info" href="?module=layanan/layanan-update&layanan=<?php echo $layanan_view['id_layanan']; ?>">Batal</a>
		</form>
	</div>
	<?php } ?>
</section>