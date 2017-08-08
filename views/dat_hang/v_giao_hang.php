
<!-- banner -->
  <div class="banner10" id="home1">
    <div class="container">
      <h2>Dịch Vụ</h2>
    </div>
  </div>
<!-- //banner -->

<!-- breadcrumbs -->
  <div class="breadcrumb_dress">
    <div class="container">
      <ul>
        <li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Đặt hàng</a> <i>/</i></li>
        <li>Dịch Vụ</li>
      </ul>
    </div>
  </div>
<!-- //breadcrumbs -->

<!-- about -->
  <div class="about">
    <div class="container"> 
<h2>Chúng tôi xin cám ơn quí khách đã mua hàng tại website ... </h2>
<p>Nhân viên chúng tôi sẽ giao hàng tại địa chỉ: <?php echo $khach_hang->dia_chi ?></p>
<p>Người nhận hàng Anh/Chị: <?php echo $khach_hang->ten_khach_hang ?></p>
<p>Điện thoại liên hệ: <?php echo $khach_hang->dien_thoai ?></p>
<p>Hình thức thanh toán: <?php echo $hinh_thuc_thanh_toan ?></p>
<p>Tổng tiền thanh toán: <?php echo number_format($tong_tien) ?> đồng</p>
<h3>Đơn hàng của quí khách</h3>
<table width="100%" border="1" cellspacing="2" cellpadding="2" style="border-collapse:collapse">
  <tr>
    <td>Sản phẩm</td>
    <td>&nbsp;</td>
    <td>Số lượng</td>
    <td>Đơn giá</td>
    <td>Thành tiền</td>
  </tr>
  <?php
	foreach($gio_hang as $item)
	{  
		$thanhtien=$item["product_qty"]*$item["product_price"];
  ?>
  <tr>
    <td><?php echo $item["product_name"] ?></td>
    <td><img src="public/images/san_pham/<?php echo $item["product_image"] ?>" width="90" height="90"  /></td>
    <td><?php echo $item["product_qty"] ?></td>
    <td><?php echo number_format($item["product_price"]) ?> đồng</td>
    <td><?php echo number_format($thanhtien) ?> đồng</td>
  </tr>
  <?php
	}
  ?>
</table>
<?php
  echo "<p><a href = '.'><span class='btn glyphicon glyphicon-share-alt'> Quay về trang chủ</span></a></p>";
?>
</div>
</div>