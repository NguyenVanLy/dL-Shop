<?php
function executeDate($oldDate)
{
    date_default_timezone_set('Asia/Ho_Chi_Minh'); //Change your timezone. To find your timezone here:http://php.net/manual/en/timezones.php
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
<!-- 			
		<div class="col-md-6 w3ls_dresses_grid_right_left">
			<div class="w3ls_dresses_grid_right_grid1">
				<img src="public/images/banner/nike-adidas.jpg" alt=" " class="img-responsive" />
				<div class="w3ls_dresses_grid_right_grid1_pos1">
					<h3>Cosmetics <span>Up To</span> 10% Discount</h3>
				</div>
			</div>
		</div>
		<div class="col-md-6 w3ls_dresses_grid_right_left">
			<div class="w3ls_dresses_grid_right_grid1">
				<img src="public/images/banner/nike-banner.jpg" alt=" " class="img-responsive" />
				<div class="w3ls_dresses_grid_right_grid1_pos">
					<h3>Cosmetics <span>Makeup</span> Brush</h3>
				</div>
			</div>
		</div>
		<div class="clearfix"> </div> -->

					<div class="w3ls_dresses_grid_right_grid2">
						<div class="w3ls_dresses_grid_right_grid2_left">
							<h3>Hiển thị kết quả: 0-1</h3>
						</div>
						<div class="w3ls_dresses_grid_right_grid2_right">
							<select name="select_item" class="select_item">
								<option selected="selected">Sắp xếp theo</option>
								<option>Sản phẩm mới</option>
								<option>Giá: Cao đến thấp</option>
								<option>Giá: Thấp đến cao</option>
								<option>Tên sản phẩm[A->Z]</option>
								<option>Tên sản phẩm[Z->A]</option>
							</select>
						</div>
						<div class="clearfix"> </div>
					</div>
					

					<div class="w3ls_dresses_grid_right_grid3">
					<?php
						$dem = count($san_phams);
						if ($dem<=0) 
						{
							echo "<h1>Sản phẩm đang cập nhật...</h1>";	
						}
					?>
						<?php
						foreach($san_phams as $san_pham)
						{
						?>	
						<div class="col-md-4 agileinfo_new_products_grid agileinfo_new_products_grid_dresses">
							<div class="agile_ecommerce_tab_left dresses_grid">
								<div class="hs-wrapper hs-wrapper2">
								<img src="public/images/san_pham/<?= $san_pham->hinh ?>" alt=" " class="img-responsive" />
									<?php
										foreach($hinhs as $h)
										if($h->ma_san_phams == $san_pham->ma_san_pham)
										{
									?>
										<img src="public/images/san_pham/<?= $h->ten_hinh ?>" alt=" " class="img-responsive" />
									<?php
										}
									?>
									<div class="w3_hs_bottom w3_hs_bottom_sub1">
										<ul>
											<li>
												<a href="#" data-toggle="modal" data-target="#<?=$san_pham->ma_san_pham?>"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
											</li>
										</ul>
									</div>
								</div>
								<h5 class="tensanpham" ><a href="chi-tiet-san-pham/<?php echo $san_pham->ma_san_pham ?>"><?=$san_pham->ten_san_pham?></a></h5>
								<div class="simpleCart_shelfItem">
									<p>
										<?php
										if($san_pham->don_gia_khuyen_mai > 0)
										{
										?>
											<span><?=number_format($san_pham->don_gia_khuyen_mai,0,",",".") ." VNĐ"?></span>
										<?php
										}	
										?>
										<i class="item_price"><?=number_format($san_pham->don_gia,0,",",".") ." VNĐ"?></i>
									</p>
									<p><a class="item_add" href="chi-tiet-san-pham/<?php echo $san_pham->ma_san_pham ?>">Mua Ngay</a></p>
								</div>
								<?php

								$so_ngay=executeDate($san_pham->ngay_cap_nhat);
								if($so_ngay < 7)
								{
								?>
								<div class="dresses_grid_pos">
									<h6>Mới</h6>
								</div>
								<?php
								}
								?>
								
							</div>
						</div>
						<?php
						}
						?>
						<div class="clearfix"> </div>
					</div>
					
    				<div class="div_phan_trang">
    				<?php 
    					if(isset($lst)) 
    					{
 	   						echo $lst;
    					}
    					else
    					{
    						echo "";
    					}
    				?>
    					
    				</div>
					 
											
											
<?php foreach ($san_phams as $san_pham): ?>				
<div class="modal video-modal fade" id="<?=$san_pham->ma_san_pham?>" tabindex="-1" role="dialog" aria-labelledby="<?=$san_pham->ma_san_pham?>">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
					</div>
					<section>
						<div class="modal-body">
							<div class="col-md-5 modal_body_left">
								<img src="public/images/san_pham/<?=$san_pham->hinh?>" alt=" " class="img-responsive" />
							</div>
							<div class="col-md-7 modal_body_right">
								<h4><?=$san_pham->ten_san_pham?></h4>
								<p><?=$san_pham->mo_ta?></p>
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
									<p><span><?=number_format($san_pham->don_gia_khuyen_mai,0,",",".")." VNĐ"?></span> 
									<i class="item_price"><?=number_format($san_pham->don_gia,0,",",".")." VNĐ"?></i></p>
									<p><a class="item_add" href="#">Mua Ngay</a></p>
								</div>
								<!--<h5>Màu</h5>
								<div class="color-quality">
									<ul>
										<li><a href="#"><span></span>Đỏ</a></li>
										<li><a href="#" class="brown"><span></span>Xanh</a></li>
										<li><a href="#" class="purple"><span></span>Tím</a></li>
										<li><a href="#" class="gray"><span></span>Hồng</a></li>
									</ul>
								</div>-->
							</div>
							<div class="clearfix"> </div>
						</div>
					</section>
				</div>
			</div>
	</div>			
								
<?php endforeach ?>

