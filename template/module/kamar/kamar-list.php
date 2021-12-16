<?php

include('component/com-kamar.php');

?>
<section class="content-header">
	<h1>Kamar <span class="small">Informasi kamar</span></h1>
</section>

<section class="content">
	<div class="box">
		<div class="box-header">
			<a class="btn btn-info" href="?module=kamar/kamar-add">Tambah Kamar</a>
		</div>
		<div class="box-body">
			<table class="table table-striped">
				<thead>
					<tr>
						<th># Kamar</th>
						<th>Tipe Kamar</th>
						<th>Harga / Malam</th>
						<th>Max. Dewasa</th>
						<th>Max. Anak-anak</th>
						<th>Status</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($kamar as $kamar) { ?>
					<tr>
						<td><?php echo $kamar['nomor_kamar']; ?></td>
						<td><?php echo $kamar['nama_kamar_tipe']; ?></td>
						<td>Rp <?php echo number_format($kamar['harga_malam']); ?></td>
						<td><?php echo $kamar['max_dewasa']; ?> Orang</td>
						<td><?php echo $kamar['max_anak']; ?> Orang</td>
						<td>
							<?php

							if($kamar['status_kamar']=='TERSEDIA') {

								$status_kamar='green';
							}

							if($kamar['status_kamar']=='TERPAKAI') {

								$status_kamar='red';
							}

							if($kamar['status_kamar']=='KOTOR') {

								$status_kamar='yellow';
							}

							?>
							<span class="badge bg-<?php echo $status_kamar; ?>"><?php echo $kamar['status_kamar']; ?></span>
						</td>
						<td>
							<a href="?module=kamar/kamar-update&kamar=<?php echo $kamar['id_kamar']; ?>" class="btn btn-xs btn-info">Update</a>
						</td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
			
		</div>
	</div>
</section>