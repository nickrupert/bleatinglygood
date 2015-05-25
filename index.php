<html>
<head>
<title>BleatinglyGood</title>
<link type="text/css" rel="stylesheet" href="stylesheet.css" />
</head>

<body>
<h1> The string element deleter! </h1>

<form action="index.php" method="post">
    Your String <br />
    <input class="form-control input-lg" type="text" name="string">
    <br /> The Eradicandum! <br />
    <input class="form-control input-lg" type="text" name="deleted">
    <br />
    <input type="submit">
</form>


<?php
    $snack = $_POST["string"];
    echo $snack;
    echo $_POST["deleted"];
    echo "<br />";
    
?>

<a href="http://snacksfriends.herokuapp.com/page2.php">This should go to page 2</a>

</body>
</html>