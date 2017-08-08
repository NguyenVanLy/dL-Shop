<?php
include("models/m_lien_he.php");
$mail=$_POST["mail"];
$m_lien_he=new M_lien_he();
$kq=$m_lien_he->Them_nhan_tin($mail);
if($kq)
{
	echo 1;	
}
else
{
	echo 0;	
}
?>