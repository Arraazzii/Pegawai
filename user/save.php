<?php
	if(isset($_POST['submit'])) {
		$lat = $_POST['lat'];
		$long = $_POST['long'];
		echo $lat .", ". $long;
	}

?>