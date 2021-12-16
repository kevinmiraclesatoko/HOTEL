<?php

include('component/com-kamar.php');

include('component/com-transaksi.php');

?>
<section class="content-header">
	<h1>Dashboard <span class="small">Selamat datang</span></h1>
</section>

<section class="content">
	<div class="row">
		<div class="col-sm-3">
			<div class="small-box bg-aqua">
				<div class="inner">
					<h3><?php echo $total_tersedia; ?></h3>
					<p>Kamar Tersedia</p>
				</div>
				<div class="icon">
					<i class="fa fa-bed"></i>
				</div>
				<a class="small-box-footer" href="#">Lihat Selengkapnya</a>
			</div>
		</div><div class="col-sm-3">
			<div class="small-box bg-green">
				<div class="inner">
					<h3><?php echo $total_tersedia; ?></h3>
					<p>Kamar Siap Pakai</p>
				</div>
				<div class="icon">
					<i class="fa fa-bed"></i>
				</div>
				<a class="small-box-footer" href="#">Lihat Selengkapnya</a>
			</div>
		</div>
		<div class="col-sm-3">
			<div class="small-box bg-red">
				<div class="inner">
					<h3><?php echo $total_terpakai; ?></h3>
					<p>Kamar Terpakai</p>
				</div>
				<div class="icon">
					<i class="fa fa-bed"></i>
				</div>
				<a class="small-box-footer" href="#">Lihat Selengkapnya</a>
			</div>
		</div>
		
		<div class="col-sm-3">
			<div class="small-box bg-yellow">
				<div class="inner">
					<h3><?php echo $total_kotor; ?></h3>
					<p>Kamar Kotor</p>
				</div>
				<div class="icon">
					<i class="fa fa-bed"></i>
				</div>
				<a class="small-box-footer" href="#">Lihat Selengkapnya</a>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<div class="box">
				<div class="box-header with-border">
					<h3 class="box-title">Tamu yang sedang menginap</h3>
				</div>
				<div class="box-body">
					<?php if(!empty($tamu_inhouse)) { ?>
					<table class="table table-sriped">
						<thead>
							<tr>
								<th>Nama Tamu</th>
								<th># Kamar</th>
								<th>Tanggal / Waktu Check-In</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach($tamu_inhouse as $tamu_inhouse) { ?>
							<tr>
								<td><?php echo $tamu_inhouse['prefix'].'. '.$tamu_inhouse['nama_depan'].'&nbsp;'.$tamu_inhouse['nama_belakang']; ?></td>
								<td><?php echo $tamu_inhouse['nomor_kamar']; ?></td>
								<td><?php echo $tamu_inhouse['tanggal_checkin'].' - '.$tamu_inhouse['waktu_checkin']; ?></td>
							</tr>
							<?php } ?>
						</tbody>
					</table>
					<?php } else { ?>
					<div class="alert alert-warning">
						<h4>Mohon maaf</h4>
						Untuk sementara tidak ada tamu yang sedang menginap di hotel.
					</div>
					<?php } ?>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">Berita / Pengumuman Internal <span class="small">sedang dalam pengembangan</span></h3>
				</div>
				<div class="box-body">
					<ul class="list-unstyled">
						<li>
							<h4>
								<b>Judul Pengumuman</b> <span class="badge bg-red">PENTING</span><br/>
								<span class="small">Oleh : <b>Nama Operator</b> - 2015-9-2 00:00</span>
							</h4>
							<hr/>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">Tamu yang akan check-out hari ini</h3>
				</div>
				<div class="box-body">
					
				</div>
			</div>
		</div>
	</div>
</section>