<div class="content-box-header">
  <h3><?php echo $tieude ?> <label id="kqXoa"></label> </h3>
  <div class="clear"></div>
</div>
<!-- End .content-box-header -->
<div class="content-box-content">
  <div class="tab-content default-tab" id="tab1">
    <form method="post">
    <table>
    <caption>
    <p>
    <label>
    Tra cứu : (0: Chưa duyệt - 1: Đã duyệt)
    </label><input type="text" name="tim" class="text-input small-input" value="0" />&nbsp;
    <input class="button" type="submit" value="Tìm " name="btnTim" />
    </p>
    </caption>
      <thead>
        <tr>
        <th><input class="check-all" type="checkbox" /></th>
          <th>Họ Tên</th>
          <th>Email</th>
          <th>Số điện thoại</th>
          <th>Nội dung</th>
          <th>Ngày liên hệ</th>
          <th>Tình trạng</th>
          <th></th>
        </tr>
      </thead>
      <tfoot>
          <tr>
            <td colspan="3">
            <p><input class="button" type="submit" value="Cập nhật" name="btnCapnhat" /></p>
            <div class="clear"></div>
            </td>
            <td colspan="3">
            <div class="pagination"><?php if(isset($lst)) echo $lst; ?></div>
            <div class="clear"></div>
            </td>
          </tr>
        </tfoot>
      <tbody>
        <?php
        foreach ($lien_hes as $lien_he)
		{
		?>	
        <tr>
          <td>
          <input type="checkbox" />
          <input type="hidden" value="<?php echo $lien_he->id ?>" name="id[]" />
          </td>
          <td><?php echo $lien_he->ho_ten ?></td>
          <td><?php echo $lien_he->email ?></td>
          <td><?php echo $lien_he->so_dien_thoai ?></td>
          <td><?php echo $lien_he->noi_dung ?></td>
          <td><?php echo $lien_he->ngay_lien_he ?></td>
          <td><!-- Icons --> 
          <select name="ds[]">
          <option value="0" <?php echo($lien_he->trang_thai==0)?"selected":"" ?>>Chưa duyệt</option>
          <option value="1" <?php echo($lien_he->trang_thai==1)?"selected":"" ?>>Đã duyệt</option>
          </select>  
          </td>
          <td><!-- Icons --> 
            <a href="javaScript:void(0)" title="Delete" onclick="Xoadulieu(<?php echo $lien_he->id ?>,'lien_he','id')"> 
            <img src="public/layout/resources/images/icons/cross.png" alt="Delete" />
            </a>
          </td>
        </tr>
        <?php 
		}
		?>
      </tbody>
    </table>
   </form>
  </div>
  
</div>
