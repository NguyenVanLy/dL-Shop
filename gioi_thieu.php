<?php
/*$views=array(
			 "pages/about/about.php",
			 "pages/about/team.php"
			 );

include("includes/about/layout.php");*/

include ('controllers/c_gioi_thieu.php');
$c_gioi_thieu = new c_gioi_thieu();
$c_gioi_thieu->index();
?>