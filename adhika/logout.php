<?php
	setcookie('username', '' , time()-3600*24*7,"/adhika");
	header("Location: index.php");

?>