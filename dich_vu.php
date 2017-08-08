<?php
/*$views=array(
			 "pages/service/service.php",
			 );

include("includes/service/layout.php");*/
include ('controllers/c_dich_vu.php');
$c_dich_vu = new c_dich_vu();
$c_dich_vu->index();
?>