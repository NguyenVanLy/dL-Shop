<?php
@session_start();
include_once("models/m_nhom_san_pham.php");
class C_nhom_san_pham
{
	function Hien_thi_nhom_san_pham()
	{
			// Models
			$m_nhom_san_pham=new M_nhom_san_pham();
			$nhom_san_phams=$m_nhom_san_pham->Doc_nhom_san_pham();

			$gt = "";
			if(isset($_POST["tim"]))
			{
				$gt=$_POST["tim"];
				$nhom_san_phams=$m_nhom_san_pham->Doc_nhom_san_pham($gt);
			}
			//Phân trang
			$count=count($nhom_san_phams);
			if($count > 5)
			{
				include("../public/lib/pager.php");
				$pager=new pager();
				$limit=5;
				
				$pages=$pager->findPages($count,$limit);
				$vt=$pager->findStart($limit);
				$curpage=$_GET["page"];
				$lst=$pager->pageList($curpage,$pages);
				$nhom_san_phams = $m_nhom_san_pham->Doc_nhom_san_pham($vt,$limit,$gt);
			}

			// View
			
			$title="Quản lý dL-Shop";
			$tieude="Danh sách nhóm sản phẩm";
			$view="views/nhom_san_pham/v_ds_nhom_san_pham.php";
			include("include/layout.php");	
	
	}
	function Them_nhom_san_pham()
	{
			$m_nhom_san_pham = new M_nhom_san_pham();
			// Models
			$thong_bao = array();
			$ten_nhom="";
			$ktra=true;
			if(isset($_POST["btnCapnhat"]))
			{
				$ten_nhom=$_POST["ten_nhom"];
				if(empty($ten_nhom))
				{
					$thong_bao['ten_nhom'] = "Vui lòng nhập tên nhóm sản phẩm";
					$ktra=false;
				}
				if($ktra)
				{
					// Ghi dữ liệu database
					$kq=$m_nhom_san_pham->Them_nhom_san_pham($ten_nhom);
					if($kq)
					{
						// Thành công
						echo "<script>alert('Hệ thống cập nhật thành công...');window.location='nhom-san-pham'</script>";	
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
			$tieude="Thêm nhóm sản phẩm";
			$view="views/nhom_san_pham/v_them_nhom_san_pham.php";
			include("include/layout.php");	
	
	}

	function Sua_nhom_san_pham()
	{
			$m_nhom_san_pham = new M_nhom_san_pham();
			$ma_nhom = $_GET["ma_nhom"];
			$nhom_san_pham = $m_nhom_san_pham->Doc_nhom_san_pham_theo_ma($ma_nhom);
			// Models
			$thong_bao = array();
			$ten_nhom="";
			$ktra=true;
			if(isset($_POST["btnCapnhat"]))
			{
				$ten_nhom=$_POST["ten_nhom"];
				if(empty($ten_nhom))
				{
					$thong_bao['ten_nhom'] = "Vui lòng nhập tên nhóm sản phẩm";
					$ktra=false;
				}
				if($ktra)
				{
					// Ghi dữ liệu database
					$kq=$m_nhom_san_pham->Sua_nhom_san_pham($ten_nhom,$ma_nhom);
					if($kq)
					{
						// Thành công
						echo "<script>alert('Hệ thống cập nhật thành công...');window.location='nhom-san-pham'</script>";	
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
			$view="views/nhom_san_pham/v_sua_nhom_san_pham.php";
			include("include/layout.php");	
	
	}
}
?>