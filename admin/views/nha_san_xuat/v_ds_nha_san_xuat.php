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
          <th>Tên nhà sản xuất</th>
          <th>Logo</th>
          <th>Website</th>
          <th>&nbsp;</th>
        </tr>
      </thead>
      <tfoot>
          <tr>
            <td colspan="6">
            <div class="pagination"><?php if(isset($lst)) echo $lst; ?></div>
            <div class="clear"></div></td>
          </tr>
        </tfoot>
      <tbody>
        <?php
        foreach ($nha_san_xuats as $nha_san_xuat)
		{
		?>	
        <tr>
          <td><input type="checkbox" /></td>
          <td><?php echo $nha_san_xuat->ten_nsx; ?></td>
          <td><img src="../public/images/thuong_hieu/<?php echo $nha_san_xuat->logo_nsx; ?>" style="width:150px; height:100px; margin:0px 5px;" /></td>
    		  <td><?php echo $nha_san_xuat->website; ?></td>
          <td><!-- Icons --> 
            <a href="sua-nha-san-xuat/<?php echo $nha_san_xuat->ma_nsx ?>" title="Edit" >
            <img src="public/layout/resources/images/icons/pencil.png" alt="Edit" />
            </a> 
            <a href="javaScript:void(0)" title="Delete" onclick="Xoadulieu(<?php echo $nha_san_xuat->ma_nsx ?>,'nha_san_xuat','ma_nsx')"> 
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
