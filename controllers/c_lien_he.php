<?php
/**
* 
*/
class C_lien_he
{
	
	public function index()
	{
		//Model
		include ('models/m_lien_he.php');
		$m_lien_he = new M_lien_he();
		//Thêm đánh giá
		
		if(isset($_POST["btnGui"]))
			{
				$ho_ten=$_POST["ho_ten"];
				$email=$_POST["email"];
				$so_dien_thoai=$_POST["so_dien_thoai"];
				$noi_dung=$_POST["noi_dung"];
				$ngay_lien_he = date("Y-m-d H:i:s");
				
				// Ghi dữ liệu database
				$kq=$m_lien_he->Them_lien_he($ho_ten,$email,$so_dien_thoai,$noi_dung,$ngay_lien_he);
				if($kq)
				{
					// Thành công
					$ho_ten=NULL;
					$email=NULL;
					$so_dien_thoai=NULL;
					$noi_dung=NULL;
					$ngay_lien_he = NULL;
					echo "<script>alert('Hệ thống cập nhật thành công, chờ kiểm duyệt nội dung...');window.location='http://localhost:8080/dlshop/lien-he'</script>";
												
				}
				else
				{
					// Thông báo lỗi	
					echo "<script>alert('Hệ thống cập nhật bị lỗi...')</script>";
				}
			}
		//View
		$views=array(
			 "views/lien_he/lien_he.php",
			);

		include("includes/lien_he/layout.php");

	}
}
?>