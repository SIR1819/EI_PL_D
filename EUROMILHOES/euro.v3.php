<?php
include("CKey.php");
$key = new Key();

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
                foreach($key->numbers as $number) {
                    echo "<li>".$number."</li>";
                }
            ?>
        </ul>
        <ul class="stars">
            <?php
                foreach($key->stars as $star) {
                    echo "<li>".$star."</li>";
                }
            ?>
        </ul>
    </div>
    <p>&copy; Network Information Systems 2018</p>
</body>
</html>