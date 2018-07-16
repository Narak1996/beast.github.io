<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
	<title>Shop</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<link rel="shortcut icon" href="img/logo/logo.jpg">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="fontawesome-free-5.0.2/web-fonts-with-css/css/fontawesome-all.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="css/lightbox.min.css">
	<script type="text/javascript" src="js/lightbox-plus-jquery.min.js"></script>

</head>
<body>

<button id="gotop"><i class="fa fa-caret-up"></i></button>
	


<div class="row">
	<div class="col-xs-12 hidden-sm hidden-md hidden-lg" >
			<nav class="navbar-inverse" role="navigation" >
				<div class="container" >
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header" >
						<button type="button" class="navbar-toggle phover" data-toggle="collapse" data-target=".navbar-ex1-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar hovericon"></span>
							
							<span class="icon-bar hovericon1"></span>
						</button>
						<a class="" href="#"><img src="img/logo/logo.png" width="50px"></a>
					</div>
			
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse navbar-ex1-collapse" >
						<ul class="nav navbar-nav">
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">EARPHONE <b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li><a href="#">JBL</a></li>
									<li><a href="#">BEATS</a></li>
									<li><a href="#">SONY</a></li>
									<li><a href="#">MONSTER</a></li>
								</ul>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">HEADPHONE <b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li><a href="#">BEATS</a></li>
									<li><a href="#">BOSE</a></li>
									<li><a href="#">MONSTER</a></li>
								</ul>
							</li>
							<li><a href="#">អំពីយើង</a></li>
							<li><a href="#">ទំនាកទំនង</a></li>
						</ul>
						<form class="navbar-form" role="search">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="ស្វែងរកនៅទីនេះ">
							</div>
							<button type="submit" class="btn btn-default">ស្វែងរក</button>
						</form>
						
					</div><!-- /.navbar-collapse -->
				</div>
			</nav>
	</div>	
</div>




	<h2 id="w"></h2>
	<h2 id="h">1</h2>
	<div class="hidden-xs col-sm-12 col-md-12 col-lg-12" id="headbar">
		<div class="logo">
			<a href="index.php"><img src="img/logo/logo.jpg" height="50px">
				
			</a>
		</div>
		<div class="menu">
			<ul id="menu">
				<li class="dropdown ani">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">HEADPHONE <b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li><a href="#">BEATS</a></li>
									<li><a href="#">BOSE</a></li>
									<li><a href="#">MONSTER</a></li>
								</ul>
							</li>
				<li class="ani"><a href="#3">EARPHONE</a></li>
				<li class="ani"><a href="#3">EARPHONE</a></li>
				<li class="ani"><a href="#3">EARPHONE</a></li>
				<li><a><i class="fa fa-caret-right icaret"></i></a></li>
				
			</ul>
		</div>
		<div class="menu-r">
			<ul id="menu-r">

				<li class="ani"><a href="#">អំពីយើង</i></a></li>
				<li class="ani"><a href="#">ទំនាក់ទំនង</a></li>
				<li>
					<button class="submit" id="btnshowsearch"><i class="fa fa-search"></i></button>
				</li>
				
					

					<form action="index.php" method="post" id="frmsearch">
						<button class="submit" id="btnsearch" name="btnsearch"><i class="fa fa-search"></i></button>
						<input type="text" class="search" id="txtsearch" name="txtsearch">
					</form>
				
			</ul>
		</div>
	</div>