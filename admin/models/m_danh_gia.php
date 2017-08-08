<?php
require_once('database.php');
class M_danh_gia extends database
{
    // Quản trị

	public function Doc_danh_gia($vt=-1,$limit=-1,$gt="")
    {
        
		$sql='SELECT dg.*,ten_san_pham from danh_gia dg,san_pham sp where dg.ma_san_pham=sp.ma_san_pham';
		if($gt!="")
		{
			$sql.=" and hien_thi=?";	
		}
		if($vt>=0 && $limit>0)
		{
			$sql.=" limit $vt,$limit";	
		}
        $this->setQuery($sql);
        return ($gt!="")?$this->loadAllRows(array($gt)):$this->loadAllRows();
    }
	// Cập nhật lại tình trạng đơn hàng
	public function Cap_nhat_trang_thai($id,$hien_thi)
	{
		$sql="update danh_gia set hien_thi=? where id=?";
		$this->setQuery($sql);
		return $this->execute(array($hien_thi,$id));
	}
}
	