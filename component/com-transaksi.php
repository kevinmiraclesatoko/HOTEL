<?php

// Gest Inhouse

$tamu_inhouse=$database->select('transaksi_kamar',[
	'[><]tamu'=>'id_tamu',
	'[><]kamar'=>'id_kamar'
	],[
	'transaksi_kamar.id_transaksi_kamar',
	'transaksi_kamar.nomor_invoice',
	'transaksi_kamar.id_tamu',
	'transaksi_kamar.id_kamar',
	'transaksi_kamar.tanggal_checkin',
	'transaksi_kamar.waktu_checkin',
	'transaksi_kamar.tanggal_checkout',
	'transaksi_kamar.waktu_checkout',
	'transaksi_kamar.deposit',
	'tamu.id_tamu',
	'tamu.prefix',
	'tamu.nama_depan',
	'tamu.nama_belakang',
	'kamar.id_kamar',
	'kamar.nomor_kamar'
	],[
	'status'=>'CHECK IN'
	]);

if(!empty($_GET['transaksi'])) {

	$transaksi_kamar=$database->get('transaksi_kamar',[
		'[><]kamar'=>'id_kamar',
		'[><]kamar_tipe'=>'id_kamar_tipe',
		'[><]tamu'=>'id_tamu'
		],[
		'kamar.id_kamar',
		'kamar.nomor_kamar',
		'kamar.max_dewasa',
		'kamar.max_anak',
		'kamar_tipe.id_kamar_tipe',
		'kamar_tipe.nama_kamar_tipe',
		'kamar_tipe.harga_malam',
		'tamu.id_tamu',
		'tamu.prefix',
		'tamu.nama_depan',
		'tamu.nama_belakang',
		'tamu.alamat_jalan',
		'tamu.alamat_kabupaten',
		'tamu.alamat_provinsi',
		'tamu.nomor_telp',
		'transaksi_kamar.id_transaksi_kamar',
		'transaksi_kamar.nomor_invoice',
		'transaksi_kamar.jumlah_anak',
		'transaksi_kamar.jumlah_dewasa',
		'transaksi_kamar.tanggal_checkin',
		'transaksi_kamar.waktu_checkin',
		'transaksi_kamar.tanggal_checkout',
		'transaksi_kamar.waktu_checkout',
		'transaksi_kamar.total_biaya_kamar',
		'transaksi_kamar.deposit',
		],[
		'id_transaksi_kamar'=>$_GET['transaksi']
		]);

	$transaksi_layanan=$database->select('transaksi_layanan',[
		'[><]layanan'=>'id_layanan'
		],[
		'transaksi_layanan.jumlah',
		'transaksi_layanan.total',
		'layanan.satuan',
		'layanan.id_layanan',
		'layanan.nama_layanan',
		'layanan.harga_layanan'
		],[
		'id_transaksi_kamar'=>$_GET['transaksi']
		]);

	$subtotal_layanan=$database->sum('transaksi_layanan','total',['id_transaksi_kamar'=>$_GET['transaksi']]);
}

// Update Tamu In-House

if(isset($_POST['checkin-update'])) {

	$tanggal_checkin=date_create($_POST['tanggal_checkin']);

	$tanggal_checkout=date_create($_POST['tanggal_checkout']);

	$durasi=date_diff($tanggal_checkin,$tanggal_checkout)->format('%a');

	$total_biaya_kamar=$durasi * $kamar_view['harga_malam'];

	$database->update('transaksi_kamar',[
		'nomor_invoice'=>$_POST['nomor_invoice'],
		'id_kamar'=>$_POST['id_kamar'],
		'id_tamu'=>$_POST['id_tamu'],
		'tanggal_checkin'=>$_POST['tanggal_checkin'],
		'waktu_checkin'=>$_POST['waktu_checkin'],
		'tanggal_checkout'=>$_POST['tanggal_checkout'],
		'waktu_checkout'=>$_POST['waktu_checkout'],
		'jumlah_dewasa'=>$_POST['jumlah_dewasa'],
		'jumlah_anak'=>$_POST['jumlah_anak'],
		'deposit'=>$_POST['deposit'],
		'total_biaya_kamar'=>$total_biaya_kamar
		],[
		'id_transaksi_kamar'=>$_POST['id_transaksi_kamar']
		]);
}

