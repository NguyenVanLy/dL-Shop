<script>
$(function() {
     var pgurl = window.location.href.substr(window.location.href.lastIndexOf("/")+1);
	 var id=null;
	 if (pgurl=="") pgurl="." ;
     $("#main-nav li a").each(function(){
          if($(this).attr("href") == pgurl || $(this).attr("href") == '' )
		  {
			var title = $(this).attr("title");
			id=document.getElementById(title);
			$(this).addClass("current");
			$(id).addClass("current");	
		  }
		  
     })
		
	$(id).click();
	
});

</script> 
<ul id="main-nav">
  <!-- Accordion Menu -->
  
  <li> 
  <a href="quan-tri" class="nav-top-item no-submenu"> 
  <!-- Add the class "no-submenu" to menu items with no sub menu  -->
  Home 
  </a> 
  </li>
  <?php
if($_SESSION["quyen"]==1)
{
  ?>
  <li> <a href="#" class="nav-top-item" id="user"> Người dùng </a>
    <ul>
      <li><a href="nguoi-dung" title="user">Danh sách người dùng</a></li>
      <li><a href="them-nguoi-dung" title="user">Thêm người dùng</a></li>
    </ul>
  </li>
  <?php
}
  ?>
  <li> <a href="#" class="nav-top-item" id="khach_hang"> Khách hàng </a>
    <ul>
      <li><a href="khach-hang" title="khach_hang">Danh sách khách hàng</a></li>
    </ul>
  </li>
  <li> <a href="#" class="nav-top-item" id="san_pham"> Sản phẩm </a>
    <ul>
      <li><a href="san-pham" title="san_pham">Danh sách sản phẩm</a></li>
      <li><a href="them_san_pham.php" title="san_pham">Thêm sản phẩm</a></li>
    </ul>
  </li>
  <li> <a href="#" class="nav-top-item" id="hoa_don"> Hóa đơn </a>
    <ul>
      <li><a href="hoa-don" title="hoa_don">Danh sách hóa đơn</a></li>
      <!-- <li><a href="them_san_pham.php" title="san_pham">Thêm sản phẩm</a></li> -->
    </ul>
  </li>
  <li> <a href="#" class="nav-top-item" id="nha_san_xuat"> Nhà sản xuất </a>
    <ul>
      <li><a href="nha-san-xuat" title="nha_san_xuat">Danh sách nhà sản xuẩt</a></li>
      <li><a href="them_nha_san_xuat.php" title="nha_san_xuat">Thêm nhà sản xuất</a></li>
    </ul>
  </li>
   <li> <a href="#" class="nav-top-item" id="loai_san_pham"> Loại sản phẩm </a>
    <ul>
      <li><a href="loai-san-pham" title="loai_san_pham">Danh sách loại sản phẩm</a></li>
      <li><a href="them_loai_san_pham.php" title="loai_san_pham">Thêm loại sản phẩm</a></li>
    </ul>
  </li>
   <li> <a href="#" class="nav-top-item" id="nhom_san_pham"> Nhóm sản phẩm </a>
    <ul>
      <li><a href="nhom-san-pham" title="nhom_san_pham">Danh sách nhóm sản phẩm</a></li>
      <li><a href="them_nhom_san_pham.php" title="nhom_san_pham">Thêm nhóm sản phẩm</a></li>
    </ul>
  </li>
</ul>
<!-- End #main-nav -->