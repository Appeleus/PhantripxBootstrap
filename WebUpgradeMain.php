<?php
session_start();
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PhanTripDotCom</title>
    <!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" 
	rel="stylesheet" 
	integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" 
	crossorigin="anonymous">
	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" 
	integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" 
	crossorigin="anonymous"></script>
    <link rel="stylesheet" 
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>

<?php
if(!isset($_SESSION['id'])) { //Check if login yet or not.
?>

<body>
<?php include "nav.php";?>
</br>
<div class = "d-flex">
    <div>
        <label>
            class</label>
            <span class = "dropdown">
                <button class = "btn btn-light dropdown-toggle btn-sm" type = "button" id = "button2" 
                data-bs-toggle = "dropdown" aria-expanded = "false">--All--</button>
                <ul class = "dropdown-menu" aria-labelled="button1">
                    <li><a href = "#" class = "dropdown-item">All</a></li>
                    <li><a href = "#" class = "dropdown-item">Studies</a></li>
                    <li><a href = "#" class = "dropdown-item">General kenobi</a></li>
                </ul>
            </span>
        </div>
    </div>
    <br>
    <table class = "table table-striped">
    <h1><b><center>PhanTrip Webboard</center></b></h1>
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

            echo "<tr><td><a href = 'post.php?id=$i' style = 'text-decoration: none'>Topic discussion $i</a></td></tr>";

        }
        ?>
    </ul>
	</form>
    </table>
</div>
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