<?php
@session_start();
include_once("models/m_khach_hang.php");
class C_khach_hang
{
	function Hien_thi_khach_hang()
	{
			// Models
			$m_khach_hang=new M_khach_hang();
			$khach_hangs=$m_khach_hang->Doc_khach_hang();

			$gt = "";
			if(isset($_POST["tim"]))
			{
				$gt=$_POST["tim"];
				$khach_hangs=$m_khach_hang->Doc_khach_hang($gt);
			}
			//Phân trang
			$count=count($khach_hangs);
			if($count > 5)
			{
				include("../public/lib/pager.php");
				$pager=new pager();
				$limit=5;
				
				$pages=$pager->findPages($count,$limit);
				$vt=$pager->findStart($limit);
				$curpage=$_GET["page"];
				$lst=$pager->pageList($curpage,$pages);
				$khach_hangs = $m_khach_hang->Doc_khach_hang($vt,$limit,$gt);
			}

			// View
			
			$title="Quản lý dl-Shop";
			$tieude="Danh sách khách hàng";
			$view="views/khach_hang/v_ds_khach_hang.php";
			include("include/layout.php");	
	
	}
}
?>