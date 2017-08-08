<div class="content-box-header">
  <h3><?php echo $tieude ?> <label id="kqXoa"></label> </h3>
  <div class="clear"></div>
</div>
<!-- End .content-box-header -->
<div class="content-box-content">
  <div class="tab-content default-tab" id="tab1">
    <table>
    <caption>
    <form method="post">
    <p>
    <label>Nhập:</label> <input type="text" name="tim" class="text-input small-input" />&nbsp;
    <input class="button" type="submit" value="Tìm " name="btnTim" />
    </p>
    </form>
    </caption>
      <thead>
        <tr>
          <th><input class="check-all" type="checkbox" /></th>
          <th>Tên sản phẩm</th>
          <th>Thông tin</th>
          <th>Mô tả</th>
          <th>Hình</th>
          <th>Hình đính kèm</th>
          <th>Đơn giá</th>
          <th>&nbsp;</th>
        </tr>
      </thead>
      <tfoot>
          <tr>
            <td colspan="6">
            <div class="pagination">
            <?php 
              if(isset($lst)) 
              {
                echo $lst;
              }
              else
              {
                echo "";
              }
            ?>
            </div>
            <!-- <div class="div_phan_trang">
            <?php 
              if(isset($lst)) 
              {
                echo $lst;
              }
              else
              {
                echo "";
              }
            ?>
              
            </div> -->
            <div class="clear"></div>
            </td>
          </tr>
        </tfoot>
      <tbody>
        <?php
        foreach ($san_phams as $san_pham)
    		{
    		?>	
        <tr>
          <td><input type="checkbox" /></td>
          <td><?php echo $san_pham->ten_san_pham; ?></td>
          <td><?php echo $san_pham->thong_tin; ?></td>
          <td><?php echo $san_pham->mo_ta; ?></td>
          <td><img src="../public/images/san_pham/<?php echo $san_pham->hinh; ?>" style="width:100px; height:100px; margin:0px 5px;" /></td>
          <td><a href="cap-nhat-hinh/<?php echo $san_pham->ma_san_pham ?>">Cập nhật hình</a></td>
          <td><?php echo number_format($san_pham->don_gia)." đ"; ?></td>
          <td><!-- Icons --> 
            <a href="sua-san-pham/<?php echo $san_pham->ma_san_pham ?>" title="Edit" >
            <img src="public/layout/resources/images/icons/pencil.png" alt="Edit" />
            </a> 
            <a href="javaScript:void(0)" title="Delete" onclick="Xoadulieu(<?php echo $san_pham->ma_san_pham ?>,'san_pham','ma_san_pham')"> 
            <img src="public/layout/resources/images/icons/cross.png" alt="Delete" />
            </a>
          </td>
        </tr>
        <?php 
    		}
    		?>
      </tbody>
    </table>
   
  </div>
  
</div>
