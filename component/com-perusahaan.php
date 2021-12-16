<?php

//Data Perusahaan

$perusahaan=$database->get('perusahaan','*',['id_perusahaan'=>1]);

if(isset($_POST['perusahaan-update'])) {

	$database->update('perusahaan',[
		'nama_hotel'=>$_POST['nama_hotel'],
		'nama_perusahaan'=>$_POST['nama_perusahaan'],
		'alamat_jalan'=>$_POST['alamat_jalan'],
		'alamat_kabupaten'=>$_POST['alamat_kabupaten'],
		'alamat_provinsi'=>$_POST['alamat_provinsi'],
		'nomor_telp'=>$_POST['nomor_telp'],
		'nomor_fax'=>$_POST['nomor_fax'],
		'email'=>$_POST['email'],
		'website'=>$_POST['website']
		],[
		'id_perusahaan'=>1
		]);
}

?>