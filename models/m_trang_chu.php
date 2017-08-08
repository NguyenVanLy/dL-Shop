<?php
require_once ('database.php');
class M_trang_chu extends database
{
    public function Doc_top_giay()
	{
		$sql="select * from san_pham where ma_loai=1 and san_pham_tieu_bieu=1 limit 0,3";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	public function Doc_top_quan_ao()
	{
		$sql="select * from san_pham where ma_loai=2 and san_pham_tieu_bieu=1 limit 0,3";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	public function Doc_top_phu_kien()
	{
		$sql="select * from san_pham where ma_loai=3 and san_pham_tieu_bieu=1 limit 0,3";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}

	public function Doc_nha_san_xuat()
	{
		$sql="select * from nha_san_xuat";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
}

?>
