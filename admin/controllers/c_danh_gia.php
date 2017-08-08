<?php
@session_start();
include ("models/m_danh_gia.php");
class C_danh_gia
{
	function Hien_thi_danh_gia()
	{
			// Models
			$m_danh_gia=new M_danh_gia();
			$gt = "";
			if(isset($_POST["tim"]))
			{
				$gt=$_POST["tim"];
			}
			if(isset($_POST["btnCapnhat"]))
			{
				// Cập nhật lại tình trạng
				$ds=$_POST["ds"];
				$dsdanh_gias=$_POST["id"];
				for($i=0;$i<count($dsdanh_gias);$i++)
				{
					$id=$dsdanh_gias[$i];
					$hien_thi=$ds[$i];
					$m_danh_gia->Cap_nhat_trang_thai($id,$hien_thi);	
				}
			}
			$danh_gias=$m_danh_gia->Doc_danh_gia();
			//Phân trang
			$count=count($danh_gias);
			if($count > 2)
			{
				include("../public/lib/pager.php");
				$pager=new pager();
				$limit=2;
				
				$pages=$pager->findPages($count,$limit);
				$vt=$pager->findStart($limit);
				$curpage=$_GET["page"];
				$lst=$pager->pageList($curpage,$pages);
				if(isset($_POST["tim"]))
				{
					$gt=$_POST["tim"];
				}
				$danh_gias = $m_danh_gia->Doc_danh_gia($vt,$limit,$gt);
			}			
			// View
			
			$title="Quản lý dL-Shop";
			$tieude="Danh sách Đánh Giá";
			$view="views/danh_gia/v_danh_gia.php";
			include("include/layout.php");	
	
	}
}
?>