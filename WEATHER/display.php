<?php

//var_dump($_GET);
//echo "<hr/>";
//var_dump($_POST);
//echo "<hr/>";
//var_dump($_REQUEST);
//echo "<hr/>";

if (isset($_GET["location"])) {
    $location = urlencode($_GET["location"]);
} else {
    $location = NULL;
}

//http://www.mapquestapi.com/geocoding/v1/address?key=KEY&location=Washington,DC


if ($location) {
    $MAP_APIKEY = "XFNxQ82etHEFDAjhOSzhE4hozjwbRq45";
    $MAP_base_URL = "http://www.mapquestapi.com/geocoding/v1/address?";
    $MAP_key_param = "key=".$MAP_APIKEY;
    $MAP_location_param = "location=".$location;

    $MAP_URL = $MAP_base_URL.$MAP_key_param."&".$MAP_location_param;
    //echo $MAP_URL;

    $geoData = file_get_contents($MAP_URL);  // JSON string
    $geoDataPHP = json_decode($geoData);     // PHP Object

    $lat = $geoDataPHP->results[0]->locations[0]->latLng->lat;
    $lng = $geoDataPHP->results[0]->locations[0]->latLng->lng;

    $wlocation = $geoDataPHP->results[0]->locations[0]->adminArea5;
    $wcountry =  $geoDataPHP->results[0]->locations[0]->adminArea1;

    // URL
    $url_base = "https://api.darksky.net/forecast";
    $url_sep = "/";
    $url_params = "?units=si";
    $api_key = "814e5b27d87937feb926c8b0178f77c3";


    $url = $url_base.$url_sep.$api_key.$url_sep.$lat.",".$lng.$url_params;


    $wforecastJSON = file_get_contents($url);
    $wforecastPHP  = json_decode($wforecastJSON);


    $temp = $wforecastPHP->currently->temperature;
    $iconTXT = $wforecastPHP->currently->icon;
    $iconURL = "https://darksky.net/images/weather-icons/".$iconTXT.".png";

    //echo "You are trying to get weather info from $wlocation in $wcountry @$lat,$lng";
} else {
    echo "go back and fill the form with some location";
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Weather</title>
</head>
<body>
    <h1> Current Weather for <?php echo $wlocation;?> in <?php echo $wcountry;?></h1>
    <img src="<?php echo $iconURL;?>" />
    <h2> Temperature : <?php echo $temp; ?> </h2>
</body>
</html>