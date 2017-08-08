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
          <th>Tên đăng nhập</th>
          <th>Mật khẩu</th>
          <th>Họ tên</th>
          <th>Ngày sinh</th>
          <th>Giới tính</th>
    		  <th>Email</th>
    		  <th>Địa chỉ</th>
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
        foreach ($nguoi_dungs as $nguoi_dung)
		{
		?>	
        <tr>
          <td><input type="checkbox" /></td>
          <td><?php echo $nguoi_dung->ten_dang_nhap; ?></td>
          <td><a href="doi_mat_khau.php?id=<?php echo $nguoi_dung->id ?>">Đổi mật khẩu</a></td>
          <td><?php echo $nguoi_dung->ho_ten;?></td>
          <td><?php echo $nguoi_dung->ngay_sinh; ?></td>
          <td><?php echo ($nguoi_dung->gioi_tinh==true)?"Nam":"Nữ"; ?></td>
    		  <td><?php echo $nguoi_dung->email; ?></td>
    		  <td><?php echo $nguoi_dung->dia_chi; ?></td>
          <td><!-- Icons --> 
            <a href="sua-nguoi-dung/<?php echo $nguoi_dung->id ?>" title="Edit" >
            <img src="public/layout/resources/images/icons/pencil.png" alt="Edit" />
            </a> 
            <a href="javaScript:void(0)" title="Delete" onclick="Xoadulieu(<?php echo $nguoi_dung->id ?>,'nguoi_dung','id')"> 
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
