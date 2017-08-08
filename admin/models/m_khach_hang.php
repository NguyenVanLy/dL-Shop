<?php
require_once("database.php");
class M_khach_hang extends database
{
	
	public function Doc_khach_hang($vt=-1,$limit=-1,$tim="")
    {
        
		$dk="";
		if($tim!="")
		{
			$dk = "where ten_khach_hang like '%$tim%' or email like '%$tim%' or dia_chi like '%$tim%' or phai like '%$tim%' or dien_thoai like '%$tim%'";
		}
		$sql = "Select * from khach_hang ".$dk;
		if($vt>=0 && $limit>0)
		{
			$sql.=" limit $vt,$limit";	
		}

        $this->setQuery($sql);
        return $this->loadAllRows();
    }
	
    public function Doc_khach_hang_theo_ma($id)
    {
        $sql = "Select * from khach_hang where id =?";
        $this->setQuery($sql);
        return $this->loadRow(array($id));
    }
	
	
	   public function Xoa_khach_hang($ma_khach_hang)
	   {
		   $sql="delete from khach_hang where ma_khach_hang=?";
		   $this->setQuery($sql);
		   return $this->execute(array($ma_khach_hang));
	   }

}
?>