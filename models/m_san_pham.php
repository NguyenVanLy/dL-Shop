<?php
require_once ('database.php');
class M_san_pham extends database
{
    // Đọc sản phẩm
	public function Doc_san_pham($ma_nhom = -1,$ma_loai = -1,$ma_nsx=-1,$vt=-1,$limit=-1,$tim="")
	{
		$dk="";
		if($tim!="")
		{
			$dk = "where ten_san_pham like '%$tim%'";
		}
		$sql="select * from san_pham ".$dk;
		if($ma_nhom >0&&$ma_loai>0)
		{
			$sql.=" where ma_nhom=? and ma_loai=?";
		}
		if($ma_nhom >0 && $ma_loai<=0)
		{
			$sql.=" where ma_nhom=?";
		}
		if($ma_loai >0 && $ma_nhom<=0)
		{
			$sql.=" where ma_loai=?";
		}
		if($ma_nsx > 0 && $ma_loai <=0 && $ma_nhom<=0)
		{
			$sql.=" where ma_nsx=?";
		}
		if($vt>=0 && $limit>0)
		{
			$sql.=" limit $vt,$limit";	
		}
		if($ma_nhom >0 && $ma_loai > 0)
		{
			$this->setQuery($sql);
			return $this->loadAllRows(array($ma_nhom,$ma_loai));
		}
		elseif ($ma_nhom>0) 
		{
			$this->setQuery($sql);
			return $this->loadAllRows(array($ma_nhom));
		}	
		elseif ($ma_loai>0) 
		{
			$this->setQuery($sql);
			return $this->loadAllRows(array($ma_loai));
		}
		elseif ($ma_nsx>0) 
		{
			$this->setQuery($sql);
			return $this->loadAllRows(array($ma_nsx));
		}
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	// Đọc sản phẩm theo mã sản phẩm
	public function Doc_san_pham_theo_ma_san_pham($ma_san_pham)
	{
		$sql="select * from san_pham where ma_san_pham=?";
		$this->setQuery($sql);
		return $this->loadRow(array($ma_san_pham));
	}

	// Đọc sản phẩm cùng loại
	public function Doc_san_pham_cung_loai($ma_loai,$ma_san_pham)
	{
		$sql="select * from san_pham where ma_loai=? and ma_san_pham!=?";
		$this->setQuery($sql);
		return $this->loadAllRows(array($ma_loai,$ma_san_pham));
	}

	public function Doc_hinh()
	{
		$sql="select * from hinh";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	public function Danh_gia($ma_san_pham)
	{
		$sql="select * from danh_gia where hien_thi=1 and ma_san_pham=? order by ngay_dang desc";
		$this->setQuery($sql);
		return $this->loadAllRows(array($ma_san_pham));
	}

	public function Them_danh_gia($ma_san_pham,$ho_ten,$email,$noi_dung,$ngay_dang)
	{
		$sql="insert into danh_gia values(?,?,?,?,?,?,?)";
		$this->setQuery($sql);
		return $this->execute(array("NULL",$ma_san_pham,$ho_ten,$email,$noi_dung,$ngay_dang,"NULL"));
	}

}

?>
