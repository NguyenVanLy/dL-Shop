<div class="content-box-header">
  <h3><?php $tieude ?></h3>
  <div class="clear"></div>
</div>
<!-- End .content-box-header -->
<div class="content-box-content">
  <div class="tab-content default-tab" id="tab1">
  
    <form method="post" enctype="multipart/form-data" >
        <fieldset>
          
          <p>
            <label>Tên đăng nhập</label>
            <input class="text-input medium-input" type="text" id="ten_dang_nhap" name="ten_dang_nhap" value="<?php echo $ten_dang_nhap; ?>"  />
            <span style="color: red; font-style: italic;"><?php if(isset($thong_bao['ten_dang_nhap']))  echo $thong_bao['ten_dang_nhap']?></span>
          </p>
          <p>
            <label>Mật khẩu</label>
            <input class="text-input medium-input" type="password" id="mat_khau" name="mat_khau" value="<?php echo $mat_khau; ?>" />
            <span style="color: red; font-style: italic;"><?php if(isset($thong_bao['mat_khau']))  echo $thong_bao['mat_khau']?></span>
          <p>
            <label>Họ tên</label>
            <input class="text-input medium-input" type="text" id="ho_ten" name="ho_ten" value="<?php echo $ho_ten; ?>"/>
            <span style="color: red; font-style: italic;"><?php if(isset($thong_bao['ho_ten']))  echo $thong_bao['ho_ten']?></span>
          </p>
          <p>
            <label>Ngày sinh</label>
            <input class="text-input medium-input" type="date" id="ngay_sinh" name="ngay_sinh" value="<?php echo $ngay_sinh; ?>" />
            <span style="color: red; font-style: italic;"><?php if(isset($thong_bao['ngay_sinh']))  echo $thong_bao['ngay_sinh']?></span>
          <p>
            <label>Giới tính</label>
            <input class="text-input" type="radio" id="gioi_tinh" name="gioi_tinh" value="1" checked="checked" />Nam
			      <input class="text-input" type="radio" id="gioi_tinh" name="gioi_tinh" value="0"/>Nữ
		        
          </p>
          <p>
            <label>Số điện thoại</label>
            <input class="text-input small-input" type="text" id="so_dien_thoai" name="so_dien_thoai" value="<?php echo $so_dien_thoai; ?>" />
            <span style="color: red; font-style: italic;"><?php if(isset($thong_bao['so_dien_thoai']))  echo $thong_bao['so_dien_thoai']?></span>
          </p>
          <p>
            <label>Email</label>
            <input class="text-input small-input" type="email" id="email" name="email" value="<?php echo $email; ?>" />
            <span style="color: red; font-style: italic;"><?php if(isset($thong_bao['email']))  echo $thong_bao['email']?></span>
          </p>
          <p>
            <label>Địa chỉ</label>
            <input class="text-input small-input" type="text" id="dia_chi" name="dia_chi" value="<?php echo $dia_chi; ?>" />
            <span style="color: red; font-style: italic;"><?php if(isset($thong_bao['dia_chi']))  echo $thong_bao['dia_chi']?></span>
          </p>
          <p>
            <input class="button" type="submit" value="Cập nhật" name="btnCapnhat" />
            <input class="button" type="button" value="Bỏ qua" onclick="window.location='nguoi-dung'" />
          </p>
        </fieldset>
        <div class="clear"></div>
        <!-- End .clear -->
        
      </form>
  </div>
  
</div>
