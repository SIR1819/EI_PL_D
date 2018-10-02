<?php

include_once("CKey.php");

$key = new Key();

//output some JSON with the key
header("Content-Type:application/json");
echo $key->asJSON();
?>