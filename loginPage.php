<?php
session_start();
if (isset($_SESSION['id']))
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
    <title>PhanTrip login</title>

    
    <style type = "text/css">
        table {
            border:2px solid black;
            width: 40%;
        }
    </style>

</head>
<body>
<?php include "nav.php";?>
    <h1><b><center>PhanTrip Webboard</center></b></h1>
    <hr>

<form action = "verify.php" method="post">
    <table align = "Center">
        <tr ><td style = "background-color:#6CD2FE;" colspan = "2">Login</td></tr>
        <tr><td>Username </td><td><input type = "text" name="loginMain" ></td></tr>
        <tr><td>Password </td><td><input type = "password" name="passwordMain" ></td></tr>
        <form action = "registerPage.html" method = "post">
            <td align = "center" colspan = "2"><input type = "submit" value="Login"></td>
        </form>
    </table>
</style>
</form>

<p align = "Center">Still not a member? <a href = "registerPage.php">Register here</a></p>
</body>
</html>