<?php
@session_start();
?>
<!-- <a href="quan-tri"><img id="logo" src="public/layout/resources/images/alphatek.png" alt="logo T3H" /></a>  -->
<div style="margin: 30px;">
	<a href="quan-tri"><span style="font-size: 40px;">dL-Shop</span></a> 
</div>

<!-- Sidebar Profile links -->
<div id="profile-links"> Chào, <a href="#" title="Edit your profile">
<?php echo $_SESSION["ho_ten"] ?>
</a><br />
  <br />
  <a href="#" title="View the Site">View the Site</a> | 
  <a href="quan-tri?func=exit" title="Sign Out">Đăng xuất</a> </div>
