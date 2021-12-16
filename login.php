<?php

session_start();

require('config/database.php');

if(isset($_POST['username'],$_POST['password'])){

		$hash=md5($_POST['password']);
		$record=$database->pdo->prepare("SELECT * FROM user WHERE 
		username=:username AND password=:password");
		$record->bindParam(':username',$_POST['username']);
		$record->bindParam(':password',$hash);
		$record->execute();
		
		if($row=$record->fetch()){
			$_SESSION['id_user']=$row['id_user'];
			$_SESSION['username']=$row['username'];
			$_SESSION['images']=$row['images'];
			$_SESSION['nama']=$row['nama'];
			$_SESSION['jabatan']=$row['jabatan'];
			$_SESSION['batasan']=$row['id_user_role'];
			header('location:index.php');
		}
		else {
			$errMsg='Username atau Password tidak ditemukan';
		}
}

include('template/login.php');

?>