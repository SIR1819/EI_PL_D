<?php
$users[] = 'ana';
$users[] = 'anabela';
$users[] = 'anabola';
$users[] = 'anali';
$users[] = 'analise';
$users[] = 'analisa';
$users[] = 'anatomia';
$users[] = 'anatema';
$users[] = 'ananas';
$users[] = 'anamaria';
$users[] = 'anamar';

if (isset($_GET['user'])) {
    $user = $_GET['user'];
} else {
    $user = "";
}

$result = [];

if (in_array($user,$users)) {
    $result['status'] = false;
} else {
    $result['status'] = true;
}

echo json_encode($result);

?>