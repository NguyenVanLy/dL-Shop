<?php
/*$views=array(
			 "pages/mail/mail.php",
			);

include("includes/mail/layout.php");*/
include ('controllers/c_lien_he.php');
$c_lien_he = new c_lien_he();
$c_lien_he->index();
?>