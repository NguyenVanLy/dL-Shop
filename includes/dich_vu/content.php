<?php
if (isset($views)) 
	{
		foreach ($views as $view) 
		{
			include ("$view");
		}
	}

?>