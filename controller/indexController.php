<?php 
    include "inc.php";
   if(isset($_POST['regist'])){
		$user = sp('username');
		$email = sp('email');
		$cekp = sp('pass');
		$pass = enk(sp('pass'));
		
		if(empty($user) || !filter_var($email,FILTER_VALIDATE_EMAIL) || empty($cekp)){
			alert("Maaf Pengisian Ada yang Kosong atau Email Salah","index.php");
		}elseif(strlen($user) < 5){
			alert("Maaf Username anda harus lebih dari 5 karakter","index.php");
		}else{
			$cks = fg::all("INSERT INTO `user`(`username`, `email`, `password`,`role`) VALUES ('$user','$email','$pass','U')");
			if($cks){
				alert("Sukses Enjoy","index.php");
			}
		}
		
		
	}
	


?>