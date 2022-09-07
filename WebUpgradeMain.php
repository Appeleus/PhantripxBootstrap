<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PhanTripDotCom</title>

</head>

<body>
    <h1><b><center>PhanTrip Webboard</center></b></h1>
    <hr>
    <p style = " float:right "><a href = "loginPage.html"> Login </a></p>
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
</html>