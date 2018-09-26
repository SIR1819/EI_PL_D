<?php
function genkey(&$inarray, $min, $max, $num) {
    $inarray = array();
    while(sizeof($inarray)<$num) {
        $new = rand($min, $max);
        if (!in_array($new,$inarray)) {
            array_push($inarray,$new);
        }
        sort($inarray);
    }
}
?>
