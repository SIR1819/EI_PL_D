<?php

// URL
$url_base = "https://api.darksky.net/forecast";
$url_sep = "/";
$url_params = "?units=si";
$api_key = "814e5b27d87937feb926c8b0178f77c3";

// bialystok coordinates
$lat = 53.152195;
$lon = 23.166685;

$url = $url_base.$url_sep.$api_key.$url_sep.$lat.",".$lon.$url_params;


$wforecastJSON = file_get_contents($url);
$wforecastPHP  = json_decode($wforecastJSON);

$place = "Bialystok";
$temp = $wforecastPHP->currently->temperature;
$iconTXT = $wforecastPHP->currently->icon;
$iconURL = "https://darksky.net/images/weather-icons/".$iconTXT.".png";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1> Current Weather in <?php echo $place; ?> </h1>
    <img src="<?php echo $iconURL;?>" />
    <h2> Temperature : <?php echo $temp; ?> </h2>
</body>
</html>
