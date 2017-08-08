<?php
@session_start();
include_once("models/m_lien_he.php");
class C_lien_he
{

	function Hien_thi_lien_he()
	{
			// Models
			$m_lien_he=new M_lien_he();
			$gt = "";
			if(isset($_POST["btnCapnhat"]))
			{
				// Cập nhật lại tình trạng
				$ds=$_POST["ds"];
				$dslien_hes=$_POST["id"];
				for($i=0;$i<count($dslien_hes);$i++)
				{
					$id=$dslien_hes[$i];
					$trang_thai=$ds[$i];
					$m_lien_he->Cap_nhat_trang_thai($id,$trang_thai);	
				}
			}
			$lien_hes=$m_lien_he->Doc_lien_he();
			//Phân trang
			$count=count($lien_hes);
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
				$lien_hes = $m_lien_he->Doc_lien_he($vt,$limit,$gt);
			}
			
			// View
			
			$title="Quản lý dl-Shop";
			$tieude="Danh sách liên hệ";
			$view="views/lien_he/v_ds_lien_he.php";
			include("include/layout.php");	
	
	}
		
}
?>