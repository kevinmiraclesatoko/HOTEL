<?php

include('component/com-tamu.php');

?>

<section class="content-header">
	<h1>Hapus Tamu</h1>
</section>

<section class="content">
	<?php if(isset($_POST['tamu-del'])) { ?>
	<div class="alert alert-success">
		<h4>Berhasil</h4>
		Anda telah sukses melakukan penghapusan data Tamu. <b><a href="?module=tamu/tamu-list">Kembali</a></b>
	</div>
	<?php } else {?>
	<div class="alert alert-warning">
		<h4>Peringatan</h4>
		Apakah anda yakin untuk menghapus data tamu <?php echo '<b>'.$tamu_view['nama_depan'].'&nbsp;'.$tamu_view['nama_belakang'].'</b>'; ?> ? (data yang sudah dihapus tidak dapat dikembalikan lagi)
		<br/><br/>
		<form action="" method="post">
			<input type="hidden" name="id_tamu" value="<?php echo $tamu_view['id_tamu']; ?>" />
			<button class="btn btn-success" type="submit" name="tamu-del">Ya! Hapus</button>
			<a class="btn btn-info" href="?module=tamu/tamu-update&tamu=<?php echo $tamu_view['id_tamu']; ?>">Batal</a>
		</form>
	</div>
	<?php } ?>
</section>