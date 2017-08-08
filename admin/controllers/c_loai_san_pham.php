<?php
@session_start();
include_once("models/m_loai_san_pham.php");
class C_loai_san_pham
{
	function Hien_thi_loai_san_pham()
	{
			// Models
			$m_loai_san_pham=new M_loai_san_pham();
			$loai_san_phams=$m_loai_san_pham->Doc_loai_san_pham();

			$gt = "";
			if(isset($_POST["tim"]))
			{
				$gt=$_POST["tim"];
				$loai_san_phams=$m_loai_san_pham->Doc_loai_san_pham($gt);
			}
			//Phân trang
			$count=count($loai_san_phams);
			if($count > 5)
			{
				include("../public/lib/pager.php");
				$pager=new pager();
				$limit=5;
				
				$pages=$pager->findPages($count,$limit);
				$vt=$pager->findStart($limit);
				$curpage=$_GET["page"];
				$lst=$pager->pageList($curpage,$pages);
				$loai_san_phams = $m_loai_san_pham->Doc_loai_san_pham($vt,$limit,$gt);
			}

			// View
			
			$title="Quản lý dL-Shop";
			$tieude="Danh sách loại sản phẩm";
			$view="views/loai_san_pham/v_ds_loai_san_pham.php";
			include("include/layout.php");	
	
	}
	function Them_loai_san_pham()
	{
			$m_loai_san_pham = new M_loai_san_pham();
			// Models
			$thong_bao = array();
			$ten_loai="";
			$ktra=true;
			if(isset($_POST["btnCapnhat"]))
			{
				$ten_loai=$_POST["ten_loai"];
				if(empty($ten_loai))
				{
					$thong_bao['ten_loai'] = "Vui lòng nhập tên loại";
					$ktra=false;
				}
				if($ktra)
				{
					// Ghi dữ liệu database
					$kq=$m_loai_san_pham->Them_loai_san_pham($ten_loai);
					if($kq)
					{
						// Thành công
						echo "<script>alert('Hệ thống cập nhật thành công...');window.location='add'</script>";	
					}
					else
					{
						// Thông báo lỗi	
						echo "<script>alert('Hệ thống cập nhật bị lỗi...')</script>";
					}
				}
			}
			
			// View
			$title="Quản lý dl-Shop";
			$tieude="Thêm loại sản phẩm";
			$view="views/loai_san_pham/v_them_loai_san_pham.php";
			include("include/layout.php");	
	
	}

	function Sua_loai_san_pham()
	{
			$m_loai_san_pham = new M_loai_san_pham();
			$ma_loai = $_GET["ma_loai"];
			$loai_san_pham = $m_loai_san_pham->Doc_loai_san_pham_theo_ma($ma_loai);
			// Models
			$thong_bao = array();
			$ten_loai="";
			$ktra=true;
			if(isset($_POST["btnCapnhat"]))
			{
				$ten_loai=$_POST["ten_loai"];
				if(empty($ten_loai))
				{
					$thong_bao['ten_loai'] = "Vui lòng nhập tên loại";
					$ktra=false;
				}
				if($ktra)
				{
					// Ghi dữ liệu database
					$kq=$m_loai_san_pham->Sua_loai_san_pham($ten_loai,$ma_loai);
					if($kq)
					{
						// Thành công
						echo "<script>alert('Hệ thống cập nhật thành công...');window.location='loai-san-pham'</script>";	
					}
					else
					{
						// Thông báo lỗi	
						echo "<script>alert('Hệ thống cập nhật bị lỗi...')</script>";
					}
				}
			}
			
			// View
			$title="Quản lý dl-Shop";
			$tieude="Sửa loại sản phẩm";
			$view="views/loai_san_pham/v_sua_loai_san_pham.php";
			include("include/layout.php");	
	
	}
}
?>