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
          <th>Tên khách hàng</th>
          <th>Phái</th>
          <th>Email</th>
          <th>Địa chỉ</th>
    		  <th>Điện thoại</th>
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
        foreach ($khach_hangs as $khach_hang)
		{
		?>	
        <tr>
          <td><input type="checkbox" /></td>
          <td><?php echo $khach_hang->ten_khach_hang; ?></td>
          <td><?php echo ($khach_hang->phai==true)?"Nam":"Nữ"; ?></td>
          <td><?php echo $khach_hang->email;?></td>
          <td><?php echo $khach_hang->dia_chi; ?></td>
    		  <td><?php echo $khach_hang->dien_thoai; ?></td>
          <td><!-- Icons --> 
            <a href="sua_khach_hang.php?id=<?php echo $khach_hang->id ?>" title="Edit" >
            <img src="public/layout/resources/images/icons/pencil.png" alt="Edit" />
            </a> 
            <a href="javaScript:void(0)" title="Delete" onclick="Xoadulieu(<?php echo $khach_hang->id ?>,'khach_hang','id')"> 
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
