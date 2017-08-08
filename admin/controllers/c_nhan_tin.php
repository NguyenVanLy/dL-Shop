<?php
@session_start();
include_once("models/m_nhan_tin.php");
class C_nhan_tin
{

	function Hien_thi_nhan_tin()
	{
			// Models
			$m_nhan_tin=new M_nhan_tin();
			

			$gt = "";
			if(isset($_POST["tim"]))
			{
				$gt=$_POST["tim"];
			}
			$nhan_tins=$m_nhan_tin->Doc_nhan_tin();
			//Phân trang
			$count=count($nhan_tins);
			if($count > 5)
			{
				include("../public/lib/pager.php");
				$pager=new pager();
				$limit=5;
				
				$pages=$pager->findPages($count,$limit);
				$vt=$pager->findStart($limit);
				$curpage=$_GET["page"];
				$lst=$pager->pageList($curpage,$pages);
				if(isset($_POST["tim"]))
				{
					$gt=$_POST["tim"];
				}
				$nhan_tins = $m_nhan_tin->Doc_nhan_tin($vt,$limit,$gt);
			}

			// View
			
			$title="Quản lý dL-Shop";
			$tieude="Danh sách đăng kí nhận tin";
			$view="views/nhan_tin/v_ds_nhan_tin.php";
			include("include/layout.php");	
	
	}
		
}
?>