<?php
require_once("database.php");
class M_san_pham extends database
{
	public function Doc_san_pham($vt=-1,$limit=-1,$tim="")
    {
        
		$dk="";
		if($tim!="")
		{
			$dk = "where ten_san_pham like '%$tim%' or don_gia like '%$tim%' or thong_tin like '%$tim%' or mo_ta like '%$tim%'";
		}

		$sql = "select * from san_pham ".$dk." order by ngay_cap_nhat desc";
		if($vt>=0 && $limit>0)
		{
			$sql.=" limit $vt,$limit";	
		}
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
	
	public function Doc_nhom_san_pham()
	{
		$sql = "Select * from nhom_san_pham";
		$this->setQuery($sql);
        return $this->loadAllRows();	
	}

	public function Doc_loai_san_pham()
	{
		$sql = "Select * from loai_san_pham";
		$this->setQuery($sql);
        return $this->loadAllRows();	
	}
	public function Doc_nsx_san_pham()
	{
		$sql = "Select * from nha_san_xuat";
		$this->setQuery($sql);
        return $this->loadAllRows();	
	}

    public function Doc_san_pham_theo_ma($ma_san_pham)
    {
        $sql = "Select * from san_pham where ma_san_pham =?";
        $this->setQuery($sql);
        return $this->loadRow(array($ma_san_pham));
    }
	
	public function Them_san_pham($ten_san_pham, $ma_loai, $ma_nhom, $ma_nsx, $thong_tin,$mo_ta,$hinh,$don_gia,$don_gia_khuyen_mai,$khuyen_mai,$san_pham_tieu_bieu,$ngay_cap_nhat)
	   {
		  $sql="insert into san_pham values(?,?,?,?,?,?,?,?,?,?,?,?,?)";
		  $this->setQuery($sql);
		  return $this->execute(array("NULL", $ten_san_pham, $ma_loai, $ma_nhom, $ma_nsx, $thong_tin,$mo_ta,$hinh,$don_gia,$don_gia_khuyen_mai,$khuyen_mai,$san_pham_tieu_bieu,$ngay_cap_nhat));
	   }
	   
	 public function Sua_san_pham($ten_san_pham, $ma_loai, $ma_nhom, $ma_nsx, $thong_tin,$mo_ta,$hinh,$don_gia,$don_gia_khuyen_mai,$khuyen_mai,$san_pham_tieu_bieu,$ngay_cap_nhat,$ma_san_pham)
	   {
		  $sql="update san_pham set ten_san_pham=?,ma_loai=?,ma_nhom=?,ma_nsx=?, thong_tin=?,mo_ta=?,hinh=?,don_gia=?,don_gia_khuyen_mai=?,khuyen_mai=?,san_pham_tieu_bieu=?,ngay_cap_nhat=? where ma_san_pham=?";
		  $this->setQuery($sql);
		  return $this->execute(array($ten_san_pham, $ma_loai, $ma_nhom, $ma_nsx, $thong_tin,$mo_ta,$hinh,$don_gia,$don_gia_khuyen_mai,$khuyen_mai,$san_pham_tieu_bieu,$ngay_cap_nhat,$ma_san_pham));
	   }
	  public function Cap_nhat_hinh($ma_san_pham,$ten_hinh)
	  {
	  	$sql="insert into hinh values(?,?,?)";
		  $this->setQuery($sql);
		  return $this->execute(array("NULL", $ma_san_pham,$ten_hinh));
	  }

	  public function Doc_hinh_theo_ma_san_pham($ma_san_pham)
	  {
	  	$sql="select * from hinh where ma_san_phams=?";
	  	$this->setQuery($sql);
        return $this->loadAllRows(array($ma_san_pham));
	  }
}
?>