<?php
// get the key as an external service

$url = "http://localhost/SIR1819/EI_PL_D/EUROMILHOES/getKey.php";

$keyJSON = file_get_contents($url);
$keyPHP = json_decode($keyJSON);

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
            <?php
                foreach($keyPHP->numbers as $number) {
                    echo "<li>".$number."</li>";
                }
            ?>
        </ul>
        <ul class="stars">
            <?php
                foreach($keyPHP->stars as $star) {
                    echo "<li>".$star."</li>";
                }
            ?>
        </ul>
    </div>
    <p>&copy; Network Information Systems 2018</p>
</body>
</html>