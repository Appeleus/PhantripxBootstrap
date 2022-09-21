<?php
session_start();
	if ($SESSION['role'] != "a")
    {
		header ("location:WebUpgradeMain.php");
		die();	
    } else {
		echo "Delete topic number" . $_GET["id"];
    }
?>