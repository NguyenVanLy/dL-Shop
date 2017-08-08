<?php
require_once('database.php');
class M_hoa_don extends database
{
    // Quản trị

	public function Thong_ke_hoa_don()
    {
        
		$sql='SELECT concat(Month(ngay_dat),"-",Year(ngay_dat)) as ThangNam,sum(tong_tien) as tong  FROM `hoa_don` 
  				where trang_thai in(1,2) group by Month(ngay_dat),Year(ngay_dat) order by Year(ngay_dat),Month(ngay_dat)';
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
	public function Doc_hoa_don($vt=-1,$limit=-1,$gt="")
    {
        
		$sql='SELECT hd.*,ten_khach_hang from hoa_don hd,khach_hang kh where hd.ma_khach_hang=kh.ma_khach_hang';
		if($gt!="")
		{
			$sql.=" and trang_thai=?";	
		}
		if($vt>=0 && $limit>0)
		{
			$sql.=" limit $vt,$limit";	
		}
        $this->setQuery($sql);
        return ($gt!="")?$this->loadAllRows(array($gt)):$this->loadAllRows();
    }
	public function Doc_hoa_don_theo_ma_hoa_don($ma_hoa_don)
    {
		$sql='SELECT hd.*,ten_khach_hang,email,dia_chi,dien_thoai from hoa_don hd,khach_hang kh where hd.ma_khach_hang=kh.ma_khach_hang and ma_hoa_don=?';

        $this->setQuery($sql);
        return $this->loadRow(array($ma_hoa_don));
    }
	public function Doc_chi_tiet_hoa_don_theo_ma_hoa_don($ma_hoa_don)
    {
		$sql='SELECT ct.*,ten_san_pham,hinh from chi_tiet_hoa_don ct,san_pham s where ct.ma_san_pham=s.ma_san_pham and ma_hoa_don=?';

        $this->setQuery($sql);
        return $this->loadAllRows(array($ma_hoa_don));
    }
	// Cập nhật lại tình trạng đơn hàng
	public function Cap_nhat_trang_thai($ma_hoa_don,$trang_thai)
	{
		$sql="update hoa_don set trang_thai=? where ma_hoa_don=?";
		$this->setQuery($sql);
		return $this->execute(array($trang_thai,$ma_hoa_don));
	}
}
	