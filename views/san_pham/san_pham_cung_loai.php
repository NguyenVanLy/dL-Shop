	<div class="w3l_related_products">
		<div class="container">
			<h3>Sản phẩm cùng loại</h3>
			<ul id="flexiselDemo2">	
			<?php foreach ($san_phams as $s): ?>
				<?php
				if($s->ma_nsx == $san_pham->ma_nsx)
				{
				?>
			 	<li>
					<div class="w3l_related_products_grid">
						<div class="agile_ecommerce_tab_left dresses_grid">
							<div class="hs-wrapper hs-wrapper3">
							<img src="public/images/san_pham/<?= $s->hinh ?>" alt=" " class="img-responsive">
							<?php
							?>
							<?php foreach ($hinhs as $h): ?>
								<?php
								if($h->ma_san_phams == $s->ma_san_pham)
								{
								?>
								<img src="public/images/san_pham/<?= $h->ten_hinh ?>" alt=" " class="img-responsive">
								<?php
								}
								?>
							<?php endforeach ?>
								<div class="w3_hs_bottom">
									<div class="flex_ecommerce">
										<a href="#" data-toggle="modal" data-target="#<?=$s->ma_san_pham?>"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
									</div>
								</div>
							</div>
							<h5><a href="chi-tiet-san-pham/<?php echo $s->ma_san_pham ?>"><?= $s->ten_san_pham ?></a></h5>
							<div class="simpleCart_shelfItem">
								<p class="flexisel_ecommerce_cart"><span><?=number_format($san_pham->don_gia_khuyen_mai,0,",",".")." VNĐ"?></span> 
								<i class="item_price"><?=number_format($san_pham->don_gia,0,",",".")." VNĐ"?></i></p>
								<p><a class="item_add" href="chi-tiet-san-pham/<?php echo $s->ma_san_pham ?>">Mua ngay</a></p>
							</div>
						</div>
					</div>
				</li>
				<?php
				}
				?>			
			<?php endforeach ?>		
				
			</ul>
				<script type="text/javascript">
					$(window).load(function() {
						$("#flexiselDemo2").flexisel({
							visibleItems:4,
							animationSpeed: 1000,
							autoPlay: true,
							autoPlaySpeed: 3000,    		
							pauseOnHover: true,
							enableResponsiveBreakpoints: true,
							responsiveBreakpoints: { 
								portrait: { 
									changePoint:480,
									visibleItems: 1
								}, 
								landscape: { 
									changePoint:640,
									visibleItems:2
								},
								tablet: { 
									changePoint:768,
									visibleItems: 3
								}
							}
						});
						
					});
				</script>
				<script type="text/javascript" src="public/js/jquery.flexisel.js"></script>
		</div>
	</div>
	<?php foreach ($san_phams as $s): ?>
		<div class="modal video-modal fade" id="<?=$s->ma_san_pham?>" tabindex="-1" role="dialog" aria-labelledby="<?=$s->ma_san_pham?>">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="modal-body">
						<div class="col-md-5 modal_body_left">
							<img src="public/images/san_pham/<?=$s->hinh?>" alt=" " class="img-responsive" />
						</div>
						<div class="col-md-7 modal_body_right">
							<h4><?=$s->ten_san_pham?></h4>
							<p><?=$s->mo_ta?></p>
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
								<p><span><?=number_format($s->don_gia_khuyen_mai,0,",",".")." VNĐ"?></span> 
								<i class="item_price"><?=number_format($s->don_gia,0,",",".")." VNĐ"?></i></p>
								<p><a class="item_add" href="chi-tiet-san-pham/<?php echo $s->ma_san_pham ?>">Mua ngay</a></p>
							</div>
							<!-- <h5>Color</h5>
							<div class="color-quality">
								<ul>
									<li><a href="#"><span></span>Red</a></li>
									<li><a href="#" class="brown"><span></span>Yellow</a></li>
									<li><a href="#" class="purple"><span></span>Purple</a></li>
									<li><a href="#" class="gray"><span></span>Violet</a></li>
								</ul>
							</div> -->
						</div>
						<div class="clearfix"> </div>
					</div>
				</section>
			</div>
		</div>
	</div>
	<?php endforeach ?>
	