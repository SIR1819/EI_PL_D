<?php

$userDB = "dataD";
$passDB = "dataD";
$hostDB = "localhost";
$nameDB = "usersd";

@$conn = new mysqli($hostDB,$userDB,$passDB,$nameDB);

if ($conn->connect_errno) {
    die("ERRO : ". $conn->connect_error);
}

// echo "We are connected to the DB";
?>