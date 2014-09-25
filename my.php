<?php
	funciton printPutty($out) {
		echo "<pre>";
		var_dump($out);
		echo "</pre>";
	}
	function getDateTime() {
		return date('Y-m-d H:i:s',time());
	}
?>
