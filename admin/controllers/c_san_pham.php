<?php
@session_start();
include ("models/m_san_pham.php");
class C_san_pham
{
	function Hien_thi_san_pham()
	{
			// Models
			$m_san_pham=new M_san_pham();
			$san_phams=$m_san_pham->Doc_san_pham();
			//$hinhs=$m_san_pham->Doc_hinh();
			$gt = "";
			if(isset($_POST["tim"]))
			{
				$gt=$_POST["tim"];
				$san_phams=$m_san_pham->Doc_san_pham($gt);
			}
			
			//Phân trang
			$count=count($san_phams);
			if($count > 5)
			{
				include("../public/lib/pager.php");
				$pager=new pager();
				$limit=5;
				
				$pages=$pager->findPages($count,$limit);
				$vt=$pager->findStart($limit);
				$curpage=$_GET["page"];
				$lst=$pager->pageList($curpage,$pages);
				$san_phams = $m_san_pham->Doc_san_pham($vt,$limit,$gt);
			}
			//end phân trang
			
			// View
			
			$title="Quản lý dl-Shop";
			$tieude="Danh sách sản phẩm";
			$view="views/san_pham/v_ds_san_pham.php";
			include("include/layout.php");	
	
	}

	function Them_san_pham()
	{
		// Models
			$m_san_pham=new M_san_pham();
			$nhom_san_phams=$m_san_pham->Doc_nhom_san_pham();
			$loai_san_phams=$m_san_pham->Doc_loai_san_pham();
			$nha_san_xuats=$m_san_pham->Doc_nsx_san_pham();
			$ten_san_pham=$ma_loai=$ma_nhom=$ma_nsx=$thong_tin=$mo_ta=$hinh=$don_gia=$don_gia_khuyen_mai=$khuyen_mai=$san_pham_tieu_bieu ="";
			$thong_bao = array();
			$ktra = true;
			if(isset($_POST["btnCapnhat"]))
			{
				$ten_san_pham=$_POST["ten_san_pham"];
				$ma_loai=$_POST["loai_san_pham"];
				$ma_nhom=$_POST["nhom_san_pham"];
				$ma_nsx=$_POST["nha_san_xuat"];
				$thong_tin=$_POST["thong_tin"];
				$mo_ta=$_POST["mo_ta"];
				$hinh=$_FILES["hinh"]["error"]==0?$_FILES["hinh"]["name"]:"";
				$don_gia=$_POST["don_gia"];
				$don_gia_khuyen_mai=$_POST["don_gia_khuyen_mai"];
				$khuyen_mai=$_POST["khuyen_mai"];
				$san_pham_tieu_bieu = isset($_POST['san_pham_tieu_bieu']);
				$ngay_cap_nhat = date("Y-m-d H:i:s");
				//Kiểm tra
				if(empty($ten_san_pham))
				{
					$thong_bao['ten_san_pham'] = "Vui lòng nhập tên sản phẩm";
					$ktra = false;
				}
				elseif (empty($don_gia)) 
				{
					$thong_bao['don_gia'] = "Vui lòng nhập giá sản phẩm";
					$ktra = false;
				}
				elseif (!is_numeric($don_gia)) 
				{
					$thong_bao['don_gia'] = "Vui lòng nhập giá sản phẩm là số";
					$ktra = false;
				}
				elseif (empty($thong_tin)) 
				{
					$thong_bao['thong_tin'] = "Vui lòng nhập thông tin sản phẩm";
					$ktra = false;
				}
				elseif($_FILES["hinh"]["error"]>0)
				{
					$thong_bao['hinh'] = "Chọn hình sản phẩm";
					$ktra = false;
				}
				
				//end kiểm tra
				if($ktra)
				{
					// Ghi dữ liệu database
					$kq=$m_san_pham->Them_san_pham($ten_san_pham, $ma_loai, $ma_nhom, $ma_nsx, $thong_tin,$mo_ta,$hinh,$don_gia,$don_gia_khuyen_mai,$khuyen_mai,$san_pham_tieu_bieu,$ngay_cap_nhat);
					if($kq)
					{
						// Thành công
						// Di chuyển hình...
						if($_FILES["hinh"]["error"]==0)
						{
							$kq=move_uploaded_file($_FILES["hinh"]["tmp_name"],"../public/images/san_pham/$hinh");
								
						}
						if($kq)
						{
							echo "<script>alert('Hệ thống cập nhật thành công...');window.location='san-pham'</script>";	
						}
					}
					else
					{
						// Thông báo lỗi	
						echo "<script>alert('Hệ thống cập nhật bị lỗi...')</script>";
					}
				}
			}
			
			// View
			$title="Quản lý dL-Shop";
			$tieude="Thêm sản phẩm";
			$view="views/san_pham/v_them_san_pham.php";
			include("include/layout.php");	
	
	}
	function Sua_san_pham()
	{
		// Models
			$m_san_pham=new M_san_pham();
			$nhom_san_phams=$m_san_pham->Doc_nhom_san_pham();
			$loai_san_phams=$m_san_pham->Doc_loai_san_pham();
			$nha_san_xuats=$m_san_pham->Doc_nsx_san_pham();
			//Đọc sản phẩm theo mã
			$ma_san_pham = $_GET["ma_san_pham"];
			$san_pham = $m_san_pham->Doc_san_pham_theo_ma($ma_san_pham);
			$ten_san_pham=$ma_loai=$ma_nhom=$ma_nsx=$thong_tin=$mo_ta=$hinh=$don_gia=$don_gia_khuyen_mai=$khuyen_mai=$san_pham_tieu_bieu ="";
			$thong_bao = array();
			$ktra = true;
			if(isset($_POST["btnCapnhat"]))
			{
				$ten_san_pham=$_POST["ten_san_pham"];
				$ma_loai=$_POST["loai_san_pham"];
				$ma_nhom=$_POST["nhom_san_pham"];
				$ma_nsx=$_POST["nha_san_xuat"];
				$thong_tin=$_POST["thong_tin"];
				$mo_ta=$_POST["mo_ta"];
				$hinh=$_FILES["hinh"]["error"]==0?$_FILES["hinh"]["name"]:$san_pham->hinh;
				$don_gia=$_POST["don_gia"];
				$don_gia_khuyen_mai=$_POST["don_gia_khuyen_mai"];
				$khuyen_mai=$_POST["khuyen_mai"];
				$san_pham_tieu_bieu = isset($_POST["san_pham_tieu_bieu"]);
				$ngay_cap_nhat = date("Y-m-d H:i:s");
				//Kiểm tra
				if(empty($ten_san_pham))
				{
					$thong_bao['ten_san_pham'] = "Tên sản phẩm không được để trống";
					$ktra = false;
				}
				elseif (empty($thong_tin)) 
				{
					$thong_bao['thong_tin'] = "Vui lòng nhập thông tin sản phẩm";
					$ktra = false;
				}
				/*elseif($_FILES["hinh"]["error"]>0)
				{
					$thong_bao['hinh'] = "Chọn hình sản phẩm";
					$ktra = false;
				}*/
				elseif (empty($don_gia)) 
				{
					$thong_bao['don_gia'] = "Vui lòng nhập giá sản phẩm";
					$ktra = false;
				}
				//end kiểm tra
				if($ktra)
				{
				
					// Ghi dữ liệu database
					$kq=$m_san_pham->Sua_san_pham($ten_san_pham, $ma_loai, $ma_nhom, $ma_nsx, $thong_tin,$mo_ta,$hinh,$don_gia,$don_gia_khuyen_mai,$khuyen_mai,$san_pham_tieu_bieu,$ngay_cap_nhat,$ma_san_pham);
					if($kq)
					{
						// Thành công
						// Di chuyển hình...
						if($_FILES["hinh"]["error"]==0)
						{
							$kq=move_uploaded_file($_FILES["hinh"]["tmp_name"],"../public/images/san_pham/$hinh");
								
						}
						if($kq)
						{
							echo "<script>alert('Hệ thống cập nhật thành công...');window.location='http://localhost:8080/dlshop/admin/san-pham'</script>";	
						}
					}
					else
					{
						// Thông báo lỗi	
						echo "<script>alert('Hệ thống cập nhật bị lỗi...')</script>";
					}
				}
			}
			
			// View
			$title="Quản lý dL-Shop";
			$tieude="Sửa sản phẩm";
			$view="views/san_pham/v_sua_san_pham.php";
			include("include/layout.php");	
	
	}

