<?php
include ('controllers/c_trang_chu.php');
$c_trang_chu = new c_trang_chu();

$c_trang_chu->index();
if(isset($_GET["func"])==1)
{
	$c_trang_chu->thoat_dang_nhap();	
}
?>