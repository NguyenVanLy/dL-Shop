<?php
require_once ('database.php');
class M_lien_he extends database
{

	public function Them_lien_he($ho_ten,$email,$so_dien_thoai,$noi_dung,$ngay_lien_he)
	{
		$sql="insert into lien_he values(?,?,?,?,?,?,?)";
		$this->setQuery($sql);
		return $this->execute(array("NULL",$ho_ten,$email,$so_dien_thoai,$noi_dung,$ngay_lien_he,"NULL"));
	}
	public function Them_nhan_tin($email)
	{
		$sql="insert into nhan_tin values(?,?)";
		$this->setQuery($sql);
		return $this->execute(array("NULL",$email));
	}

}

?>
