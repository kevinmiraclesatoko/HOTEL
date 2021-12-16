<?php

include('component/com-kamar.php');

?>

<section class="content-header">
	<h1>Hapus Kamar</h1>
</section>

<section class="content">
	<?php if(isset($_POST['kamar-del'])) { ?>
	<div class="alert alert-success">
		<h4>Berhasil</h4>
		Anda telah sukses melakukan penghapusan data kamar. <b><a href="?module=kamar/kamar-list">Kembali</a></b>
	</div>
	<?php } else {?>
	<div class="alert alert-warning">
		<h4>Peringatan</h4>
		Apakah anda yakin untuk menghapus kamar nomor <?php echo $kamar_view['nomor_kamar']; ?> ? (data yang sudah dihapus tidak dapat dikembalikan lagi)
		<br/><br/>
		<form action="" method="post">
			<input type="hidden" name="id_kamar" value="<?php echo $kamar_view['id_kamar']; ?>" />
			<button class="btn btn-success" type="submit" name="kamar-del">Ya! Hapus</button>
			<a class="btn btn-info" href="?module=kamar/kamar-update&kamar=<?php echo $kamar_view['id_kamar']; ?>">Batal</a>
		</form>
	</div>
	<?php } ?>
</section>