	public function Cap_nhat_hinh()
	{
	$m_san_pham=new M_san_pham();
	$ma_san_pham = $_GET["ma_san_pham"];
	$hinhs=$m_san_pham->Doc_hinh_theo_ma_san_pham($ma_san_pham);
		//Model
	$hinh=NULL; 
	// Chỉ upload file có kiểu
	$valid_formats = array("jpg", "png", "gif", "zip", "bmp");
	$max_file_size = 1024*100; //100 kb
	$path = "../public/images/san_pham/"; // Upload directory
	$count = 0;
	if(isset($_POST) && $_SERVER['REQUEST_METHOD'] == "POST")
	{
		// Loop $_FILES to execute all files
		foreach ($_FILES['files']['name'] as $f => $name) 
		{     
		    if ($_FILES['files']['error'][$f] == 4) 
		    {
		        continue; // Skip file if any error found
		    }	       
		    if ($_FILES['files']['error'][$f] == 0) 
		    {	           
		        if(!in_array(pathinfo($name, PATHINFO_EXTENSION), $valid_formats) )
		        {
					$message[] = "$name định dạng không hợp lệ";
					continue; // Skip invalid file formats
				}
		        else
		        { // No error found! Move uploaded files 
					if(move_uploaded_file($_FILES["files"]["tmp_name"][$f], $path.$name)) 
					{
		            	$m_san_pham=new M_san_pham();
			            $ma_san_pham = $_GET['ma_san_pham'];
			            $ten_hinh = $name;
						$kq = $m_san_pham->Cap_nhat_hinh($ma_san_pham,$ten_hinh);
						if($kq)
						{
							// Thành công
							echo "<script>alert('Hệ thống cập nhật thành công...');window.location='san-pham'</script>";						
						}
						else
						{
							// Thông báo lỗi	
							echo "<script>alert('Hệ thống cập nhật bị lỗi...')</script>";
						}
		            	$count++; // Number of successfully uploaded files
		            	
		            }
		        }
		    }
		}
	}

		// View
			$title="Quản lý dL-Shop";
			$tieude="Cập nhật hình";
			$view="views/san_pham/v_cap_nhat_hinh.php";
			include("include/layout.php");
	}

}
?>