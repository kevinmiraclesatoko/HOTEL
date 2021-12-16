<?php

// List & View Kamar
$kamar=$database->select('kamar',[
	'[><]kamar_tipe'=>'id_kamar_tipe'
	],[
	'kamar.id_kamar',
	'kamar.nomor_kamar',
	'kamar.max_dewasa',
	'kamar.max_anak',
	'kamar.status_kamar',
	'kamar_tipe.id_kamar_tipe',
	'kamar_tipe.harga_malam',
	'kamar_tipe.harga_orang',
	'kamar_tipe.nama_kamar_tipe'
	],[
	'ORDER'=>'nomor_kamar'
	]);



$total_kamar=$database->count('kamar');

$kamar_tersedia=$database->select('kamar',[
	'[><]kamar_tipe'=>'id_kamar_tipe'
	],[
	'kamar.id_kamar',
	'kamar.nomor_kamar',
	'kamar.max_dewasa',
	'kamar.max_anak',
	'kamar.status_kamar',
	'kamar_tipe.id_kamar_tipe',
	'kamar_tipe.harga_malam',
	'kamar_tipe.harga_orang',
	'kamar_tipe.nama_kamar_tipe'
	],[
	'ORDER'=>'nomor_kamar',
	'status_kamar'=>'TERSEDIA'
	]);

$total_tersedia=$database->count('kamar',['status_kamar'=>'TERSEDIA']);

$kamar_terpakai=$database->select('kamar',[
	'[><]kamar_tipe'=>'id_kamar_tipe'
	],[
	'kamar.id_kamar',
	'kamar.nomor_kamar',
	'kamar.max_dewasa',
	'kamar.max_anak',
	'kamar.status_kamar',
	'kamar_tipe.id_kamar_tipe',
	'kamar_tipe.harga_malam',
	'kamar_tipe.harga_orang',
	'kamar_tipe.nama_kamar_tipe'
	],[
	'ORDER'=>'nomor_kamar',
	'status_kamar'=>'TERPAKAI'
	]);

$total_terpakai=$database->count('kamar',['status_kamar'=>'TERPAKAI']);

$kamar_kotor=$database->select('kamar',[
	'[><]kamar_tipe'=>'id_kamar_tipe'
	],[
	'kamar.id_kamar',
	'kamar.nomor_kamar',
	'kamar.max_dewasa',
	'kamar.max_anak',
	'kamar.status_kamar',
	'kamar_tipe.id_kamar_tipe',
	'kamar_tipe.harga_malam',
	'kamar_tipe.harga_orang',
	'kamar_tipe.nama_kamar_tipe'
	],[
	'ORDER'=>'nomor_kamar',
	'status_kamar'=>'KOTOR'
	]);

$total_kotor=$database->count('kamar',['status_kamar'=>'KOTOR']);

if(!empty($_GET['kamar'])){

	$kamar_view=$database->get('kamar',[
		'[><]kamar_tipe'=>'id_kamar_tipe'
		],[
		'kamar.id_kamar',
		'kamar.nomor_kamar',
		'kamar.max_dewasa',
		'kamar.max_anak',
		'kamar.status_kamar',
		'kamar_tipe.id_kamar_tipe',
		'kamar_tipe.harga_malam',
		'kamar_tipe.harga_orang',
		'kamar_tipe.nama_kamar_tipe'
		],[
		'id_kamar'=>$_GET['kamar'],
		]);
}

//List & View Tipe Kamar

$kamar_tipe=$database->select('kamar_tipe','*');

if(!empty($_GET['kamar-tipe'])){

	$kamar_tipe_view=$database->get('kamar_tipe','*',['id_kamar_tipe'=>$_GET['kamar-tipe']]);
}

// Tambah Kamar & Tipe Kamar
if(isset($_POST['kamar-add'])){

	$database->insert('kamar',[
		'nomor_kamar'=>$_POST['nomor_kamar'],
		'id_kamar_tipe'=>$_POST['id_kamar_tipe'],
		'max_dewasa'=>$_POST['max_dewasa'],
		'max_anak'=>$_POST['max_anak'],
		'status_kamar'=>'TERSEDIA'
		]);
}

if(isset($_POST['kamartipe-add'])){

	$database->insert('kamar_tipe',[
		'nama_kamar_tipe'=>$_POST['nama_kamar_tipe'],
		'harga_malam'=>$_POST['harga_malam'],
		'harga_orang'=>$_POST['harga_orang'],
		'keterangan'=>$_POST['keterangan']
		]);

	$alert='Anda berhasil menambah tipe kamar baru';
}

// Edit Kamar & Tipe Kamar
if(isset($_POST['kamar-update'])){

	$database->update('kamar',[
		'nomor_kamar'=>$_POST['nomor_kamar'],
		'id_kamar_tipe'=>$_POST['id_kamar_tipe'],
		'max_dewasa'=>$_POST['max_dewasa'],
		'max_anak'=>$_POST['max_anak'],
		'status_kamar'=>$_POST['status_kamar']
		],[
		'id_kamar'=>$_POST['id_kamar']
		]);

	$alert='Anda berhasil melakukan perubahan pada kamar '.$_POST['nomor_kamar'];
}

if(isset($_POST['kamartipe-update'])){

	$database->update('kamar_tipe',[
		'nama_kamar_tipe'=>$_POST['nama_kamar_tipe'],
		'harga_malam'=>$_POST['harga_malam'],
		'harga_orang'=>$_POST['harga_orang'],
		'keterangan'=>$_POST['keterangan']
		],[
		'id_kamar_tipe'=>$_POST['id_kamar_tipe']
		]);

	$alert='Anda berhasil melakukan perubahan pada tipe kamar '.$_POST['nama_kamar_tipe'];
}

// Hapus Kamar & Tipe Kamar
if(isset($_POST['kamar-del'])){

	$database->delete('kamar',['id_kamar'=>$_POST['id_kamar']]);

	$alert='Anda telah berhasil melakukan pengapusan kamar';
}

if(isset($_POST['kamartipe-del'])){

	$database->delete('kamar_tipe',['id_kamar_tipe'=>$_POST['id_kamar_tipe']]);
}


?>