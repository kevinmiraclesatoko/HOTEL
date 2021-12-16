<?php

//List & View Tamu

$tamu=$database->select('tamu','*');

if(!empty($_GET['tamu'])) {

	$tamu_view=$database->get('tamu','*',['id_tamu'=>$_GET['tamu']]);
}

//Insert Tamu

if(isset($_POST['tamu-add'])) {

	$database->insert('tamu',[
		'prefix'=>$_POST['prefix'],
		'nama_depan'=>$_POST['nama_depan'],
		'nama_belakang'=>$_POST['nama_belakang'],
		'tipe_identitas'=>$_POST['tipe_identitas'],
		'nomor_identitas'=>$_POST['nomor_identitas'],
		'warga_negara'=>$_POST['warga_negara'],
		'alamat_jalan'=>$_POST['alamat_jalan'],
		'alamat_kabupaten'=>$_POST['alamat_kabupaten'],
		'alamat_provinsi'=>$_POST['alamat_provinsi'],
		'nomor_telp'=>$_POST['nomor_telp'],
		'email'=>$_POST['email']
		]);
}

//Update Tamu

if(isset($_POST['tamu-update'])) {

	$database->update('tamu',[
		'prefix'=>$_POST['prefix'],
		'nama_depan'=>$_POST['nama_depan'],
		'nama_belakang'=>$_POST['nama_belakang'],
		'tipe_identitas'=>$_POST['tipe_identitas'],
		'nomor_identitas'=>$_POST['nomor_identitas'],
		'warga_negara'=>$_POST['warga_negara'],
		'alamat_jalan'=>$_POST['alamat_jalan'],
		'alamat_kabupaten'=>$_POST['alamat_kabupaten'],
		'alamat_provinsi'=>$_POST['alamat_provinsi'],
		'nomor_telp'=>$_POST['nomor_telp'],
		'email'=>$_POST['email']
		],[
		'id_tamu'=>$_POST['id_tamu']
		]);
}

// Delete Tamu

if(isset($_POST['tamu-del'])) {

	$database->delete('tamu',['id_tamu'=>$_POST['id_tamu']]);
}

?>