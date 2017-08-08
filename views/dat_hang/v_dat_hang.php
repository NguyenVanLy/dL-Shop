
<!-- banner -->
  <div class="banner10" id="home1">
    <div class="container">
      <h2>Đăng ký</h2>
    </div>
  </div>
<!-- //banner -->

<!-- breadcrumbs -->
  <div class="breadcrumb_dress">
    <div class="container">
      <ul>
        <li><a href="."><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Đặt hàng</a> <i>/</i></li>
        <li>Đăng ký</li>
      </ul>
    </div>
  </div>
<!-- //breadcrumbs -->

<!-- about -->
  <div class="about">
    <div class="container"> 
      <div class="w3ls_about_grids">
        <div class="col-md-6 w3ls_about_grid_left contact-left">
        <form method="post" name="frmDn">
        <fieldset>
        <legend><h3>Đăng nhập</h3></legend>
        <table width="100%" border="0" cellspacing="2" cellpadding="2">
          <tr>
            <!-- <td width="30%">Email</td> -->
            <td><input type="email" required="required" placeholder="Nhập Email của bạn"  style="width:300px" name="dn_email" /></td>
          </tr>
          <tr>
            <!-- <td width="30%">Mật khẩu</td> -->
            <td><input type="password" required="required" placeholder="Nhập mật khẩu của bạn"  style="width:300px" name="dn_mat_khau" /></td>
            
          </tr>
          <!-- <tr>
            <td>Mật khẩu</td>
            <td>
            <input type="password" required="required" placeholder="Nhập mật khẩu của bạn" style="width:300px" name="dn_mat_khau" />
            <button type="submit" name="btnDangnhap">Đăng nhập</button>
            </td>
          </tr> -->

        </table>
        <!-- <button type="submit" name="btnDangnhap">Đăng nhập</button> -->
        <input type="submit" value="Đăng nhập" name="btnDangnhap" >
        </fieldset>
      </form>  
          <div class="clearfix"> </div>
        </div>
        <div class="col-md-6 w3ls_about_grid_right contact-left">
          <?php
          if(!isset($_SESSION["ma_khach_hang"]))
          {
          ?>
          <form method="post" name="frmDk">
          <fieldset>
          <legend><img src="public/images/dang_ky.png"></legend>
          <table width="100%" border="0" cellspacing="2" cellpadding="2" >
            <tr>
              <!-- <td width="30%">Họ tên</td> -->
              <td>
                <input type="text" required="required" placeholder="Nhập họ tên của bạn"  style="width:300px" name="dk_ten_khach_hang" />
              </td>
            </tr>
            <tr>
              <!-- <td width="30%">Giới tính</td> -->
              <td>
                  <input type="radio" value="1" name="dk_phai" checked="checked" />Nam &nbsp; 
                  <input type="radio" value="0" name="dk_phai" />Nữ
              </td>
            </tr>
            <tr>
              <!--<td width="30%">Email</td> -->
              <td>
              <input type="email" required="required" placeholder="Nhập email của bạn"  style="width:300px" name="dk_email" />
              </td>
            </tr>
            <tr>
              <!-- <td>Mật khẩu</td> -->
              <td>
              <input type="password" required="required" placeholder="Nhập mật khẩu của bạn" style="width:300px" name="dk_mat_khau" />
              </td>
            </tr>
            <tr>
              <!-- <td>Xác nhận lại mật khẩu</td> -->
              <td>
              <input type="password" required="required" placeholder="Nhập lại mật khẩu của bạn" style="width:300px" name="dk_mat_khau_xac_nhan" />
              </td>
            </tr>
            <tr>
              <!-- <td>Địa chỉ</td> -->
              <td><input type="text" required="required" placeholder="Nhập địa chỉ của bạn"  style="width:300px" name="dk_dia_chi" /></td>
            </tr>
            <tr>
              <!-- <td>Điện thoại</td> -->
              <td><input type="text" required="required" placeholder="Nhập số địa thoại của bạn"  style="width:300px" name="dk_dien_thoai" /></td>
            </tr>
           <tr>
              <!-- <td>Ghi chú</td> -->
              <td>
              <textarea name="dk_ghi_chu" cols="50" rows="5"  style="width:300px" placeholder="Ghi chú..."></textarea>&nbsp;
              
              </td>   
           </tr>
          </table>
          <!-- <button type="submit" name="btnDangky">Đăng ký</button> -->
          <input type="submit" value="Đăng ký" name="btnDangky" >
          </fieldset>
          </form>
          <?php
          }
          ?>
        </div>
        <div class="clearfix"> </div>
        <div class="col-md-6 contact-left">
   
          <p><?php echo $thong_bao ?></p>
          <hr />
          <input type="submit" align="left" onclick="window.location='san-pham'" name="" value="Tiếp Tục Mua Hàng">
          
          
        </div>
        <div class="col-md-6 contact-left">
   
         <?php if(isset($_SESSION["ma_khach_hang"])){ ?>
          <div align="right"><input type="submit" onclick="window.location='gio-hang'" name="" value="Tiếp"></div>
          <?php }?>
          
          
        </div>
          
      </div>
    </div>
  </div>
<!-- //about -->
