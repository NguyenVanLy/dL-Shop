<?php
/**
* 
*/
class C_trang_chu
{
	
	public function index()
	{
		//Models
		require_once('models/m_trang_chu.php');
		require_once('models/m_san_pham.php');
		require_once('models/m_khach_hang.php');
		$m_san_pham = new M_san_pham();
		$m_trang_chu = new M_trang_chu();
		$san_phams = $m_san_pham->Doc_san_pham();
		$giays = $m_trang_chu->Doc_top_giay();
		$quan_aos = $m_trang_chu->Doc_top_quan_ao();
		$phu_kiens = $m_trang_chu->Doc_top_phu_kien();
		$nha_san_xuats = $m_trang_chu->Doc_nha_san_xuat();
		$hinhs = $m_san_pham->Doc_hinh();
		$thong_bao="";
		$kq="";
		if(isset($_POST["btnDangnhap"]))
		{
			$email=$_POST["dn_email"];
			$mat_khau=$_POST["dn_mat_khau"];	
			$m_khach_hang=new M_khach_hang();
			$kq=$m_khach_hang->Dang_nhap($email,md5($mat_khau));
			if($kq)
			{
				// Lưu session 
				$_SESSION["ma_khach_hang"]=$kq->ma_khach_hang;
				$_SESSION["ten_khach_hang"]=$kq->ten_khach_hang;
				//$thong_bao="Chào ". $kq->ten_khach_hang .",  vui lòng nhấn nút tiếp...";	
			}
			else
			{
				$thong_bao="Tài khoản của bạn không hợp lệ...Xem lại";	
			}	
		}
		if(isset($_POST["btnDangky"]))
		{
			$m_khach_hang=new M_khach_hang();
			
			$ten_khach_hang=$_POST["dk_ten_khach_hang"];
			$mat_khau=$_POST["dk_mat_khau"];
			$phai="";
			$email=$_POST["dk_email"];
			$dia_chi="";
			$dien_thoai="";
			$ghi_chu="";
			// Kiểm tra mail là duy nhất
			$kq=$m_khach_hang->Kiem_tra_email($email);
			if(!$kq)
			{
				$kq=$m_khach_hang->Dang_ky($ten_khach_hang,$mat_khau,$phai,$email,$dia_chi,$dien_thoai,$ghi_chu);
				if($kq)
				{
					/*$thong_bao="Bạn đăng ký thành công. Đăng nhập vào website của chúng tôi để mua hàng";*/
					echo "<script>alert('Bạn đăng ký thành công. Đăng nhập vào website của chúng tôi để mua hàng'</script>";	
				}
				else
				{
					/*$thong_bao="Đã có lỗi xảy ra trong quá trình đăng ký. Bạn hãy làm lại...";*/
					echo "<script>alert('Đã có lỗi xảy ra trong quá trình đăng ký. Bạn hãy làm lại...'</script>";
				}
			}
			else
			{
				/*$thong_bao="Email của bạn đã tồn tại trong hệ thống website của chúng tôi";*/
				echo "<script>alert('Email của bạn đã tồn tại trong hệ thống website của chúng tôi'</script>";	
			}
			
		}
		
		//Views
		$views=array(
			 "views/trang_chu/banner_bottom.php",
			 "views/trang_chu/banner_bottom1.php",
			 /*"views/trang_chu/special_deals.php",*/
			 "views/trang_chu/san_pham_moi.php",
			 "views/trang_chu/thuong_hieu.php"
			 );

		include("includes/trang_chu/layout.php");
	}
	function thoat_dang_nhap()
		{
		session_destroy();	
		}
	
}
?>