<?php include "../controller/userController.php"; ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Meta, title, CSS, favicons, etc. -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>F-graf</title>
		<link rel="stylesheet" type="text/css" href="<?php clink(); ?>view/css/cosmo.css">
		<link rel="stylesheet" type="text/css" href="<?php clink(); ?>view/css/uciluser.css">
		<link rel="stylesheet" type="text/css" href="<?php clink(); ?>view/css/bebas.css">
		<link rel="stylesheet" type="text/css" href="<?php clink(); ?>font_awesome/css/font-awesome.min.css">
		<script type="text/javascript" src="<?php clink(); ?>view/js/jquery-1.11.1.min.js"></script>
		<script type="text/javascript" src="<?php clink(); ?>view/js/bootstrap.min.js"></script>
	</head>
	<body id="mins">
		<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="container">
		  <div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </button>
			  <a class="navbar-brand" href="#">Fgraf</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			  
			  <ul class="nav navbar-nav navbar-right">
				<li><a href="<?php clink() ?>user/index.php">Home</a></li>
				<li><a href="<?php clink() ?>user/status.php">Status</a></li>
				<li><a href="<?php clink() ?>user/cv.php">CV</a></li>
				<li><a href="#">Contact</a></li>
				<li class="dropdown">
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Lainnya <b class="caret"></b></a>
				  <ul class="dropdown-menu">
					<li><a href="#">Ubah Akun</a></li>
					<li><a href="#">Ganti Password</a></li>
					<li class="divider"></li>
					<li><a href="#">Keluar</a></li>
				  </ul>
				</li>
			  </ul>
			</div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		  </div>
		</nav>