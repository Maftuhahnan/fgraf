<?php include_once "./controller/indexController.php"; ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Fgraf </title>
		<!-- Sets initial viewport load and disables zooming  -->
		<meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
		<link rel="stylesheet" type="text/css" href="css/css/site.min.css">
		<link rel="stylesheet" type="text/css" href="css/main/style.css">
		
		<link rel="stylesheet" href="css/font_awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Montserrat:400,700" type="text/css">
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Kaushan+Script" rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic">
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700">
		
	</head>
	<body id="min-bd">
	<!-- REGISTRATION -->
	<!-- Modal -->
	<div class="modal fade layer" id="register" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
			<h4 class="modal-title" id="myModalLabel">Sign Up</h4>
		  </div>
		  <div class="modal-body">
			<div class="modal-body">
					<form method="post" id="contoh-form">
						<div class="form-group" id="rgs">
							<div class="input-group">
							 <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
							  <input type="text" class="form-control" name="username" placeholder="Username">
							</div>
						</div>
						<div class="form-group" id="rgs">
							<div class="input-group">
							 <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
							  <input type="email" class="form-control" name="email" placeholder="Email">
							</div>
						</div>
						<div class="form-group" id="rgs">
							<div class="input-group">
							 <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
							  <input type="password" class="form-control" name="pass" placeholder="Password">
							</div>
						</div>
						<p><img src="/empici/img/cap.php" width="100" height="30" id="rgs"></p>
						<div class="form-group" id="rgs">
							<div class="input-group">
							 <span class="input-group-addon"><i class="glyphicon glyphicon-qrcode"></i></span>
							  <input type="text" name="captcha" class="form-control" placeholder="Captcha" maxlength="14">
							</div>
						</div>
						<span class="loading"></span>
				</div>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			<button type="submit" name="regist" class="btn btn-primary">Kirim Data</button>
			</form>
		  </div>
		</div>
	  </div>
	</div>
	<div class="modal fade layer" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
			<h4 class="modal-title" id="myModalLabel">Sign Up</h4>
		  </div>
		  <div class="modal-body">
			<div class="modal-body">
					<form method="post" id="contoh-form">
						<div class="form-group" id="rgs">
							<div class="input-group">
							 <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
							  <input type="text" class="form-control" name="username" placeholder="Username">
							</div>
						</div>
						<div class="form-group" id="rgs">
							<div class="input-group">
							 <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
							  <input type="email" class="form-control" name="email" placeholder="Email">
							</div>
						</div>
				</div>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			<button type="login" name="regist" class="btn btn-primary">Login</button>
			</form>
		  </div>
		</div>
	  </div>
	</div>
	<!-- END REGISTRATION-->
	<!-- Navigation -->
	<nav class="navbar navbar-default navbar-custom non-sdt" id="kebawah" role="navigation" style="display: block;">
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
		  <a class="navbar-brand gede pdp" href="#"><img src="css/pic/logo.PNG" width="60"></a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse navbar-inverse-collapse" id="bs-example-navbar-collapse-1">
		<form class="navbar-form navbar-right" role="search">
                    <div class="form-search search-only">
                        <label for="search"><i class="search-icon glyphicon glyphicon-search"></i></label>
                        <input type="text" class="form-control search-query kecil" id="search" placeholder="Search...">
                    </div>
            </form>
		  <ul class="nav navbar-nav navbar-right ft-mn">
			<li><a class="nav-link" href="getting-started.html">Home</a></li>
            <li><a class="nav-link" href="documentation.html">About</a></li>
            <li><a class="nav-link" href="free-psd.html">Status</a></li>
            <li><a class="page-scroll" href="#portfolio" >Project</a></li>
		</ul>
		</div><!-- /.navbar-collapse -->
		</div>
	  </div><!-- /.container-fluid -->
	</nav>
	<!--JUMB-->
	  <div class="content putih bg-jb">
		  <div class="container">
			  <div class="jumbotron non-sd pdj">
					  <div class="jumbotron-photo">&nbsp;</div>
						<div class="jumbotron-contents">
						<h1 class="head">Create Your Imagination Real</h1>
						<p id="bg-item">Hi What's up. Welcome To FilmMaker GRAF !</p>
						<div class="btn-ps"><a href="" class="jb-btn redd">Learn More</a></div>
						</div>
				</div>
		  </div>
		  <div class="aksinya">
			<div class="container" id="pdak">
				<div class="aksi-btn">
					<a href="" class="jb-btn redd" data-toggle="modal" data-target="#register" id="gr"><i class="fa fa-user"></i> Sign Up</a>&nbsp;
					<a href="" class="jb-btn redd" data-toggle="modal" data-target="#login" id="lg"><i class="fa fa-sign-in"></i> Login</a>
				</div>
			</div>
			<div class="grs">
				<div class="lines">
				</div>
			</div>
		  </div>
		  <div class="total">
			<div class="container">
				<div class="col-xs-6 col-sm-3">
					<p><i class="fa fa-clipboard"></i> 4002 Project</p>
				</div>
				<div class="col-xs-6 col-sm-3">
					<p><i class="fa fa-users"></i> 1000 Users</p>
				</div>
				<div class="col-xs-6 col-sm-3">
					<p><i class="fa fa-camera-retro"></i> 4002 Fiksi Film</p>
				</div>
				<div class="col-xs-6 col-sm-3">
					<p id="countr"><i class="fa fa-film"></i> 4002 Dokumenter Film</p>
				</div>
			</div>
		  </div>
      </div>
	  <!-- END Jumb-->
	  <div class="contenti" >
	  <h4 class="head-2">project</h4>
	  <div class="container" id="portfolio">
		<div id="post-area" class="masonry" >
			<div class="post-copy">
				<div class="graf-image">
					<img width="270" src="http://localhost/toko/wp-content/uploads/2014/07/4ALUVYYlQLC004zkGhd9_Sunset-at-Windermere.jpg">
				</div>
				<div class="graf-head">
					<p class="head-jd">IndiBung</p>
					<p class="head-kal"><i class="fa fa-calendar"></i> 2014 - 10 - 20</p>
				</div>
				<div class="graf-rm">
					<a href="" class="btn-rm">&rarr;</a>
				</div>
			</div>
			<div class="post-copy">
				<div class="graf-image">
					<img width="270" src="css/pic/wow.png">
				</div>
				<div class="graf-head">
					<p class="head-jd">IndiBung</p>
					<p class="head-kal"><i class="fa fa-calendar"></i> 2014 - 10 - 20</p>
				</div>
				<div class="graf-rm">
					<a href="" class="btn-rm">&rarr;</a>
				</div>
			</div>
			<div class="post-copy">
				<div class="graf-image">
					<img width="270" src="css/pic/hp.png">
				</div>
				<div class="graf-head">
					<p class="head-jd">IndiBung</p>
					<p class="head-kal"><i class="fa fa-calendar"></i> 2014 - 10 - 20</p>
				</div>
				<div class="graf-rm">
					<a href="" class="btn-rm">&rarr;</a>
				</div>
			</div>
			<div class="post-copy">
				<div class="graf-image">
					<img width="270" src="css/pic/jos.png">
				</div>
				<div class="graf-head">
					<p class="head-jd">IndiBung</p>
					<p class="head-kal"><i class="fa fa-calendar"></i> 2014 - 10 - 20</p>
				</div>
				<div class="graf-rm">
					<a href="" class="btn-rm">&rarr;</a>
				</div>
			</div>
			<div class="post-copy">
				<div class="graf-image">
					<img width="270" src="css/pic/hp.png">
				</div>
				<div class="graf-head">
					<p class="head-jd">IndiBung</p>
					<p class="head-kal"><i class="fa fa-calendar"></i> 2014 - 10 - 20</p>
				</div>
				<div class="graf-rm">
					<a href="" class="btn-rm">&rarr;</a>
				</div>
			</div>
			<div class="post-copy">
				<div class="graf-image">
					<img width="270" src="css/pic/jos.png">
				</div>
				<div class="graf-head">
					<p class="head-jd">IndiBung</p>
					<p class="head-kal"><i class="fa fa-calendar"></i> 2014 - 10 - 20</p>
				</div>
				<div class="graf-rm">
					<a href="" class="btn-rm">&rarr;</a>
				</div>
			</div>
			<div class="post-copy">
				<div class="graf-image">
					<img width="270" src="http://localhost/toko/wp-content/uploads/2014/07/4ALUVYYlQLC004zkGhd9_Sunset-at-Windermere.jpg">
				</div>
				<div class="graf-head">
					<p class="head-jd">IndiBung</p>
					<p class="head-kal"><i class="fa fa-calendar"></i> 2014 - 10 - 20</p>
				</div>
				<div class="graf-rm">
					<a href="" class="btn-rm">&rarr;</a>
				</div>
			</div>
			<div class="post-copy">
				<div class="graf-image">
					<img width="270" src="http://localhost/toko/wp-content/uploads/2014/07/4ALUVYYlQLC004zkGhd9_Sunset-at-Windermere.jpg">
				</div>
				<div class="graf-head">
					<p class="head-jd">IndiBung IndiBung IndiBung IndiBung IndiBung IndiBung</p>
					<p class="head-kal"><i class="fa fa-calendar"></i> 2014 - 10 - 20</p>
				</div>
				<div class="graf-rm">
					<a href="" class="btn-rm">&rarr;</a>
				</div>
			</div>
		</div>
			
	  </div>
	  </div>
	 <div class="partner">
        <div class="container">
            <div class="row">
			<div class="col-lg-12 text-center">
                    <h2 class="head-3">Partner</h2>
					<p>Terima kasih telah menjadi partner kami</p>
					<br>
                </div>
                <div class="col-md-3 col-sm-6" style="padding-top:5px;">
                    <a href="#">
                        <img src="css/pic/canon.PNG" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="css/pic/mysql.PNG" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6" style="padding-top:20px;">
                    <a href="#">
                        <img src="css/pic/comodo.PNG" width="180" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6" style="padding-top:5px;">
                    <a href="#">
                        <img src="css/pic/canon.PNG" class="img-responsive img-centered" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
	<div class="kontak">
		<div class="container pd-at">
			<div class="row">
			  <div class="col-xs-6">
				<dt class="nav-title">GET ME IN TOUCH</dt><br>
				<p><i class="fa fa-map-marker"></i> Jl. Cemara Raya, Banyumanik, Semarang Indonesia 50272</p>
				<p><i class="fa fa-mobile"></i> (024) 123-1234-12</p>
				<p><i class="fa fa-envelope"></i> Admin@ucilinside.com</p>
				
			  </div>
			  <div class="col-xs-6">
				<input type="text" class="form-control" placeholder="Text input">
			  </div>
			</div>
		</div>
	</div>
	 <!--Footer-->
	 <div class="footer bg-ft">
              <div class="container">
                <div class="clearfix">
                  <dl class="footer-nav">
                    <dt class="nav-title">PORTFOLIO</dt>
                    <dd class="nav-item"><a href="#">Web Design</a></dd>
                    <dd class="nav-item"><a href="#">Branding &amp; Identity</a></dd>
                    <dd class="nav-item"><a href="#">Mobile Design</a></dd>
                    <dd class="nav-item"><a href="#">Print</a></dd>
                    <dd class="nav-item"><a href="#">User Interface</a></dd>
                  </dl>
                  <dl class="footer-nav">
                    <dt class="nav-title">ABOUT</dt>
                    <dd class="nav-item"><a href="#">The Company</a></dd>
                    <dd class="nav-item"><a href="#">History</a></dd>
                    <dd class="nav-item"><a href="#">Vision</a></dd>
                  </dl>
                  <dl class="footer-nav">
                    <dt class="nav-title">GALLERY</dt>
                    <dd class="nav-item"><a href="#">Flickr</a></dd>
                    <dd class="nav-item"><a href="#">Picasa</a></dd>
                    <dd class="nav-item"><a href="#">iStockPhoto</a></dd>
                    <dd class="nav-item"><a href="#">PhotoDune</a></dd>
                  </dl>
                  <dl class="footer-nav">
                    <dt class="nav-title">CONTACT</dt>
                    <dd class="nav-item"><a href="#">Basic Info</a></dd>
                    <dd class="nav-item"><a href="#">Map</a></dd>
                    <dd class="nav-item"><a href="#">Conctact Form</a></dd>
                  </dl>
                </div>
                <div class="footer-copyright text-center">Copyright © 2014 Flathemes.All rights reserved.</div>
              </div>
            </div>
	 
	 <!-- JS -->
	
	<script src="css/js/jquery-1.10.1.min.js"></script>
	
	<script src="css/js/site.min.js"></script>
	<script src="css/js/fix.js"></script>
	<script src="css/js/masonry.js"></script>
	<script src="css/js/jquery.masonry.js"></script>
	<!--END JS-->

	
	</body>
</html>