// Check In Tamu

if(isset($_POST['checkin'])) {

	$tanggal_checkin=date_create($_POST['tanggal_checkin']);

	$tanggal_checkout=date_create($_POST['tanggal_checkout']);

	$durasi=date_diff($tanggal_checkin,$tanggal_checkout)->format('%a');

	$total_biaya_kamar=$durasi * $kamar_view['harga_malam'];

	$database->insert('transaksi_kamar',[
		'id_user'=>$_SESSION['id_user'],
		'nomor_invoice'=>$_POST['nomor_invoice'],
		'tanggal'=>date('Y-m-d'),
		'id_tamu'=>$_POST['id_tamu'],
		'id_kamar'=>$_POST['id_kamar'],
		'jumlah_dewasa'=>$_POST['jumlah_dewasa'],
		'jumlah_anak'=>$_POST['jumlah_anak'],
		'tanggal_checkin'=>$_POST['tanggal_checkin'],
		'waktu_checkin'=>$_POST['waktu_checkin'],
		'tanggal_checkout'=>$_POST['tanggal_checkout'],
		'waktu_checkout'=>$_POST['waktu_checkout'],
		'deposit'=>$_POST['deposit'],
		'total_biaya_kamar'=>$total_biaya_kamar,
		'status'=>'CHECK IN'
		]);

	$database->update('kamar',[
		'status_kamar'=>'TERPAKAI'
		],[
		'id_kamar'=>$_POST['id_kamar']
		]);
}

// Ubah Data Guest In House

if(isset($_POST['checkin-update'])) {

	$tanggal_checkin=date_create($_POST['tanggal_checkin']);

	$tanggal_checkout=date_create($_POST['tanggal_checkout']);

	$durasi=date_diff($tanggal_checkin,$tanggal_checkout)->format('%a');

	$total_biaya_kamar=$durasi * $kamar_view['harga_malam'];

	$database->update('transaksi_kamar',[
		'nomor_invoice'=>$_POST['nomor_invoice'],
		'tanggal'=>date('Y-m-d'),
		'id_tamu'=>$_POST['id_tamu'],
		'id_kamar'=>$_POST['id_kamar'],
		'jumlah_dewasa'=>$_POST['jumlah_dewasa'],
		'jumlah_anak'=>$_POST['jumlah_anak'],
		'tanggal_checkin'=>$_POST['tanggal_checkin'],
		'waktu_checkin'=>$_POST['waktu_checkin'],
		'tanggal_checkout'=>$_POST['tanggal_checkout'],
		'waktu_checkout'=>$_POST['waktu_checkout'],
		'deposit'=>$_POST['deposit'],
		'total_biaya_kamar'=>$total_biaya_kamar,
		],[
		'id_transaksi_kamar'=>$_POST['id_transaksi_kamar']
		]);
}

//Check Out Tamu

if(isset($_POST['checkout'])) {

	$database->update('transaksi_kamar',[
		'status'=>'CHECK OUT'
		],[
		'id_transaksi_kamar'=>$_POST['id_transaksi_kamar']
		]);

	$database->update('kamar',[
		'status_kamar'=>'KOTOR'
		],[
		'id_kamar'=>$_POST['id_kamar']
		]);
}

// Pesan Layanan

if(isset($_POST['pesan-layanan'])) {

	$total_pesanan=$_POST['harga_layanan'] * $_POST['jumlah'];

	$database->insert('transaksi_layanan',[
		'id_user'=>$_SESSION['id_user'],
		'id_transaksi_kamar'=>$_POST['id_transaksi_kamar'],
		'tanggal'=>date('Y-m-d'),
		'waktu'=>date('H:i'),
		'id_layanan'=>$_POST['id_layanan'],
		'jumlah'=>$_POST['jumlah'],
		'total'=>$total_pesanan
		]);
}

// Booking



?>