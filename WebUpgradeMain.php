<?php
session_start();
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PhanTripDotCom</title>

</head>

<?php
if(!isset($_SESSION['id'])) { //Check if login yet or not.
?>

<body>

    <h1><b><center>PhanTrip Webboard</center></b></h1>
    <hr>
    <div style = " float:right "><a href = "loginPage.php"> Login </a></div>
    <p>
    Category : 
            <select name = "category">
            <option value = "AllCategory"> -- All category -- </option>
            <option value = "General"> General </option>
            <option value = "StudyRelated"> Study related </option> 
        </select>
    </p>


	<form action = "post.php" method = "GET">
        <ul>
        
        <?php
        for($i = 1; $i <= 10; $i++) {
            echo "<li><a href = 'post.php?id=$i'>Topic discussion $i</a></li>";
        }
        ?>
    </ul>
	</form>

</body>

<?php
} else {
    ?>

<body>
    <h1><b><center>PhanTrip Webboard</center></b></h1>
    <hr>

    <div style = " float : right">
    	<?php
    	echo "<b> Current user </b>: $_SESSION[username] &nbsp | "
    	?>&nbsp;
    	<a href = "logoutPage.php"> Logout </a>
    </div>

    <p>
    Category : 
            <select name = "category">
            <option value = "AllCategory"> -- All category -- </option>
            <option value = "General"> General </option>
            <option value = "StudyRelated"> Study related </option> 
        </select>
<div>
    <p><a href = newpost.php> Create a new topic </a></p>
</div>
    </p>
	<form action = "post.php" method = "GET">
        <ul>
        
        <?php
        for($i = 1; $i <= 10; $i++) {
            echo "<li>";
            echo "<a href = 'post.php?id=$i'>Topic discussion $i</a>";
            if ($_SESSION['role'] == "a"){
            echo "&nbsp;&nbsp;&nbsp;<a href = 'delete.php?id=$i'><b>Delete</b></a>";
            }
            echo "</li>";
        }
        ?>
    </ul>
	</form>
</body>  

<?php
	}
?>

</html>