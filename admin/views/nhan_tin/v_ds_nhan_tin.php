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
    </label><input type="text" name="tim" class="text-input small-input"/>&nbsp;
    <input class="button" type="submit" value="Tìm " name="btnTim" />
    </p>
    </caption>
      <thead>
        <tr>
        <th><input class="check-all" type="checkbox" /></th>
          <th>Email</th>
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
        foreach ($nhan_tins as $nhan_tin)
		{
		?>	
        <tr>
          <td>
          <input type="checkbox" />
          <input type="hidden" value="<?php echo $lien_he->id ?>" name="id[]" />
          </td>
          <td><?php echo $nhan_tin->email ?></td>
          <td><!-- Icons -->  
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
