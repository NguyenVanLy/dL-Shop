
<style type="text/css">
	a.shop_now{color: black;}
	a.shop_now:hover, a.shop_now:active {color: #ff9b05; font-size: 20px; }
</style>
<!-- banner -->
	<div class="banner" id="home1">
		<div class="container">
			<h3>fashions sport, <span>style is eternal</span></h3>
		</div>
	</div>
<!-- //banner -->
<!-- banner-bottom -->
	<div class="banner-bottom">
		<div class="container">
			<div class="col-md-5 wthree_banner_bottom_left">
				<div class="video-img">
					<a class="play-icon popup-with-zoom-anim" href="#small-dialog">
						<span class="glyphicon glyphicon-expand" aria-hidden="true"></span>
					</a>
				</div>
				<!-- pop-up-box -->    
						<link href="public/css/popuo-box.css" rel="stylesheet" type="text/css" property="" media="all" />
						<script src="public/js/jquery.magnific-popup.js" type="text/javascript"></script>
					<!--//pop-up-box -->
					<div id="small-dialog" class="mfp-hide">
						<iframe width="470" height="264" src="https://www.youtube.com/embed/xkky0mmayj8" frameborder="0" allowfullscreen></iframe>
					</div>
					<script>
						$(document).ready(function() {
						$('.popup-with-zoom-anim').magnificPopup({
							type: 'inline',
							fixedContentPos: false,
							fixedBgPos: true,
							overflowY: 'auto',
							closeBtnInside: true,
							preloader: false,
							midClick: true,
							removalDelay: 300,
							mainClass: 'my-mfp-zoom-in'
						});
																						
						});
					</script>
			</div>
			<div class="col-md-7 wthree_banner_bottom_right">
				<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
					<ul id="myTab" class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home">Giầy</a></li>
						<li role="presentation"><a href="#skirts" role="tab" id="skirts-tab" data-toggle="tab" aria-controls="skirts">Quần & Áo</a></li>
						<li role="presentation"><a href="#watches" role="tab" id="watches-tab" data-toggle="tab" aria-controls="watches">Phụ kiện</a></li>
						</ul>
					<div id="myTabContent" class="tab-content">
						<div role="tabpanel" class="tab-pane fade active in" id="home" aria-labelledby="home-tab">
							<div class="agile_ecommerce_tabs">
							
							<?php foreach ($giays as $giay): ?>
								<div class="col-md-4 agile_ecommerce_tab_left">
									<div class="hs-wrapper">
										<img src="public/images/san_pham/<?php echo $giay->hinh; ?>" alt=" " class="img-responsive" />
										<?php
										foreach($hinhs as $h)
										if($h->ma_san_phams == $giay->ma_san_pham)
										{
										?>
											<img src="public/images/san_pham/<?= $h->ten_hinh ?>" alt=" " class="img-responsive" />
										<?php
										}
										?>
										<div class="w3_hs_bottom">
											<ul>
												<li>
													<a href="#" data-toggle="modal" data-target="#<?php echo $giay->ma_san_pham?>"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
												</li>
											</ul>
										</div>
									</div>
									<h5 class="tensanpham"><a href="#"><?php echo $giay->ten_san_pham ?></a></h5>
									<div class="simpleCart_shelfItem">
										<p><span><?php echo number_format($giay->don_gia_khuyen_mai,0,",",".")." VNĐ";?></span> <i class="item_price"><?php echo number_format($giay->don_gia,0,",",".")." VNĐ";?></i></p>
										<p><a class="item_add" href="chi-tiet-san-pham/<?php echo $giay->ma_san_pham ?>">Mua Ngay</a></p>
									</div>
								</div>
							<?php endforeach ?>
																<!-- san-pham/ma_loai -->
								<p style="float: right;"><a href="san_pham.php?ma_loai=1" class="shop_now">SHOP NOW =></a></p>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="skirts" aria-labelledby="skirts-tab">
							<div class="agile_ecommerce_tabs">
								<?php foreach ($quan_aos as $quan_ao): ?>
								<div class="col-md-4 agile_ecommerce_tab_left">
									<div class="hs-wrapper">
										<img src="public/images/san_pham/<?php echo $quan_ao->hinh; ?>" alt=" " class="img-responsive" />
										<?php
										foreach($hinhs as $h)
										if($h->ma_san_phams == $quan_ao->ma_san_pham)
										{
										?>
											<img src="public/images/san_pham/<?= $h->ten_hinh ?>" alt=" " class="img-responsive" />
										<?php
										}
										?>
										<div class="w3_hs_bottom">
											<ul>
												<li>
													<a href="#" data-toggle="modal" data-target="#<?php echo $quan_ao->ma_san_pham?>"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
												</li>
											</ul>
										</div>
									</div>
									<h5 class="tensanpham"><a href="#"><?php echo $quan_ao->ten_san_pham ?></a></h5>
									<div class="simpleCart_shelfItem">
										<p><span><?php echo number_format($quan_ao->don_gia_khuyen_mai,0,",",".")." VNĐ";?></span> <i class="item_price"><?php echo number_format($quan_ao->don_gia,0,",",".")." VNĐ";?></i></p>
										<p><a class="item_add" href="chi-tiet-san-pham/<?php echo $giay->ma_san_pham ?>">Mua Ngay</a></p>
									</div>
								</div>
							<?php endforeach ?>
								<p style="float: right;"><a href="san_pham.php?ma_loai=2" class="shop_now">SHOP NOW =></a></p>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="watches" aria-labelledby="watches-tab">
							<div class="agile_ecommerce_tabs">
							<?php foreach ($phu_kiens as $phu_kien): ?>
								<div class="col-md-4 agile_ecommerce_tab_left">
									<div class="hs-wrapper">
										<img src="public/images/san_pham/<?php echo $phu_kien->hinh; ?>" alt=" " class="img-responsive" />
										<?php
										foreach($hinhs as $h)
										if($h->ma_san_phams == $phu_kien->ma_san_pham)
										{
										?>
											<img src="public/images/san_pham/<?= $h->ten_hinh ?>" alt=" " class="img-responsive" />
										<?php
										}
										?>
										<div class="w3_hs_bottom">
											<ul>
												<li>
													<a href="#" data-toggle="modal" data-target="#<?php echo $phu_kien->ma_san_pham?>"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
												</li>
											</ul>
										</div>
									</div>
									<h5 class="tensanpham"><a href="#"><?php echo $phu_kien->ten_san_pham ?></a></h5>
									<div class="simpleCart_shelfItem">
										<p><span><?php echo number_format($phu_kien->don_gia_khuyen_mai,0,",",".")." VNĐ";?></span> <i class="item_price"><?php echo number_format($phu_kien->don_gia,0,",",".")." VNĐ";?></i></p>
										<p><a class="item_add" href="chi-tiet-san-pham/<?php echo $giay->ma_san_pham ?>">Mua Ngay</a></p>
									</div>
								</div>
							<?php endforeach ?>
								
								<p style="float: right;"><a href="san_pham.php?ma_loai=3" class="shop_now">SHOP NOW =></a></p>
								<div class="clearfix"> </div>
							</div>
						</div>
						
					</div>
				</div>
					
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //banner-bottom -->
<!--modal-video-->
					<?php
					foreach($san_phams as $s)
					{	
					?>
				<div class="modal video-modal fade" id="<?php echo $s->ma_san_pham ?>" tabindex="-1" role="dialog" aria-labelledby="<?php echo $s->ma_san_pham ?>">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
							</div>
							<section>
								<div class="modal-body">
									<div class="col-md-5 modal_body_left">
										<img src="public/images/san_pham/<?php echo $s->hinh ?>" alt=" " class="img-responsive" />
									</div>
									<div class="col-md-7 modal_body_right">
										<h4><?php echo $s->ten_san_pham ?></h4>
										<p><?php echo $s->mo_ta ?></p>
										<!-- <div class="rating">
											<div class="rating-left">
												<img src="public/images/star-.png" alt=" " class="img-responsive" />
											</div>
											<div class="rating-left">
												<img src="public/images/star-.png" alt=" " class="img-responsive" />
											</div>
											<div class="rating-left">
												<img src="public/images/star-.png" alt=" " class="img-responsive" />
											</div>
											<div class="rating-left">
												<img src="public/images/star.png" alt=" " class="img-responsive" />
											</div>
											<div class="rating-left">
												<img src="public/images/star.png" alt=" " class="img-responsive" />
											</div>
											<div class="clearfix"> </div>
										</div> -->
										<div class="modal_body_right_cart simpleCart_shelfItem">
											<p><span><?php echo number_format($s->don_gia_khuyen_mai,0,",",".")." VNĐ";?></span> 
											<i class="item_price"><?php echo number_format($s->don_gia,0,",",".")." VNĐ";?></i></p>
											<p><a class="item_add" href="chi-tiet-san-pham/<?php echo $giay->ma_san_pham ?>">Mua ngay</a></p>
										</div>
										
									</div>
									<div class="clearfix"> </div>
								</div>
							</section>
						</div>
					</div>
				</div>
				<?php
				}
				?>
				
				
				
