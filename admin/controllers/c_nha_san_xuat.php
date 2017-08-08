<?php
@session_start();
include_once("models/m_nha_san_xuat.php");
class C_nha_san_xuat
{
	function Hien_thi_nha_san_xuat()
	{
			// Models
			$m_nha_san_xuat=new M_nha_san_xuat();
			$nha_san_xuats=$m_nha_san_xuat->Doc_nha_san_xuat();

			$gt = "";
			if(isset($_POST["tim"]))
			{
				$gt=$_POST["tim"];
				$nha_san_xuats=$m_nha_san_xuat->Doc_nha_san_xuat($gt);
			}
			//Phân trang
			$count=count($nha_san_xuats);
			if($count > 5)
			{
				include("../public/lib/pager.php");
				$pager=new pager();
				$limit=5;
				
				$pages=$pager->findPages($count,$limit);
				$vt=$pager->findStart($limit);
				$curpage=$_GET["page"];
				$lst=$pager->pageList($curpage,$pages);
				$nha_san_xuats = $m_nha_san_xuat->Doc_nha_san_xuat($vt,$limit,$gt);
			}

			// View
			
			$title="Quản lý dl-Shop";
			$tieude="Danh sách nhà sản xuất";
			$view="views/nha_san_xuat/v_ds_nha_san_xuat.php";
			include("include/layout.php");	
	
	}
	function Them_nha_san_xuat()
	{
			$m_nha_san_xuat = new M_nha_san_xuat();
			// Models
			if(isset($_POST["btnCapnhat"]))
			{
				$ten_nha_san_xuat=$_POST["ten_nha_san_xuat"];
				$hinh=$_FILES["hinh"]["error"]==0?$_FILES["hinh"]["name"]:"";
				$website=$_POST["website"];
				
				// Ghi dữ liệu database
				$kq=$m_nha_san_xuat->Them_nha_san_xuat($ten_nha_san_xuat, $hinh, $website);
				if($kq)
				{
					// Thành công
					// Di chuyển hình...
					if($_FILES["hinh"]["error"]==0)
					{
						$kq=move_uploaded_file($_FILES["hinh"]["tmp_name"],"../public/images/thuong_hieu/$hinh");
							
					}
					if($kq)
					{
						echo "<script>alert('Hệ thống cập nhật thành công...');window.location='nha-san-xuat'</script>";	
					}
				}
				else
				{
					// Thông báo lỗi	
					echo "<script>alert('Hệ thống cập nhật bị lỗi...')</script>";
				}
			}
			
			// View
			$title="Quản lý dl-Shop";
			$tieude="Thêm nhà sản xuất";
			$view="views/nha_san_xuat/v_them_nha_san_xuat.php";
			include("include/layout.php");	
	
	}

	function Sua_nha_san_xuat()
	{
		// Models
			$m_nha_san_xuat = new M_nha_san_xuat();
			//Đọc sản phẩm theo mã
			$ma_nsx = $_GET["ma_nsx"];
			$nha_san_xuat = $m_nha_san_xuat->Doc_nha_san_xuat_theo_ma($ma_nsx);
			if(isset($_POST["btnCapnhat"]))
			{
				$ten_nha_san_xuat=$_POST["ten_nha_san_xuat"];
				$hinh=$_FILES["hinh"]["error"]==0?$_FILES["hinh"]["name"]:$nha_san_xuat->logo_nsx;
				$website=$_POST["website"];
				// Ghi dữ liệu database
				$kq=$m_nha_san_xuat->Sua_nha_san_xuat($ten_nha_san_xuat, $hinh, $website,$ma_nsx);
				if($kq)
				{
					// Thành công
					// Di chuyển hình...
					if($_FILES["hinh"]["error"]==0)
					{
						$kq=move_uploaded_file($_FILES["hinh"]["tmp_name"],"../public/images/thuong_hieu/$hinh");
							
					}
					if($kq)
					{
						echo "<script>alert('Hệ thống cập nhật thành công...');window.location='nha-san-xuat'</script>";	
					}
				}
				else
				{
					// Thông báo lỗi	
					echo "<script>alert('Hệ thống cập nhật bị lỗi...')</script>";
				}
			}
			
			// View
			$title="Quản lý dL-Shop";
			$tieude="Sửa sản phẩm";
			$view="views/nha_san_xuat/v_sua_nha_san_xuat.php";
			include("include/layout.php");	
	
	}
}
?>