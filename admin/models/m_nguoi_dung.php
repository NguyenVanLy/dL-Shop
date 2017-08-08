<?php
require_once("database.php");
class M_nguoi_dung extends database
{
	function Kiem_tra_tai_khoan($ten_dang_nhap)
	{
		$sql="select * from nguoi_dung where ten_dang_nhap=?";
		$this->setQuery($sql);
		return $this->loadRow(array($ten_dang_nhap));	
	}
	function Doc_nguoi_dung_theo_ten_mk($ten,$mk)
	{
		$sql="select * from nguoi_dung where ten_dang_nhap=? and mat_khau=?";
		$this->setQuery($sql);
		return $this->loadRow(array($ten,md5($mk)));	
	}	
	
	public function Doc_nguoi_dung($vt=-1,$limit=-1,$tim="")
    {
        
		$dk="";
		if($tim!="")
		{
			$dk = "where ten_dang_nhap like '%$tim%' or email like '%$tim%' or ho_ten like '%$tim%' or gioi_tinh like '%$tim%' or dia_chi like '%$tim%'";
		}
		$sql = "select * from nguoi_dung ".$dk;
		if($vt>=0 && $limit>0)
		{
			$sql.=" limit $vt,$limit";	
		}
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
	
    public function Doc_nguoi_dung_theo_ma($id)
    {
        $sql = "Select * from nguoi_dung where id =?";
        $this->setQuery($sql);
        return $this->loadRow(array($id));
    }
	
	public function Them_nguoi_dung($ten_dang_nhap, $mat_khau, $ho_ten, $ngay_sinh, $gioi_tinh,$so_dien_thoai,$email,$dia_chi)
	   {
		  $sql="insert into nguoi_dung values(?,?,?,?,?,?,?,?,?,?)";
		  $this->setQuery($sql);
		  return $this->execute(array("NULL", $ten_dang_nhap, $mat_khau, $ho_ten, $ngay_sinh, $gioi_tinh,$so_dien_thoai,$email,$dia_chi,"NULL"));
	   }
	   
	 public function Sua_nguoi_dung($ten_dang_nhap, $mat_khau, $ho_ten, $ngay_sinh, $gioi_tinh,$so_dien_thoai,$email,$dia_chi,$id)
	   {
		  $sql="update nguoi_dung set ten_dang_nhap=?,mat_khau=?,ho_ten=?,ngay_sinh=?, gioi_tinh=?,so_dien_thoai=?,email=?,dia_chi=? where id=?";
		  $this->setQuery($sql);
		  return $this->execute(array($ten_dang_nhap, $mat_khau, $ho_ten, $ngay_sinh, $gioi_tinh,$so_dien_thoai,$email,$dia_chi,$id));
	   }
	public function Doi_mat_khau($mat_khau,$id)
	   {
		  $sql="update nguoi_dung set mat_khau=? where id=?";
		  $this->setQuery($sql);
		  return $this->execute(array($mat_khau,$id));
	   }
	   public function Xoa_nguoi_dung($ma_nguoi_dung)
	   {
		   $sql="delete from nguoi_dung where ma_nguoi_dung=?";
		   $this->setQuery($sql);
		   return $this->execute(array($ma_nguoi_dung));
	   }

}
?>