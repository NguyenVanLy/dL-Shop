<?php
@session_start();
if(isset($_POST["end"])) // Lưu xuống database
{
	include("controllers/c_dat_hang.php");
	$c_dat_hang=new C_dat_hang();
	$c_dat_hang->Xu_ly_dat_hang();
	die();	
}
if(!isset($_SESSION["ma_khach_hang"])) // Đăng ký hay đăng nhập
{
	include("controllers/c_dat_hang.php");
	$c_dat_hang=new C_dat_hang();
	$c_dat_hang->Hien_thi_dat_hang();
}
else // Xem giỏ hàng
{
	include("controllers/c_gio_hang.php");
	$c_gio_hang=new C_gio_hang();
	$c_gio_hang->Hien_thi_gio_hang();
}

?>