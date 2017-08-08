<!-- single -->
	<div class="single">
		<div class="container">
			<div class="col-md-4 single-left">
				<div class="flexslider">
					<ul class="slides">
					<li data-thumb="public/images/san_pham/<?=$san_pham->hinh?>">
							<div class="thumb-image"> <img src="public/images/san_pham/<?=$san_pham->hinh?>" data-imagezoom="true" class="img-responsive"> </div>
						</li>
					<?php foreach ($hinhs as $hinh): ?>
						<?php
						if($hinh->ma_san_phams==$san_pham->ma_san_pham)
						{
						?>
						<li data-thumb="public/images/san_pham/<?=$hinh->ten_hinh?>">
							<div class="thumb-image"> <img src="public/images/san_pham/<?=$hinh->ten_hinh?>" data-imagezoom="true" class="img-responsive"> </div>
						</li>
						<?php
						}
						?>
					<?php endforeach ?>
						
					</ul>
				</div>
				<!-- flixslider -->
					<script defer src="public/js/jquery.flexslider.js"></script>
					<link rel="stylesheet" href="public/css/flexslider.css" type="text/css" media="screen" />
					<script>
					// Can also be used with $(document).ready()
					$(window).load(function() {
					  $('.flexslider').flexslider({
						animation: "slide",
						controlNav: "thumbnails"
					  });
					});
					</script>
				<!-- flixslider -->
				<!-- zooming-effect -->
					<script src="public/js/imagezoom.js"></script>
				<!-- //zooming-effect -->
			</div>
			<!-- //xu ly gio hang -->
			<form class="form-item">
			<div class="col-md-8 single-right">
				<h3><?=$san_pham->ten_san_pham?></h3>
				<!-- <div class="rating1">
					<span class="starRating">
						<input id="rating5" type="radio" name="rating" value="5">
						<label for="rating5">5</label>
						<input id="rating4" type="radio" name="rating" value="4">
						<label for="rating4">4</label>
						<input id="rating3" type="radio" name="rating" value="3" checked>
						<label for="rating3">3</label>
						<input id="rating2" type="radio" name="rating" value="2">
						<label for="rating2">2</label>
						<input id="rating1" type="radio" name="rating" value="1">
						<label for="rating1">1</label>
					</span>
				</div> -->
					<div class="description">
						<h5><i>Mô tả</i></h5>
						<p><?=$san_pham->mo_ta?></p>
					</div>
					<div class="color-quality">
					<!-- <?php
					if($san_pham->ma_loai == 1)
					{
					?>
						<div class="color-quality-left">
							 <h5>Size</h5>
							<select class="form-control" name="product_size">
							  <option value="34">34</option>
							  <option value="35">35</option>
							  <option value="36">36</option>
							  <option value="37">37</option>
							  <option value="38">38</option>
							  <option value="39">39</option>
							  <option value="40">40</option>
							  <option value="41">41</option>
							  <option value="42">42</option>
							</select>
						</div>
					<?php
					}
					elseif ($san_pham->ma_loai == 2) 
					{
					?>
						<div class="color-quality-left">
							 <h5>Size</h5>
							<select class="form-control" name="product_size">
							  <option value="XS">XS</option>
							  <option value="S">S</option>
							  <option value="M">M</option>
							  <option value="L">L</option>
							  <option value="XL">XL</option>
							  <option value="XXL">XXL</option>
							  <option value="XXXL">XXXL</option>
							  <option value="XXXXL">XXXXL</option>
							</select>
						</div>
					<?php	
					}
					?> -->
						<div class="color-quality-left">
							 <h5>Số lượng:</h5>
							<input type="number" name="product_qty" min="1" value="1" style="width:50px; height: 35px; border-radius: 5px;" />
						</div>
						<!-- <div class="color-quality-right">
							<h5>Số lượng :</h5>
							 <div class="quantity"> 
								<div class="quantity-select">                           
									<div class="entry value-minus1">&nbsp;</div>
									<div class="entry value1"><span>1</span></div>
									<div class="entry value-plus1 active">&nbsp;</div>
								</div>
							</div>
							quantity
									<script>
									$('.value-plus1').on('click', function(){
										var divUpd = $(this).parent().find('.value1'), newVal = parseInt(divUpd.text(), 10)+1;
										divUpd.text(newVal);
									});
						
									$('.value-minus1').on('click', function(){
										var divUpd = $(this).parent().find('.value1'), newVal = parseInt(divUpd.text(), 10)-1;
										if(newVal>=1) divUpd.text(newVal);
									});
									</script>
								quantity
						
						</div> -->
						
						<!-- Số lượng: <input type="number" name="product_qty" min="1" value="1" style="width:30px" /> -->
						<div class="clearfix"> </div>
					</div>
					<!-- <div class="occasional">
						<h5>Occasion :</h5>
						<div class="colr ert">
							<div class="check">
								<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i>Occasion Wear</label>
							</div>
						</div>
						<div class="colr">
							<div class="check">
								<label class="checkbox"><input type="checkbox" name="checkbox"><i> </i>Party Wear</label>
							</div>
						</div>
						<div class="colr">
							<div class="check">
								<label class="checkbox"><input type="checkbox" name="checkbox"><i> </i>Formal Wear</label>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div> -->
					<div class="simpleCart_shelfItem">
							<p><span><?=number_format($san_pham->don_gia_khuyen_mai,0,",",".")." VNĐ"?></span> 
							<i class="item_price"><?=number_format($san_pham->don_gia,0,",",".")." VNĐ"?></i></p>
							<input name="product_code" type="hidden" value="<?php echo $san_pham->ma_san_pham ?>">
							<p><button type="submit">Mua ngay</button></p>
					</div>

			</div>
			</form>
			<!-- //end xu ly gio hang -->
			<div class="clearfix"> </div>
		</div>
	</div>

	<div class="additional_info">
		<div class="container">
			<div class="sap_tabs">	
				<div id="horizontalTab1" style="display: block; width: 100%; margin: 0px;">
					<ul>
						<li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>Thông tin sản phẩm</span></li>
						<li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>Đánh giá</span></li>
					</ul>		
					<div class="tab-1 resp-tab-content additional_info_grid" aria-labelledby="tab_item-0">
						<h3><?=$san_pham->ten_san_pham?></h3>
						<p><?=$san_pham->thong_tin?></p>
					</div>	

					<div class="tab-2 resp-tab-content additional_info_grid" aria-labelledby="tab_item-1">
						<h4><?php echo '('.count($danh_gias).')' ?> Đánh giá</h4>
						<?php
						foreach ($danh_gias as $danh_gia) 
						{
							if ($danh_gia->hien_thi==1) 
							{
								
						?>
						
						<div class="additional_info_sub_grids">
							<!-- <div class="col-xs-2 additional_info_sub_grid_left">
								<img src="public/images/1.png" alt=" " class="img-responsive" />
							</div> -->
							<div class="col-xs-10 additional_info_sub_grid_right">
								<div class="additional_info_sub_grid_rightl">
									<a href="#"><?php echo $danh_gia->ho_ten ?></a>
									<h5><?php echo $danh_gia->ngay_dang ?></h5>
									<p><?php echo $danh_gia->noi_dung?></p>
								</div>
								<!-- <div class="additional_info_sub_grid_rightr">
									<div class="rating">
										<div class="rating-left">
											<img src="public/images/star-.png" alt=" " class="img-responsive">
										</div>
										<div class="rating-left">
											<img src="public/images/star-.png" alt=" " class="img-responsive">
										</div>
										<div class="rating-left">
											<img src="public/images/star-.png" alt=" " class="img-responsive">
										</div>
										<div class="rating-left">
											<img src="public/images/star.png" alt=" " class="img-responsive">
										</div>
										<div class="rating-left">
											<img src="public/images/star.png" alt=" " class="img-responsive">
										</div>
										<div class="clearfix"> </div>
									</div>
								</div> -->
								<div class="clearfix"> </div>
							</div>
							<div class="clearfix"> </div>
						</div>
						<?php
							}
						}
						?>
						<div class="review_grids">
							<h5>Đánh giá</h5>
							<form method="post">
								<input type="text" name="ho_ten" required="" placeholder="Họ & tên">
								<input type="email" name="email" value="Email" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Email';}" required="">
								<textarea name="noi_dung" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Nội dung';}" required="" placeholder="Nội dung..."></textarea>
								<input type="submit" value="Gửi" name="btnGui" >
							</form>
						</div>
					</div> 			        					            	      
				</div>	
			</div>
			<script src="public/js/easyResponsiveTabs.js" type="text/javascript"></script>
			<script type="text/javascript">
				$(document).ready(function () {
					$('#horizontalTab1').easyResponsiveTabs({
						type: 'default', //Types: default, vertical, accordion           
						width: 'auto', //auto or any width like 600px
						fit: true   // 100% fit in a container
					});
				});
			</script>
		</div>
	</div>
	
	
<!-- //single -->