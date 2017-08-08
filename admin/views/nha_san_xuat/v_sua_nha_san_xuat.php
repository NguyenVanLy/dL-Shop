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
            <label>Tên nhà sản xuẩt</label>
            <input class="text-input medium-input" type="text" id="ten_nha_san_xuat" name="ten_nha_san_xuat" value="<?php echo $nha_san_xuat->ten_nsx; ?>" />
          </p>
           <p>
            <label>Logo nhà sản xuất</label>
            <input type="file" name="hinh" id="hinh" />
            <div class="image-holder" id="image-holder"><img src="../public/images/thuong_hieu/<?php echo $nha_san_xuat->logo_nsx ?>" width="150px" /></div>
          </p>
          <p>
            <label>Website</label>
            <input class="text-input medium-input" type="text" id="website" name="website" value="<?php echo $nha_san_xuat->website; ?>" />
          </p>
          <p>
            <input class="button" type="submit" value="Cập nhật" name="btnCapnhat" />
            <input class="button" type="button" value="Bỏ qua" onclick="window.location='nha-san-xuat'" />
          </p>
        </fieldset>
        <div class="clear"></div>
        <!-- End .clear -->
        
      </form>
  </div>
  
</div>
<!-- <?php
echo "<pre>";
print_r($nhom_san_phams);
echo "</pre>";
?> -->