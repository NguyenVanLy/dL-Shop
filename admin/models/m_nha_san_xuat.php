<?php
require_once("database.php");
class M_nha_san_xuat extends database
{
	
	public function Doc_nha_san_xuat($vt=-1,$limit=-1,$tim="")
    {
        
		$dk="";
		if($tim!="")
		{
			$dk = "where ten_nsx like '%$tim%'";
		}
		$sql = "select * from nha_san_xuat ".$dk;
		if($vt>=0 && $limit>0)
		{
			$sql.=" limit $vt,$limit";	
		}
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
	
    public function Doc_nha_san_xuat_theo_ma($ma_nsx)
    {
        $sql = "Select * from nha_san_xuat where ma_nsx =?";
        $this->setQuery($sql);
        return $this->loadRow(array($ma_nsx));
    }
	
	public function Them_nha_san_xuat($ten_nha_san_xuat, $hinh, $website)
	   {
		  $sql="insert into nha_san_xuat values(?,?,?,?)";
		  $this->setQuery($sql);
		  return $this->execute(array("NULL", $ten_nha_san_xuat, $hinh, $website));
	   }
	 public function Sua_nha_san_xuat($ten_nha_san_xuat, $hinh, $website,$ma_nsx)
	   {
		  $sql="update nha_san_xuat set ten_nsx=?,logo_nsx=?,website=? where ma_nsx=?";
		  $this->setQuery($sql);
		  return $this->execute(array($ten_nha_san_xuat, $hinh, $website,$ma_nsx));
	   }
	   public function Xoa_nha_san_xuat($ma_nsx)
	   {
		   $sql="delete from nha_san_xuat where ma_nsx=?";
		   $this->setQuery($sql);
		   return $this->execute(array($ma_nsx));
	   }

}
?>