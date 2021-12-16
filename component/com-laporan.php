<?php

if(isset($_POST['laporan-transaksi'])) {

	$laporan_transaksi=$database->select('transaksi_kamar','*',[
		'tanggal[<>]'=>[$_POST['tanggal-start'],$_POST['tanggal-end']]
		]);

	$total_laporan_transaksi=$database->sum('transaksi_kamar','total_biaya_kamar',[
		'tanggal[<>]'=>[$_POST['tanggal-start'],$_POST['tanggal-end']]
		]);
}

if(isset($_POST['laporan-layanan'])) {

	$laporan_layanan=$database->select('transaksi_layanan',[
		'[><]layanan'=>'id_layanan',
		'[><]user'=>'id_user',
		'[><]transaksi_kamar'=>'id_transaksi_kamar',
		'[><]kamar'=>'id_kamar'
		],[
		'transaksi_layanan.id_transaksi_layanan',
		'transaksi_layanan.tanggal',
		'transaksi_layanan.waktu',
		'transaksi_layanan.jumlah',
		'transaksi_layanan.total',
		'layanan.id_layanan',
		'layanan.nama_layanan',
		'layanan.satuan',
		'layanan.harga_layanan',
		'kamar.id_kamar',
		'kamar.nomor_kamar',
		'user.nama'
		],[
		'transaksi_layanan.tanggal[<>]'=>[$_POST['tanggal-start'],$_POST['tanggal-end']]
		]);

	$total_laporan_layanan=$database->sum('transaksi_layanan','total',[
		'tanggal[<>]'=>[$_POST['tanggal-start'],$_POST['tanggal-end']]
		]);
}

?>