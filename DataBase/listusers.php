<?php
require_once("connect.php");

// by now we have a connection at $conn

$sql = "SELECT * FROM users";

$result = $conn->query($sql);

echo "there are ".$result->num_rows. " users";

while ($user = $result->fetch_object()) {
    echo "<li>". $user->firstname . " ". $user->lastname. "</li>";
}

$result->data_seek(0);

while ($user = $result->fetch_array()) {
    echo "<li>". $user['username']. " ".$user['password']. "</li>";
    echo "<li>". $user[1]. " ".$user[2]. "</li>";
}

?>