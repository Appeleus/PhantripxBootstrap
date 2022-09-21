<?php
session_start();
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify</title>
</head>
<body>
    <h1 align = "center">PhanTrip Webboard</h1>
    <hr>
    <div align = "center">
        <?php 
        $Login = $_POST["loginMain"]; 
		$Password = $_POST["passwordMain"];

        if ($Login == "admin" && $Password == "ad1234")
        {
        echo "Welcome back " . strtoupper($Login);
		$_SESSION["username"] = $Login;
        $_SESSION["role"] = "a";
        $_SESSION["id"] = session_id();
        }

        else if ($Login == "member" && $Password == "mem1234")
        {
        echo "Welcome back " . strtoupper($Login);
		$_SESSION["username"] = $Login;
        $_SESSION["role"] = "m";
        $_SESSION["id"] = session_id();
        }

        else echo "Account name or Password incorrect, please try again.";
		
        
        
        ?><br>
        

        



<p align = "Center"><a href = "WebUpgradeMain.php">Back to Main page</a></p>
</body>
</html>