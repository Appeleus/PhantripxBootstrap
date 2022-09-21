<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PhanTripDotCom</title>

    <style type = "text/css">
        #MainTable {
            border:2px solid black;
            width: 40%;
        }

		.MessageBox {
            width: 100%;
        }
    </style>

</head>
<body>
<h1 align = "center">PhanTrip Webboard</h1>
    <hr> 
    <center><b>Want to see topic discussion <?php echo $_GET["id"] ?>?</b></center>
    <table id = "MainTable" align = "Center">

    <center><b> <?php
    if ($_GET["id"]%2==0)
    echo "This topic discussion is EVEN";
    else
    echo "This topic discussion is ODD";
    ?>
    </b>
    </center>

        <tr><td style = "background-color:#6CD2FE;" colspan = "2">Share your opinion!</td></tr>
		<tr><td><textarea class = "MessageBox" name = "MainBox" rows = "5" cols = "5"></textarea></td></tr>
	<form action = "registerPage.php" method = "post">
        <td align = "center" colspan = "2"><input type = "submit" value="Send"></td>
    </form>

    </table>
</style>
<p align = "Center"><a href = "WebUpgradeMain.php">Back to Main page</a></p>
</body>
</html>