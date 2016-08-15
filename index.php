<html>
<head>
<title>BleatinglyGood</title>
<link type="text/css" rel="stylesheet" href="stylesheet.css" />
</head>

<body>
<h1> The string element deleter! 2.0 </h1>

<form action="index.php" method="post">
    Your String <br />
    <input class="form-control input-lg" type="text" name="string">
    <br /> The Eradicandum!!!*! <br />
    <input class="form-control input-lg" type="text" name="deleted">
    <br />
    <input type="submit">
</form>


<?php
    $snack = $_POST["string"];
    echo $snack;

    $delendum = $_POST["deleted"];

    str_replace($delendum, '', $snack);



    echo $_POST["deleted"];
    echo "<br />";
    echo $snack;
    
?>

<a href="http://snacksfriends.herokuapp.com/page2.php">This should go to page 2</a>

</body>
</html>