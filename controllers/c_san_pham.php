<?php
/**
* 
*/
class C_san_pham
{
	
	public function Doc_san_pham()
	{
		//Models
		require_once('models/m_san_pham.php');
		$m_san_pham = new m_san_pham();
		$ma_nhom = 0;
		$ma_loai = 0;
		$ma_nsx=0;
		if(isset($_GET["ma_nhom"]))
		{
			$ma_nhom = $_GET["ma_nhom"];
		}
		if(isset($_GET["ma_loai"]))
		{
			$ma_loai = $_GET["ma_loai"];
		}
		if(isset($_GET["ma_nsx"]))
		{
			$ma_nsx = $_GET["ma_nsx"];
		}
		$gt_tim="";
		if(isset($_POST["tim"]))
		{
			$gt_tim = $_POST["tim"];
		}
		
		$san_phams = $m_san_pham->Doc_san_pham($ma_nhom,$ma_loai,$ma_nsx,$gt_tim);
		//đọc sản phẩm cùng loại
		$count=count($san_phams);
		if($count > 9)
		{
			include("public/lib/pager.php");
			$pager=new pager();
			$limit=9;
			
			$pages=$pager->findPages($count,$limit);
			$vt=$pager->findStart($limit);
			$curpage=$_GET["page"];
			$lst=$pager->pageList($curpage,$pages);
			$san_phams = $m_san_pham->Doc_san_pham($ma_nhom,$ma_loai,$ma_nsx,$vt,$limit,$gt_tim);
		}
		
		//Đọc hình
		$hinhs = $m_san_pham->Doc_hinh();
		//Views

		$views=array(
			//"views/san_pham/san_pham_cung_loai.php"
			);
		include("includes/san_pham/layout.php");

	}

	public function chi_tiet_san_pham()
	{
		// Models
		$ma_san_pham = $_GET["ma_san_pham"];
		include("models/m_san_pham.php");
		$m_san_pham=new m_san_pham();
		$san_pham = $m_san_pham->Doc_san_pham_theo_ma_san_pham($ma_san_pham);
		$ma_loai = $san_pham->ma_loai;
		//Đọc hình
		$hinhs = $m_san_pham->Doc_hinh();
		$san_phams = $m_san_pham->Doc_san_pham_cung_loai($ma_loai,$ma_san_pham);
		//Đánh giá
		$ma_san_pham = $_GET["ma_san_pham"];
		$danh_gias = $m_san_pham->Danh_gia($ma_san_pham);
		//Thêm đánh giá
		if(isset($_POST["btnGui"]))
			{
				$ho_ten=$_POST["ho_ten"];
				$email=$_POST["email"];
				$noi_dung=$_POST["noi_dung"];
				$ngay_dang = date("Y-m-d H:i:s");
				// Ghi dữ liệu database
				$kq=$m_san_pham->Them_danh_gia($ma_san_pham,$ho_ten,$email,$noi_dung,$ngay_dang);
				if($kq)
				{
					// Thành công
					$ho_ten=NULL;
					$email=NULL;
					$noi_dung=NULL;
					$ngay_dang = NULL;
					echo "<script>alert('Hệ thống cập nhật thành công, chờ kiểm duyệt nội dung...');window.location='chi_tiet_san_pham.php?	ma_san_pham=$ma_san_pham'</script>";
												
				}
				else
				{
					// Thông báo lỗi	
					echo "<script>alert('Hệ thống cập nhật bị lỗi...')</script>";
				}
			}
		//View
		$views=array(
			 "views/san_pham/chi_tiet_san_pham.php",
			 "views/san_pham/san_pham_cung_loai.php"
			 );

		include("includes/chi_tiet_san_pham/layout.php");
	}


}
?>