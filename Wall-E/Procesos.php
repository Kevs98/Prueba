<?php
if ($_REQUEST['encender19']) {
	exec("sudo /./home/pi/foco1ON.sh");
	}
	header("location:index.php");
?>