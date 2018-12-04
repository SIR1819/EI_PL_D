<?php
require_once("CConnect.php");

$conn = Database::getInstance();

$connection = $conn->getConnection();

$sql = "SELECT * FROM users";

$result = $connection->query($sql);

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