<?php
function executeDate($oldDate)
{
    date_default_timezone_set('Asia/Ho_Chi_Minh'); 
    $today = mktime(date('H'), date('i'), date('s'), date("m")  , date("d"), date("Y"));
    $old=strtotime($oldDate);
    $between=$today-$old;
    $result=array();
    $result['days']=$between/(60*60*24);
    $result['typeTime']='';
    
    /*if($result['days']<1)
    {
        $result['days']=$between/(60*60);
        $result['typeTime']='hours';
        if($result['days']<1) 
        {
            $result['days']=$between/(60);
            $result['typeTime']='minutes';
        }
    }*/
    return round($result['days']).' '.$result['typeTime'];
}  
?>
<?php
	if(count($san_phams)>0)
	{
?>
<!-- new-products -->
	<div class="new-products">
		<div class="w3l_related_products">
		<div class="container">
			<h3>Sản phẩm mới</h3>
			<ul id="flexiselDemo2">	
			<?php foreach ($san_phams as $s)	
			{	
			$so_ngay=executeDate($s->ngay_cap_nhat);
			if($so_ngay < 7)
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
							<h5 class="tensanpham"><a href="#"><?= $s->ten_san_pham ?></a></h5>
							<div class="simpleCart_shelfItem">
								<p class="flexisel_ecommerce_cart"><span><?=number_format($s->don_gia_khuyen_mai,0,",",".")." VNĐ"?></span> 
								<i class="item_price"><?=number_format($s->don_gia,0,",",".")." VNĐ"?></i></p>
								<p><a class="item_add" href="chi_tiet_san_pham.php?ma_san_pham=<?php echo $s->ma_san_pham ?>">Mua ngay</a></p>
							</div>
						</div>
					</div>
				</li>
				<?php
				}
				}
				?>		
				
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
	</div>
<!-- //new-products -->
<?php
	}
?>
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
										<div class="rating">
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
										</div>
										<div class="modal_body_right_cart simpleCart_shelfItem">
											<p><span><?php echo number_format($s->don_gia_khuyen_mai,0,",",".")." VNĐ";?></span> 
											<i class="item_price"><?php echo number_format($s->don_gia,0,",",".")." VNĐ";?></i></p>
											<p><a class="item_add" href="#">Mua ngay</a></p>
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
				
				
				
				
