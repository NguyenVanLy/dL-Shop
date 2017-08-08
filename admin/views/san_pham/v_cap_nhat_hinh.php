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
            <label>Chọn hình</label>
            <input type="file" name="files[]" multiple="multiple" accept="image/*" size="50">
            <div class="image-holder" id="image-holder"></div>
          </p>     
          <p>
            <input class="button" type="submit" value="Cập nhật" name="btnCapnhat" />
            <input class="button" type="button" value="Bỏ qua" onclick="window.location='san_pham.php'" />
          </p>
        </fieldset>
        <div class="clear"></div>
        <?php foreach ($hinhs as $hinh): ?>
          <img src="../public/images/san_pham/<?php echo $hinh->ten_hinh;?>" style="width:100px; height:100px; margin:0px 5px;" />
          <a href="javaScript:void(0)" title="Delete" onclick="Xoadulieu(<?php echo $hinh->id ?>,'hinh','id')"> 
            <img src="public/layout/resources/images/icons/cross.png" alt="Delete" />
          </a>
        <?php endforeach ?>
        <!-- End .clear -->
      </form>
  </div>
</div>