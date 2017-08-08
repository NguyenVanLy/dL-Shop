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
            <label>Tên loại sản phẩm</label>
            <input class="text-input medium-input" type="text" id="ten_loai" name="ten_loai" value="<?php echo $loai_san_pham->ten_loai; ?>" />
            <span style="color: red; font-style: italic;"><?php if(isset($thong_bao['ten_loai']))  echo $thong_bao['ten_loai']?></span>
          </p>
          <p>
            <input class="button" type="submit" value="Cập nhật" name="btnCapnhat" />
            <input class="button" type="button" value="Bỏ qua" onclick="window.location='loai_san_pham.php'" />
          </p>
        </fieldset>
        <div class="clear"></div>
        <!-- End .clear -->
        
      </form>
  </div>
  
</div>
