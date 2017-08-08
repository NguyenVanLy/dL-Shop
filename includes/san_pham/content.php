
<!-- banner -->
	<div class="banner8" id="home1">
		<div class="container">
			<!-- <h2>Women Cosmetics<span>up to</span> Flat 40% <i>Discount</i></h2> -->
		</div>
	</div>
<!-- //banner -->

<!-- breadcrumbs -->
	<div class="breadcrumb_dress">
		<div class="container">
			<ul>
				<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a> <i>/</i></li>
				<li>Products</li>
			</ul>
		</div>
	</div>
<!-- //breadcrumbs -->
<!-- dresses -->
	<div class="dresses">
		<div class="container">
			<div class="w3ls_dresses_grids">
				<div class="col-md-4 w3ls_dresses_grid_left">
					<?php include_once("left.php"); ?>
				</div>
				<!-- right -->
				<div class="col-md-8 w3ls_dresses_grid_right">
					<?php include_once("right.php"); ?>
				</div>
				<!-- //right -->
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<?php
if (isset($views)) 
	{
		foreach ($views as $view) 
		{
			include ("$view");
		}
	}

?>


<!-- //dresses -->