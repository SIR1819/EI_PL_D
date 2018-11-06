<?php

include_once("CKey.php");

$key = new Key();

// delay
sleep(3);
//output some JSON with the key
header("Content-Type:application/json");
echo $key->asJSON();
?>