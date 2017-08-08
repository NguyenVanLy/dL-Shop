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
            <label>Tên nhóm sản phẩm</label>
            <input class="text-input medium-input" type="text" id="ten_nhom" name="ten_nhom" value="<?php echo $nhom_san_pham->ten_nhom?>" />
            <span style="color: red; font-style: italic;"><?php if(isset($thong_bao['ten_nhom']))  echo $thong_bao['ten_nhom']?></span>
          </p>
          <p>
            <input class="button" type="submit" value="Cập nhật" name="btnCapnhat" />
            <input class="button" type="button" value="Bỏ qua" onclick="window.location='nhom-san-pham'" />
          </p>
        </fieldset>
        <div class="clear"></div>
        <!-- End .clear -->
        
      </form>
  </div>
  
</div>
