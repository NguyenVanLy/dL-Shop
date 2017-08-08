<?php
require_once("database.php");
class M_lien_he extends database
{
	
	public function Doc_lien_he($vt=-1,$limit=-1,$gt="")
    {
        
		$sql = 'Select * from lien_he';
		if($gt!="")
		{
			$sql.=" where trang_thai=?";	
		}
		if($vt>=0 && $limit>0)
		{
			$sql.=" limit $vt,$limit";	
		}
        $this->setQuery($sql);
        return ($gt!="")?$this->loadAllRows(array($gt)):$this->loadAllRows();
    }
	
	public function Cap_nhat_trang_thai($id,$trang_thai)
	{
		$sql="update lien_he set trang_thai=? where id=?";
		$this->setQuery($sql);
		return $this->execute(array($trang_thai,$id));
	}
}
?>