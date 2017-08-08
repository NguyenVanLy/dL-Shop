<!-- top-brands -->
	<div class="top-brands">
		<div class="container">
			<h3>Thương Hiệu</h3>
			<div class="sliderfig">
				<ul id="flexiselDemo1">			
				<?php foreach ($nha_san_xuats as $nsx): ?>
					<li>
						<img src="public/images/thuong_hieu/<?php echo $nsx->logo_nsx; ?>" alt=" " class="img-responsive" />
					</li>	
				<?php endforeach ?>	
					
				</ul>
			</div>
					<script type="text/javascript">
							$(window).load(function() {
								$("#flexiselDemo1").flexisel({
									visibleItems: 4,
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
<!-- //top-brands -->