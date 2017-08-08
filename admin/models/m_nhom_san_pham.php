<?php
require_once("database.php");
class M_nhom_san_pham extends database
{
	
	public function Doc_nhom_san_pham($vt=-1,$limit=-1,$tim="")
    {
        
		$dk="";
		if($tim!="")
		{
			$dk = "where ten_nhom like '%$tim%'";
		}
		$sql = "select * from nhom_san_pham ".$dk;
		if($vt>=0 && $limit>0)
		{
			$sql.=" limit $vt,$limit";	
		}
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
	
    public function Doc_nhom_san_pham_theo_ma($ma_nhom)
    {
        $sql = "Select * from nhom_san_pham where ma_nhom=?";
        $this->setQuery($sql);
        return $this->loadRow(array($ma_nhom));
    }
	
	public function Them_nhom_san_pham($ten_nhom)
	   {
		  $sql="insert into nhom_san_pham values(?,?)";
		  $this->setQuery($sql);
		  return $this->execute(array("NULL", $ten_nhom));
	   }
	 public function Sua_nhom_san_pham($ten_nhom,$ma_nhom)
	   {
		  $sql="update nhom_san_pham set ten_nhom=? where ma_nhom=?";
		  $this->setQuery($sql);
		  return $this->execute(array($ten_nhom,$ma_nhom));
	   }
	   public function Xoa_nhom_san_pham($ma_nhom)
	   {
		   $sql="delete from nhom_san_pham where ma_nhom=?";
		   $this->setQuery($sql);
		   return $this->execute(array($ma_nhom));
	   }

}
?>