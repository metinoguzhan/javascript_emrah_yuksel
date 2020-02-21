<?php

	$veri = json_decode($_GET['veri']);
	
	foreach ($veri as $key) {
		echo $key;
	}
?>