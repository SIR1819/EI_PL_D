<?php
include_once("keylib.php");

$numbers = array();
genkey($numbers,1,50,5);

$stars = array();
genkey($stars,1,12,2);

//var_dump($numbers);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Euromilhões Keys </title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="euro.css">
</head>
<body>
    <h1> Euromilhões </h1>
    <div id="keys">
        <ul class="numbers">
            <li><?php echo $numbers[0];?></li>
            <li><?php echo $numbers[1];?></li>
            <li><?php echo $numbers[2];?></li>
            <li><?php echo $numbers[3];?></li>
            <li><?php echo $numbers[4];?></li>
        </ul>
        <ul class="stars">
            <li><?php echo $stars[0];?></li>
            <li><?php echo $stars[1];?></li>
        </ul>
    </div>
    <p>&copy; Network Information Systems 2018</p>
</body>
</html>