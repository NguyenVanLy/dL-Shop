<?php
require_once("database.php");
class M_nhan_tin extends database
{
	
	public function Doc_nhan_tin($vt=-1,$limit=-1,$tim="")
    {
        
		$dk="";
		if($tim!="")
		{
			$dk = "where email like '%$tim%'";
		}
		$sql = "Select * from nhan_tin ".$dk;
		if($vt>=0 && $limit>0)
		{
			$sql.=" limit $vt,$limit";	
		}
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
}
?>