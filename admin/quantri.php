<?php
ini_set("display_errors",1);
include("controllers/c_nguoi_dung.php");
$c_nguoi_dung=new C_nguoi_dung();
if(isset($_GET["func"]))
{
	$c_nguoi_dung->thoat_dang_nhap();	
}
$c_nguoi_dung->Hien_thi_dang_nhap();
?>