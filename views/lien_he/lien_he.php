<!-- banner -->
	<div class="banner10" id="home1">
		<div class="container">
			<h2>Liên Hệ</h2>
		</div>
	</div>
<!-- //banner -->

<!-- breadcrumbs -->
	<div class="breadcrumb_dress">
		<div class="container">
			<ul>
				<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Trang Chủ</a> <i>/</i></li>
				<li>Liên Hệ</li>
			</ul>
		</div>
	</div>
<!-- //breadcrumbs -->
<!-- mail -->
	<div class="mail">
		<div class="container">
			<h3>Liên Hệ</h3>
			<div class="agile_mail_grids">
				<div class="col-md-5 contact-left">
					<h4>ĐỊA CHỈ</h4>
					<p>357 Lê Hồng Phong, Phường 10, Quận 10, Hồ Chí Minh, 
						<span>Việt Nam</span></p>
					<ul>
						<li>Dịa chỉ email : <a href="#">ttth@csc.hcmus.edu.vn</a></li>
						<li>Số điện thoại : (08) 38.337.980</li>
					</ul>
				</div>
				<div class="col-md-7 contact-left">
					<h4>LIÊN HỆ QUA HỆ THỐNG WEBSITE</h4>
					<form method="post">
						<input type="text" name="ho_ten" id="ho_ten" value="<?php if(isset($ho_ten)) echo $ho_ten; ?>" required="" placeholder="Họ & Tên">
						<input type="email" name="email" placeholder="Địa chỉ email" value="<?php if(isset($email)) echo $email; ?>" required="">
						<input type="text" name="so_dien_thoai" value="<?php if(isset($so_dien_thoai)) echo $so_dien_thoai; ?>" required="" placeholder="Số điện thoại">
						<textarea name="noi_dung" id="noi_dung" required="" placeholder="Nội dung..."><?php if(isset($noi_dung)) echo $noi_dung; ?></textarea>
						<input type="submit" value="Gửi" name="btnGui">
					</form>
				</div>
				<div class="clearfix"> </div>
			</div>

			<div class="contact-bottom">
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15678.501661602406!2d106.6756428!3d10.763325!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xbb9ce5971b969845!2zxJDDoG8gdOG6oW8gxJDhu5MgaOG7jWEgLSBUcnVuZyBUw6JtIFRpbiBI4buNYyAtIMSQSCBLaG9hIEjhu41jIFThu7EgTmhpw6puIFRQLkhDTQ!5e0!3m2!1sen!2s!4v1477560096865" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
		</div>
	</div>
<!-- //mail -->