<html>
	<head>
		<title>Product detail</title>
		
		<link rel="stylesheet" href="css/font-awesome.css">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/style.css">
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.js"></script>
		<style>
			.btn {
				font-size: 40px;
				height: 70px;
			}
		</style>
	</head>
	<body>
		<?php include 'includes/header.php'; ?>
		<div class="container">
			<div class="row">
				<ol class="breadcrumb">
					<li><a href="index.php">Home</a></li>
					<li><a href="#">Men Ethnic Wear</a></li>
					<li class="active">Kurtas</li>
				</ol>
			</div>
			<div class="row">
			<div class="col-md-8">
				<h3 class="pp-title">Siyaram's Kurtas</h3>
				<img src="images/products/men-kurta.jpg" class="img-responsive">
				<h4 class="pp-desc-head">Description</h4>
				<div class="pp-desc-detail">
					<p>This is a very beautiful product which is worth buying and will enhance your wardrobe.</p>
					<ul>
						<li>It's Beautiful and of pure cotton</li>
						<li>Amazing quality</li>
						<li>Ranked 1 in best-sellers</li>
						<li>Rated 4.5. out of by 236 customers</li>
						<li>Pay Securely via <b>CASH ON DELIVERY</b> method</li>
					</ul>
				</div>
			</div>
			<aside class="col-md-4">
				
				<a href="buy.php" class="btn btn-success btn-lg btn-block">Buy</a>
				<br>
				<ul class="list-group">
					<li class="list-group-item">
						<div class="row">
							<div class="col-md-3"><i class="fa fa-truck fa-2x"></i></div>
							<div class="col-md-9">Delivered within 5 days</div>
						</div>
					</li>
					<li class="list-group-item">
						<div class="row">
							<div class="col-md-3"><i class="fa fa-refresh fa-2x"></i></div>
							<div class="col-md-9">Easy return in 7 days</div>
						</div>
					</li>
					<li class="list-group-item">
						<div class="row">
							<div class="col-md-3"><i class="fa fa-phone fa-2x"></i></div>
							<div class="col-md-9">Call at 123456789</div>
						</div>
					</li>
				</ul>
			</aside>
			</div>
			<div class="page-header">
				<h2>Related Items</h2>
			</div>
			<section class="row">
				<div class="col-lg-3">
					<div class="col-lg-12  single-item noPadding">
						<div class="top"><img src="images/products/sportswear.jfif"></div>
						<div class="bottom">
							<h3 class="item-title"><a href="product.php">Sportswear</a></h3>
							<div class="clearfix"></div>
							<div class="pull-right discounted-price">Starting at Rs. 399</div>
						</div>
					</div>
				</div><div class="col-lg-3">
					<div class="col-lg-12  single-item noPadding">
						<div class="top"><img src="images/products/women-westernwear.jfif"></div>
						<div class="bottom">
							<h3 class="item-title"><a href="product.php">Women Tops</a></h3>
							<div class="clearfix"></div>
							<div class="pull-right discounted-price">Starting at Rs. 199</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="col-lg-12  single-item noPadding">
						<div class="top"><img src="images/products/women-dresses.jfif"></div>
						<div class="bottom">
							<h3 class="item-title"><a href="product.php">Women Dresses</a></h3>
							<div class="clearfix"></div>
							<div class="pull-right discounted-price">Starting at Rs. 399</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="col-lg-12  single-item noPadding">
						<div class="top"><img src="images/products/women-ethnic.jfif"></div>
						<div class="bottom">
							<h3 class="item-title"><a href="product.php">Women Ethnic wear</a></h3>
							<div class="clearfix"></div>
							<div class="pull-right discounted-price">Starting at Rs. 349</div>
						</div>
				
				</div>
		
			</section>
		</div><br><br><br><br><br>
		<?php include 'includes/footer.php'; ?>
	</body>
</html>