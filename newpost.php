<?php
session_start();
	if (!isset($_SESSION['id']))
    {
	header("location:WebUpgradeMain.php");
	die();
	}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phantrip Webboard</title>
</head>
<body>

<h1><b><center>PhanTrip Webboard</center></b></h1>
    <hr>
<div>
    <?php
    echo "User : $_SESSION[username]"
?>
</br>
<table>

<tr>
    <td>Category : </td>
    <td>
        <select name = "category">
        <option value = "AllCategory"> -- All category -- </option>
        <option value = "General"> General </option>
        <option value = "StudyRelated"> Study related </option> 
	</select>
	</td>
</tr>

<tr>
    <td>Topic :</td>
	<td><input type = "text" name = "topicBox"></textarea></td>
</tr>

<tr>
    <td>Content :</td>
	<td><textarea class = "messageBox" name = "messageWrite" rows = "2" cols = "20"></textarea></td>
</tr>

<tr>
    <td></td>
	<td><input type = "submit" value = "Save message"></td>
</tr>

</table>

<p align = "Left"><a href = "WebUpgradeMain.php">Back to main menu</a></p>

</body>
</html>