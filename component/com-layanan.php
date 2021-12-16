<?php

//List Layanan & Kategori Layanan

$layanan=$database->select('layanan',[
	'[><]layanan_kategori'=>'id_layanan_kategori'
	],[
	'layanan.id_layanan',
	'layanan.nama_layanan',
	'layanan.satuan',
	'layanan.harga_layanan',
	'layanan_kategori.id_layanan_kategori',
	'layanan_kategori.nama_layanan_kategori'
	],[
	'ORDER'=>'nama_layanan'
	]);

$layanan_kategori=$database->select('layanan_kategori','*');

if(!empty($_GET['layanan-filter'])) {

	$layanan_filter=$database->select('layanan',[
	'[><]layanan_kategori'=>'id_layanan_kategori'
	],[
	'layanan.id_layanan',
	'layanan.nama_layanan',
	'layanan.satuan',
	'layanan.harga_layanan',
	'layanan_kategori.id_layanan_kategori',
	'layanan_kategori.nama_layanan_kategori'
	],[
	'ORDER'=>'nama_layanan',
	'id_layanan_kategori'=>$_GET['layanan-filter']
	]);
}

//View Layanan & Kategori Layanan

if(!empty($_GET['layanan'])){

	$layanan_view=$database->get('layanan',[
		'[><]layanan_kategori'=>'id_layanan_kategori'
		],[
		'layanan.id_layanan',
		'layanan.nama_layanan',
		'layanan.satuan',
		'layanan.harga_layanan',
		'layanan_kategori.id_layanan_kategori',
		'layanan_kategori.nama_layanan_kategori'
		],[
		'id_layanan'=>$_GET['layanan']
		]);
}

if(!empty($_GET['layanan-kategori'])){

	$layanan_kategori_view=$database->get('layanan_kategori','*',['id_layanan_kategori'=>$_GET['layanan-kategori']]);
}

//Add Layanan & Kategori Layanan

if(isset($_POST['layanan-add'])) {

	$database->insert('layanan',[
		'nama_layanan'=>$_POST['nama_layanan'],
		'id_layanan_kategori'=>$_POST['id_layanan_kategori'],
		'satuan'=>$_POST['satuan'],
		'harga_layanan'=>$_POST['harga_layanan']
		]);
}

if(isset($_POST['layanankat-add'])) {

	$database->insert('layanan_kategori',[
		'nama_layanan_kategori'=>$_POST['nama_layanan_kategori'],
		'keterangan'=>$_POST['keterangan']
		]);
}

//Update Layanan & Layanan Kategori

if(isset($_POST['layanan-update'])) {

	$database->update('layanan',[
		'nama_layanan'=>$_POST['nama_layanan'],
		'id_layanan_kategori'=>$_POST['id_layanan_kategori'],
		'satuan'=>$_POST['satuan'],
		'harga_layanan'=>$_POST['harga_layanan']
		],[
		'id_layanan'=>$_POST['id_layanan']
		]);
}

if(isset($_POST['layanankat-update'])) {

	$database->update('layanan_kategori',[
		'nama_layanan_kategori'=>$_POST['nama_layanan_kategori'],
		'keterangan'=>$_POST['keterangan']
		],[
		'id_layanan_kategori'=>$_POST['id_layanan_kategori']
		]);
}

//Hapus Layanan & Kategori Layanan

if(isset($_POST['layanan-del'])) {

	$database->delete('layanan',['id_layanan'=>$_POST['id_layanan']]);
}

if(isset($_POST['layanankat-del'])) {

	$database->delete('layanan_kategori',['id_layanan_kategori'=>$_POST['id_layanan_kategori']]);
}
?>