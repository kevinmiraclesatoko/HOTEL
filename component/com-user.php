<?php

//List & View User

$user=$database->select('user',[
	'[><]user_role'=>'id_user_role'
	],[
	'user.id_user',
	'user.nama',
	'user.username',
	'user.password',
	'user.jabatan',
	'user.nomor_telp',
	'user_role.id_user_role',
	'user_role.role_name'
	]);

if(!empty($_GET['user'])) {

	$user_view=$database->get('user',[
		'[><]user_role'=>'id_user_role'
		],[
		'user.id_user',
		'user.nama',
		'user.username',
		'user.password',
		'user.jabatan',
		'user.nomor_telp',
		'user_role.id_user_role',
		'user_role.role_name'
		],[
		'id_user'=>$_GET['user']
		]);
}

//List & View User Role

$user_role=$database->select('user_role','*');

if(!empty($_GET['user-role'])) {

	$user_role_view=$database->get('user_role','*',['id_user_role'=>$_GET['user-role']]);
}

//Add User

if(isset($_POST['user-add'])) {

	$password_hash=md5($_POST['password']);

	$database->insert('user',[
		'username'=>$_POST['username'],
		'password'=>$password_hash,
		'nama'=>$_POST['nama'],
		'id_user_role'=>$_POST['id_user_role'],
		'jabatan'=>$_POST['jabatan'],
		'nomor_telp'=>$_POST['nomor_telp']
		]);
}



//Update User

if(isset($_POST['user-update'])) {

	$password_hash=md5($_POST['password']);

	$database->update('user',[
		'username'=>$_POST['username'],
		'password'=>$password_hash,
		'nama'=>$_POST['nama'],
		'id_user_role'=>$_POST['id_user_role'],
		'jabatan'=>$_POST['jabatan'],
		'nomor_telp'=>$_POST['nomor_telp']
		],[
		'id_user'=>$_POST['id_user']
		]);
}

//Delete User

if(isset($_POST['user-del'])) {

	$database->delete('user',['id_user'=>$_POST['id_user']]);
}

?>