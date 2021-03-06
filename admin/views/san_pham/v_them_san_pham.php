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
            <label>Tên sản phẩm</label>
            <input class="text-input medium-input" type="text" id="ten_san_pham" name="ten_san_pham" value="<?php echo $ten_san_pham; ?>" />
            <span style="color: red; font-style: italic;"><?php if(isset($thong_bao['ten_san_pham']))  echo $thong_bao['ten_san_pham']?></span>
          </p>
          <p>
            <label>Nhóm sản phẩm</label>
            <select class="text-input small-input" name="nhom_san_pham">
            <?php
            foreach($nhom_san_phams as $nhom)
            {
            ?>
              <option value="<?php echo $nhom->ma_nhom; ?>"><?php echo $nhom->ten_nhom; ?></option>
            <?php
            }
            ?>
            </select>
            <span style="color: red; font-style: italic;"><?php if(isset($thong_bao['ma_nhom']))  echo $thong_bao['ma_nhom']?></span>

          </p>
          <p>
            <label>Loại sản phẩm</label>
            <select class="text-input small-input" name="loai_san_pham">
            <?php
            foreach($loai_san_phams as $loai)
            {
            ?>
              <option value="<?php echo $loai->ma_loai; ?>"><?php echo $loai->ten_loai; ?></option>
            <?php
            }
            ?>
            </select>
            <span style="color: red; font-style: italic;"><?php if(isset($thong_bao['ma_loai']))  echo $thong_bao['ma_loai']?></span>

          </p>
          <p>
            <label>Nhà sản xuất</label>
            <select class="text-input small-input" name="nha_san_xuat">
            <?php
            foreach($nha_san_xuats as $nsx)
            {
            ?>
              <option value="<?php echo $nsx->ma_nsx; ?>"><?php echo $nsx->ten_nsx; ?></option>
            <?php
            }
            ?>
            </select>
            <span style="color: red; font-style: italic;"><?php if(isset($thong_bao['ma_nsx']))  echo $thong_bao['ma_nsx']?></span>
          </p>
          <p>
            <label>Hình</label>
            <input type="file" name="hinh" id="hinh" />
            <div class="image-holder" id="image-holder"></div>
            <span style="color: red; font-style: italic;"><?php if(isset($thong_bao['hinh']))  echo $thong_bao['hinh']?></span>
          </p>
          <p>
            <label>Đơn giá</label>
            <input class="text-input small-input" type="text" id="don_gia" name="don_gia" value="<?php echo $don_gia; ?>" />
            <span style="color: red; font-style: italic;"><?php if(isset($thong_bao['don_gia']))  echo $thong_bao['don_gia']?></span>
          </p>
          <p>
            <label>Đơn giá khuyến mãi</label>
            <input class="text-input small-input" type="text" id="don_gia_khuyen_mai" name="don_gia_khuyen_mai" value="<?php echo $don_gia_khuyen_mai; ?>" />
          </p>
          <p>
            <label>Khuyến mãi</label>
            <input class="text-input small-input" type="text" id="khuyen_mai" name="khuyen_mai" value="<?php echo $khuyen_mai; ?>" />
          </p>
          <p>
            <label>Sản phẩm tiêu biểu:</label><input type="checkbox" value="1" name="san_pham_tieu_bieu" <?php echo ($san_pham_tieu_bieu==1)?"checked":"" ?> />
          </p>
          <p>
            <label>Thông tin</label>
            <textarea name="thong_tin" cols="50" rows="3" class="text-input textarea wysiwyg " id="medium-input"><?php echo $thong_tin; ?></textarea>
            <span style="color: red; font-style: italic;"><?php if(isset($thong_bao['thong_tin']))  echo $thong_bao['thong_tin']?></span>
          </p>
          <p>
            <label>Mô tả</label>
            <textarea name="mo_ta" cols="50" rows="3" class="text-input textarea wysiwyg " id="medium-input"><?php echo $mo_ta; ?></textarea>
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