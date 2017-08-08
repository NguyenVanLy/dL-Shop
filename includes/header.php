
<!-- header -->
	<!-- <?php include_once("includes/sign.php");?> -->
	<div class="header">
		<div class="container">
			<div class="w3l_login">
				<?php
				if(isset($_SESSION['ten_khach_hang'])=="")
				{
				?>
				<a href="dat-hang"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></a>
				<?php
				}
				else
				{
				?>
				<a href="trang_chu.php?func=1"><span class="glyphicon glyphicon-log-out"></span></a>
				<?php
				}
				?>
			</div>
			<div class="w3l_logo">
				<h1 style="text-align: center;"><a href=".">dL-Shop<span>Cửa hàng thể thao</span></a></h1>
			</div>
			<div class="search">
				<input class="search_box" type="checkbox" id="search_box" >
				<label class="icon-search" for="search_box"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></label>
				<div class="search_form">
					<form action="san-pham" method="post">
						<input type="text" name="tim" placeholder="Tìm..." >
						<input type="submit" value="Tìm">
					</form>
				</div>
			</div>
			<!-- <div class="cart box_1">
				<a href="gio_hang.php">
					<div class="total">
					<span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> Sản phẩm)</div>
					<img src="public/images/bag.png" alt="" />
				</a>
				<p><a href="javascript:;" class="simpleCart_empty">Xóa</a></p>
				<div class="clearfix"> </div>
			</div> -->
			<!--start-->
			<div style="width:350px;float:right;position:absolute; right: 10px; z-index: 1000;">
			    
			    <a href="#" class="cart-box" id="cart-info" title="View Cart">
			    	<div style="color:#fff; background:#ff9b05; border-radius:10px; width:20px; text-align:center;">
					<?php 
			            if(isset($_SESSION["products"]))
			            {
			                echo count($_SESSION["products"]); 
			            }
			            else
			            {
			                echo 0; 
			            }
			        ?>
                    </div>
			    </a>
			    <div class="shopping-cart-box">
			            <a href="#" class="close-shopping-cart-box" >Close</a>
			            <h3>Giỏ hàng của bạn</h3> 
			            <div id="shopping-cart-results"></div>
			    </div>
			</div>
			<div style="clear:both"></div>
			<!--end-->	
			<div class="clearfix"> </div>
		</div>
	</div>
	<?php include_once("includes/menu.php");?>
<!-- //header -->