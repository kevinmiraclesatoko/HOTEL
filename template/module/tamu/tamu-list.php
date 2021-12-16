<?php

include('component/com-tamu.php');

?>

<section class="content-header">
	<h1>Buku Tamu <span class="small">Administrasi tamu hotel</span></h1>
</section>

<section class="content">
	<div class="box">
		<div class="box-header">
			<a class="btn btn-info" href="?module=tamu/tamu-add">Tambah Tamu Baru</a>
		</div>
		<div class="box-body">
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>Nama Tamu</th>
						<th>Warga Negara</th>
						<th>Nomor Telp / Handphone</th>
						<th>Email</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($tamu as $tamu) { ?>
					<tr>
						<td><?php echo $tamu['prefix'].'. '.$tamu['nama_depan'].'&nbsp;'.$tamu['nama_belakang']; ?></td>
						<td><?php echo $tamu['warga_negara']; ?></td>
						<td><?php echo $tamu['nomor_telp']; ?></td>
						<td><?php echo $tamu['email']; ?></td>
						<td>
							<a class="btn btn-xs btn-info" href="?module=tamu/tamu-update&tamu=<?php echo $tamu['id_tamu']; ?>">Update</a>
						</td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</section>