<?php
@session_start();
date_default_timezone_set("Asia/Ho_Chi_Minh"); 
?>
<h2>dL-Shop</h2>
			<p id="page-intro" style="font-size:11px">Ngày cập nhật: <?php echo date("D") ." - " .date("d/m/Y h:i:s") ?> </p>
			<ul class="shortcut-buttons-set">
				
				<li><a class="shortcut-button" href="hoa-don"><span>
					<img src="public/layout/resources/images/icons/paper_content_pencil_48.png" alt="icon" /><br />
					Đơn hàng
				</span></a></li>
				
				<li><a class="shortcut-button" href="lien-he"><span>
					<img src="public/layout/resources/images/icons/email.png" alt="icon" /><br />
					Liên hệ
				</span></a></li>
				<li><a class="shortcut-button" href="dang-ki-nhan-tin"><span>
					<img src="public/layout/resources/images/icons/mail.png" alt="icon" /><br />
					Đăng ký nhận tin
				</span></a></li>
				<!--
				<li><a class="shortcut-button" href="#messages"  rel="modal"><span>
					<img src="public/layout/resources/images/icons/clock_48.png" alt="icon" /><br />
					Add an Event
				</span></a></li> -->
				
				<li><a class="shortcut-button" href="danh-gia"><span>
					<img src="public/layout/resources/images/icons/comment_48.png" alt="icon" /><br />
					Đánh giá
				</span></a></li>
				
			</ul><!-- End .shortcut-buttons-set -->
			
			