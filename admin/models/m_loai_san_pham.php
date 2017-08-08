<?php
require_once("database.php");
class M_loai_san_pham extends database
{
	
	public function Doc_loai_san_pham($vt=-1,$limit=-1,$tim="")
    {
        
		$dk="";
		if($tim!="")
		{
			$dk = "where ten_loai like '%$tim%'";
		}
		$sql = "select * from loai_san_pham ".$dk;
		if($vt>=0 && $limit>0)
		{
			$sql.=" limit $vt,$limit";	
		}
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
	
    public function Doc_loai_san_pham_theo_ma($ma_loai)
    {
        $sql = "Select * from loai_san_pham where ma_loai=?";
        $this->setQuery($sql);
        return $this->loadRow(array($ma_loai));
    }
	
	public function Them_loai_san_pham($ten_loai)
	   {
		  $sql="insert into loai_san_pham values(?,?)";
		  $this->setQuery($sql);
		  return $this->execute(array("NULL", $ten_loai));
	   }
	 public function Sua_loai_san_pham($ten_loai,$ma_loai)
	   {
		  $sql="update loai_san_pham set ten_loai=? where ma_loai=?";
		  $this->setQuery($sql);
		  return $this->execute(array($ten_loai,$ma_loai));
	   }
	   public function Xoa_loai_san_pham($ma_loai)
	   {
		   $sql="delete from loai_san_pham where ma_loai=?";
		   $this->setQuery($sql);
		   return $this->execute(array($ma_loai));
	   }

}
?>