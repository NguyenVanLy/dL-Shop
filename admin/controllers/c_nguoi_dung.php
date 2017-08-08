<?php
@session_start();
include_once("models/m_nguoi_dung.php");
class C_nguoi_dung
{
	function Hien_thi_dang_nhap()
	{
		
		if(isset($_POST["login"]))
		{
			$ten=$_POST["ten_dang_nhap"];
			$mk=$_POST["mat_khau"];
			$this->luu_dang_nhap($ten,$mk);

		}
		if(isset($_SESSION["ho_ten"]))
		{
			$title="Quản lý dL-Shop";
			include("include/layout.php");	
		}
		else
		{
			$_SESSION['error']="Thông tin đăng nhập không hợp lệ";
			header("location:login.php");	
		}
	}
	function thoat_dang_nhap()
	{
		session_destroy();
		header("location:login.php");	
	}
	function luu_dang_nhap($ten,$mk)
	{
		$m_nguoi_dung=new M_nguoi_dung();
		$nguoi_dung=$m_nguoi_dung->Doc_nguoi_dung_theo_ten_mk($ten,$mk);
		$_SESSION['ho_ten']=$nguoi_dung->ho_ten;
		$_SESSION['quyen']=$nguoi_dung->quyen;
	}

	function Hien_thi_nguoi_dung()
	{
			if ($_SESSION["quyen"]==0)
			{
				header("location:quan-tri");
			}
			// Models
			$m_nguoi_dung=new M_nguoi_dung();
			$nguoi_dungs=$m_nguoi_dung->Doc_nguoi_dung();

			$gt = "";
			if(isset($_POST["tim"]))
			{
				$gt=$_POST["tim"];
				$nguoi_dungs=$m_nguoi_dung->Doc_nguoi_dung($gt);
			}
			//Phân trang
			$count=count($nguoi_dungs);
			if($count > 5)
			{
				include("../public/lib/pager.php");
				$pager=new pager();
				$limit=5;
				
				$pages=$pager->findPages($count,$limit);
				$vt=$pager->findStart($limit);
				$curpage=$_GET["page"];
				$lst=$pager->pageList($curpage,$pages);
				$nguoi_dungs = $m_nguoi_dung->Doc_nguoi_dung($vt,$limit,$gt);
			}

			// View
			
			$title="Quản lý dl-Shop";
			$tieude="Danh sách người dùng";
			$view="views/nguoi_dung/v_ds_nguoi_dung.php";
			include("include/layout.php");	
	
	}
	function Them_nguoi_dung()
	{
			if ($_SESSION["quyen"]==0)
			{
				header("location:quan-tri");
			}
			$ten_dang_nhap=$mat_khau=$ho_ten=$ngay_sinh=$gioi_tinh=$so_dien_thoai=$email=$dia_chi="";
			$thong_bao = array();
			$ktra = true;
			// Models
			if(isset($_POST["btnCapnhat"]))
			{
				$ten_dang_nhap=$_POST["ten_dang_nhap"];
				$mat_khau=$_POST["mat_khau"];
				$ho_ten=$_POST["ho_ten"];
				$ngay_sinh=$_POST["ngay_sinh"];
				$gioi_tinh=$_POST["gioi_tinh"];
				$so_dien_thoai=$_POST["so_dien_thoai"];
				$email=$_POST["email"];
				$dia_chi=$_POST["dia_chi"];
				
				//Kiểm tra
				if(empty($ten_dang_nhap))
				{
					$thong_bao['ten_dang_nhap'] = "Vui lòng nhập tên đăng nhập";
					$ktra = false;
				}
				elseif (empty($mat_khau)) 
				{
					$thong_bao['mat_khau'] = "Vui lòng nhập mật khẩu";
					$ktra = false;	
				}
				elseif (empty($ho_ten)) 
				{
					$thong_bao['ho_ten'] = "Vui lòng nhập họ tên";
					$ktra = false;
				}
				elseif (empty($ngay_sinh)) 
				{
					$thong_bao['ngay_sinh'] = "Vui lòng nhập ngày sinh";
					$ktra = false;
				}
				elseif (empty($so_dien_thoai)) 
				{
					$thong_bao['so_dien_thoai'] = "Vui lòng nhập số điện thoại";
					$ktra = false;
				}
				elseif(!is_numeric($so_dien_thoai))
				{
					$thong_bao['so_dien_thoai'] = "Vui lòng nhập số điện thoại là số";
					$ktra = false;
				}
				elseif (empty($email)) 
				{
					$thong_bao['email'] = "Vui lòng nhập email";
					$ktra = false;
				}
				elseif (empty($dia_chi)) 
				{
					$thong_bao['dia_chi'] = "Vui lòng nhập địa chỉ";
					$ktra = false;
				}
				//end kiểm tra
				// Ghi dữ liệu database
				if($ktra)
				{
					$m_nguoi_dung=new M_nguoi_dung();
					$kq=$m_nguoi_dung->Kiem_tra_tai_khoan($ten_dang_nhap);
					if(!$kq)
					{
						$kq=$m_nguoi_dung->Them_nguoi_dung($ten_dang_nhap, md5($mat_khau), $ho_ten, $ngay_sinh, $gioi_tinh,$so_dien_thoai,$email,$dia_chi);
						if($kq)
						{
							// Thành công
							echo "<script>alert('Hệ thống cập nhật thành công...');window.location='nguoi-dung'</script>";						
						}
						else
						{
							// Thông báo lỗi	
							echo "<script>alert('Hệ thống cập nhật bị lỗi...')</script>";
						}
					}
					else
					{
						$thong_bao['ten_dang_nhap'] = "Tên đăng nhập đã tồn tại trong website";	
					}
				}
			}
			
			// View
			$title="Quản lý dL-Shop";
			$tieude="Thêm người dùng";
			$view="views/nguoi_dung/v_them_nguoi_dung.php";
			include("include/layout.php");	
	
	}
	function Sua_nguoi_dung()
	{
			if ($_SESSION["quyen"]==0)
			{
				header("location:quan-tri");
			}
			// Models
			if(isset($_GET["id"]))
			{
				$id_nguoi_dung=$_GET["id"];
			}
		
			$m_nguoi_dung=new M_nguoi_dung();
			$nguoi_dung=$m_nguoi_dung->Doc_nguoi_dung_theo_ma($id_nguoi_dung);
			//Sua nguoi dung
			if(isset($_POST["btnCapnhat"]))
			{
				$ten_dang_nhap=$_POST["ten_dang_nhap"];
				$mat_khau=$_POST["mat_khau"];
				$ho_ten=$_POST["ho_ten"];
				$ngay_sinh=$_POST["ngay_sinh"];
				$gioi_tinh=$_POST["gioi_tinh"];
				$so_dien_thoai=$_POST["so_dien_thoai"];
				$email=$_POST["email"];
				$dia_chi=$_POST["dia_chi"];
				//$quyen = $_POST["quyen"];
				// Ghi dữ liệu database
				$m_nguoi_dung=new M_nguoi_dung();
				$kq=$m_nguoi_dung->Sua_nguoi_dung($ten_dang_nhap, md5($mat_khau), $ho_ten, $ngay_sinh, $gioi_tinh,$so_dien_thoai,$email,$dia_chi,$id_nguoi_dung);
				if($kq)
				{
					// Thành công
					echo "<script>alert('Hệ thống cập nhật thành công...');window.location='nguoi-dung'</script>";						
				}
				else
				{
					// Thông báo lỗi	
					echo "<script>alert('Hệ thống cập nhật bị lỗi...')</script>";
				}
			}
			
			// View

			$title="Quản lý dL-Shop";
			$tieude="Sửa người dùng";
			$view="views/nguoi_dung/v_sua_nguoi_dung.php";
			include("include/layout.php");
	
	}

	public function Doi_mat_khau()
	{
		if ($_SESSION["quyen"]==0)
			{
				header("location:quan-tri");
			}
		//Model
		if(isset($_POST['btnCapnhat']))
		{
			$m_nguoi_dung=new M_nguoi_dung();
			$id= $_GET['id'];
			$mat_khau = $_POST['mat_khau'];
			$kq=$m_nguoi_dung->Doi_mat_khau(md5($mat_khau),$id);
			if($kq)
				{
					// Thành công
					echo "<script>alert('Hệ thống cập nhật thành công...');window.location='nguoi-dung'</script>";						
				}
				else
				{
					// Thông báo lỗi	
					echo "<script>alert('Hệ thống cập nhật bị lỗi...')</script>";
				}
		}
		// View

			$title="Quản lý dL-Shop";
			$tieude="Đổi mật khẩu người dùng";
			$view="views/nguoi_dung/v_doi_mat_khau.php";
			include("include/layout.php");
	}
		
}
?>