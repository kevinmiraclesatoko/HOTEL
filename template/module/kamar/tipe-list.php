<?php

include('component/com-kamar.php');

?>

<section class="content-header">
	<h1>Tipe Kamar <span class="small">administrasi tipe kamar</span></h1>
</section>

<section class="content">
	<div class="box">
		<div class="box-header">
			<a class="btn btn-info" href="?module=kamar/tipe-add">Tambah Tipe Kamar</a>
		</div>
		<div class="box-body">
			<table class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>Tipe Kamar</th>
						<th>Harga / Malam</th>
						<th>Harga / Orang</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($kamar_tipe as $kamar_tipe) { ?>
					<tr>
						<td><?php echo $kamar_tipe['nama_kamar_tipe']; ?></td>
						<td>Rp <?php echo number_format($kamar_tipe['harga_malam']); ?></td>
						<td>Rp <?php echo number_format($kamar_tipe['harga_orang']); ?></td>
						<td><a class="btn btn-info btn-xs" href="?module=kamar/tipe-update&kamar-tipe=<?php echo $kamar_tipe['id_kamar_tipe']; ?>">Update</a></td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</section>