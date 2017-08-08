<?php
@session_start();
include ("models/m_hoa_don.php");
class C_hoa_don
{
	function Hien_thi_hoa_don()
	{
			// Models
			$m_hoa_don=new M_hoa_don();
			$gt = "";
			if(isset($_POST["tim"]))
			{
				$gt=$_POST["tim"];
			}
			if(isset($_POST["btnCapnhat"]))
			{
				// Cập nhật lại tình trạng
				$ds=$_POST["ds"];
				$dsHoa_dons=$_POST["ma_hoa_don"];
				for($i=0;$i<count($dsHoa_dons);$i++)
				{
					$ma_hoa_don=$dsHoa_dons[$i];
					$trang_thai=$ds[$i];
					$m_hoa_don->Cap_nhat_trang_thai($ma_hoa_don,$trang_thai);	
				}
			}
			$hoa_dons=$m_hoa_don->Doc_hoa_don();			
			//Phân trang
			$count=count($hoa_dons);
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
				$hoa_dons = $m_hoa_don->Doc_hoa_don($vt,$limit,$gt);
			}

			// View
			
			$title="Quản lý dL-Shop";
			$tieude="Danh sách Hóa đơn";
			$view="views/hoadon/v_hoadon.php";
			include("include/layout.php");	
	
	}
	public function Hien_thi_chi_tiet_hoa_don()
	{
		// Models
		$ma_hoa_don=$_GET["ma_hoa_don"];
		$m_hoa_don=new M_hoa_don();
		$hoa_don=$m_hoa_don->Doc_hoa_don_theo_ma_hoa_don($ma_hoa_don);
		$chi_tiets=$m_hoa_don->Doc_chi_tiet_hoa_don_theo_ma_hoa_don($ma_hoa_don);
		// View
		$title="Quản lý dL-Shop";
		$tieude="Hóa đơn bán hàng";
		$view="views/hoadon/v_chitiethoadon.php";
		include("include/layout.php");
			
	}
}
?>