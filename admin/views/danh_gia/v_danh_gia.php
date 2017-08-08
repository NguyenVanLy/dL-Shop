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
          <th>Sản Phẩm</th>
          <th>Nội dung</th>
          <th>Ngày đánh giá</th>
          <th>Tình trạng</th>
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
        foreach ($danh_gias as $danh_gia)
		{
		?>	
        <tr>
          <td>
          <input type="checkbox" />
          <!-- <?php echo $danh_gia->id; ?> -->
          <!-- <a href="chitiethoadon.php?ma_hoa_don=<?php echo $hd->ma_hoa_don ?>" title="Xem chi tiết hóa đơn">
                      <img src="public/layout/resources/images/icons/pencil.png" alt="Edit" />
          </a> -->
          <input type="hidden" value="<?php echo $danh_gia->id ?>" name="id[]" />
          </td>
          <td><?php echo $danh_gia->ho_ten ?></td>
          <td><?php echo $danh_gia->email ?></td>
          <td><?php echo $danh_gia->ten_san_pham ?></td>
          <td><?php echo $danh_gia->noi_dung ?></td>
          <td><?php echo date("d/m/Y",strtotime($danh_gia->ngay_dang)) ?></td>
          <td><!-- Icons --> 
          <select name="ds[]">
          <option value="0" <?php echo($danh_gia->hien_thi==0)?"selected":"" ?>>Chưa duyệt</option>
          <option value="1" <?php echo($danh_gia->hien_thi==1)?"selected":"" ?>>Đã duyệt</option>
          </select>  
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
