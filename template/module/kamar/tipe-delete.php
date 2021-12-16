<?php

include('component/com-kamar.php');

?>

<section class="content-header">
	<h1>Hapus Kamar</h1>
</section>

<section class="content">
	<?php if(isset($_POST['kamartipe-del'])) { ?>
	<div class="alert alert-success">
		<h4>Berhasil</h4>
		Anda telah sukses melakukan penghapusan data kamar. <b><a href="?module=kamar/tipe-list">Kembali</a></b>
	</div>
	<?php } else {?>
	<div class="alert alert-warning">
		<h4>Peringatan</h4>
		Apakah anda yakin untuk menghapus tipe kamar <?php echo '<b>'.$kamar_tipe_view['nama_kamar_tipe'].'</b>'; ?> ? (data yang sudah dihapus tidak dapat dikembalikan lagi)
		<br/><br/>
		<form action="" method="post">
			<input type="hidden" name="id_kamar_tipe" value="<?php echo $kamar_tipe_view['id_kamar_tipe']; ?>" />
			<button class="btn btn-success" type="submit" name="kamartipe-del">Ya! Hapus</button>
			<a class="btn btn-info" href="?module=kamar/tipe-update&kamar-tipe=<?php echo $kamar_tipe_view['id_kamar_tipe']; ?>">Batal</a>
		</form>
	</div>
	<?php } ?>
</section>