<?php
/**
* 
*/
class C_gioi_thieu
{
	
	public function index()
	{
		//Model
		
		//View
		$views=array(
			 "views/gioi_thieu/gioi_thieu.php",
			 "views/gioi_thieu/nhom.php"
			 );

		include("includes/gioi_thieu/layout.php");
	}
}
?>