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
            <input class="text-input medium-input" type="text" id="ten_nha_san_xuat" name="ten_nha_san_xuat" />
          </p>
          <p>
            <label>Hình</label>
            <input type="file" name="hinh" id="hinh" />
            <div class="image-holder" id="image-holder"></div>
          </p>
          <p>
            <label>Website</label>
            <input class="text-input medium-input" type="text" id="website" name="website" />
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