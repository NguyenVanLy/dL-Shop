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
            <input class="text-input medium-input" type="text" id="ten_dang_nhap" name="ten_dang_nhap" value="<?php echo $nguoi_dung->ten_dang_nhap; ?>" />
          </p>
          <p>
            <label>Mật khẩu</label>
            <input class="text-input medium-input" type="text" id="mat_khau" name="mat_khau" value="<?php echo $nguoi_dung->mat_khau; ?>"  />
          <p>
            <label>Họ tên</label>
            <input class="text-input medium-input" type="text" id="ho_ten" name="ho_ten" value="<?php echo $nguoi_dung->ho_ten; ?>" />
          </p>
          <p>
            <label>Ngày sinh</label>
            <input class="text-input medium-input" type="date" id="ngay_sinh" name="ngay_sinh" value="<?php echo $nguoi_dung->ngay_sinh; ?>" />
          <p>
            <label>Giới tính</label>
            <input class="text-input" type="radio" id="gioi_tinh" name="gioi_tinh" value="1" <?php echo ($nguoi_dung->gioi_tinh==1)?"checked":""; ?>/>Nam
			      <input class="text-input" type="radio" id="gioi_tinh" name="gioi_tinh" value="0" <?php echo ($nguoi_dung->gioi_tinh==0)?"checked":""; ?>/>Nữ
		      </p>
          <p>
            <label>Số điện thoại</label>
            <input class="text-input small-input" type="text" id="so_dien_thoai" name="so_dien_thoai" value="<?php echo $nguoi_dung->so_dien_thoai; ?>" />
          </p>
          <p>
            <label>Email</label>
            <input class="text-input small-input" type="text" id="email" name="email" value="<?php echo $nguoi_dung->email; ?>" />
          </p>
          <p>
            <label>Địa chỉ</label>
            <input class="text-input small-input" type="text" id="dia_chi" name="dia_chi" value="<?php echo $nguoi_dung->dia_chi; ?>" />
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
