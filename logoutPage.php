<?php
session_start();
session_destroy();
header("location:WebUpgradeMain.php");
die();
?>
