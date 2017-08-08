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
            <label>Mật khẩu mới</label>
            <input class="text-input medium-input" type="password" placeholder="Password" id="password" required name="mat_khau" />
          </p>
          <p>
            <label>Nhập lại mật khẩu</label>
            <input class="text-input medium-input" type="password" placeholder="Confirm Password" id="confirm_password" required name="nhap_lai_mat_khau"/>
          </p>
          <p>
            <input class="button" type="submit" value="Cập nhật" name="btnCapnhat" class="pure-button pure-button-primary"/>
            <input class="button" type="button" value="Bỏ qua" onclick="window.location='nguoi-dung'" />
          </p>
        </fieldset>
        <div class="clear"></div>
        <!-- End .clear -->
        
      </form>
  </div>
  
</div>
<script type="text/javascript">
  var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
</script>