<?php
@session_start(); //start session
require_once("models/config.php");
?>
<!-- banner -->
	<div class="banner10" id="home1">
		<div class="container">
			<h2>Giỏ Hàng</h2>
		</div>
	</div>
<!-- //banner -->

<!-- breadcrumbs -->
	<div class="breadcrumb_dress">
		<div class="container">
			<ul>
				<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Trang Chủ</a> <i>/</i></li>
				<li>Giỏ Hàng</li>
			</ul>
		</div>
	</div>
<!-- //breadcrumbs -->
<!-- checkout -->
	
	<div class="checkout">
		<div class="container">
			<h3>Giỏ hàng của tôi: <span><?php echo isset($_SESSION["products"])?count($_SESSION["products"]):0; ?> Sản phẩm</span></h3>
			<?php include ("v_cart.php"); ?>
		</div>
	</div>
<!-- //checkout -->
